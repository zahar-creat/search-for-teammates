<?php
require "connect_db.php";
session_start();
if (isset($_POST["submit"])) {
    $vk = $_POST["vk_id"];
    $discord = $_POST["ds_id"];
    $steam = $_POST["steam_id"];
    $user_id = $_SESSION["user_id"];

    function clean($var)
    {
        $var = strip_tags($var);
        $var = trim($var);
        $var = str_replace(chr(10), "<br>", $var);
        $var = str_replace(chr(13), "<br>", $var);
        return $var;
    }
    $vk = clean($vk);
    $discord = clean($discord);
    $steam = clean($steam);
    $sql =  "SELECT * FROM socials WHERE vk_id=? or ds_id=? or steam_id=? or user_id=?";
    $stmt = mysqli_stmt_init($mysql);

    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "sssi",
        $vk,
        $discord,
        $steam,
        $user_id,
    );
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);


    $num_rows = mysqli_stmt_num_rows($stmt);

    if (!$num_rows) {

        $insert = "INSERT INTO socials(
        steam_id, 
        ds_id,
        vk_id,
        user_id
    ) VALUES (
        ?,
        ?,
        ?,
        ?
    )";
        $stmt = mysqli_stmt_init($mysql);
        if (!mysqli_stmt_prepare($stmt, $insert)) {
            header("Location: ../profileedit.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param(
                $stmt,
                "sssi",
                $vk,
                $discord,
                $steam,
                $user_id
            );
            mysqli_stmt_execute($stmt);
            header("Location: ../profile.php?success=true");
            exit();
        }
    } else {
        mysqli_stmt_execute($stmt);
        header("Location: ../profile.php?error=notempty");
        exit();
    }
}
