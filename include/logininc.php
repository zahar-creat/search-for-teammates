<?php

if (isset($_POST['submit'])) {
    require 'connect_db.php';

    $login = $_POST['login'];
    $password = $_POST['pass'];

    if (empty($login) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE login=? OR email=?";
        $stmt = mysqli_stmt_init($mysql);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
            echo mysqli_stmt_error($stmt);
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $login, $login);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($rows = mysqli_fetch_assoc($result)){
                $passcheck = password_verify($password, $rows["pass"]);
                if (!$passcheck) {
                    Header("Location: ../login.php?error=wrongpass");
                    exit();
                } else if ($passcheck) {
                    session_start();
                    $_SESSION["username"] = $rows["login"];
                    $_SESSION["user_id"] = $rows["id"];
                    header("Location: ../index.php?login=success");
                    exit();
                } else {
                    Header("Location: ../login.php?error=wrongpass");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($mysql);
} else {
    header("Location: signup.php");
    exit();
}