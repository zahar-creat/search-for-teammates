<?php require "connect_db.php"; // подключаем файл для соединения с БД
session_start();
if (isset($_POST["submit"])) {
    $time_zone = $_POST["time_zone"];
    $description = $_POST["description"];
    $age = $_POST["age"];
    $mood = $_POST["mood"];
    $country = $_POST["country"];
    $game_id = $_POST["game"];
    $user_id = $_SESSION["user_id"];
    $moods = ["Серьезно", "Не серьезно"];
    $countrys = [
        "Россия",
        "Казахстан",
        "Украина",
        "Молдова",
        "Армения"
    ];
    $UTCs = [
        "UTC-12",
        "UTC-11",
        "UTC-10",
        "UTC-9",
        "UTC-8",
        "UTC-7",
        "UTC-6",
        "UTC-5",
        "UTC-4",
        "UTC-3",
        "UTC-2",
        "UTC-1",
        "UTC+0",
        "UTC+1",
        "UTC+2",
        "UTC+3",
        "UTC+4",
        "UTC+5",
        "UTC+6",
        "UTC+7",
        "UTC+8",
        "UTC+9",
        "UTC+10",
        "UTC+11",
        "UTC+12"
    ];
    function clean($var)
    {
        $var = strip_tags($var);
        $var = trim($var);
        $var = str_replace(chr(10), "<br>", $var);
        $var = str_replace(chr(13), "<br>", $var);
        return $var;
    }
    $time_zone = clean($time_zone);
    $description = clean($description);
    $age = clean($age);
    $mood = clean($mood);
    $country = clean($country);
    $game_id = clean($game_id);

    if (empty($time_zone) || empty($description) || empty($age) || empty($mood) || empty($country) || empty($game_id)) {
        header("Location: ../forms.php?error=emptyfields");
        exit();
    } else if (!in_array($time_zone, $UTCs)) {
        header("Location: ../forms.php?error=wrongutc");
        exit();
    } else if (!is_numeric($age) || ($age < 10 || $age > 60)) {
        header("Location: ../forms.php?error=wrongage");
        exit();
    } else if (!in_array($mood, $moods)) {
        header("Location: ../forms.php?error=wrongmood");
        exit();
    } else if (!in_array($country, $countrys)) {
        header("Location: ../forms.php?error=wrongcountry");
        exit();
    } else {
        $sqlreq = "SELECT * from games WHERE id=?";
        $stmt = mysqli_stmt_init($mysql);
        if (!mysqli_stmt_prepare($stmt, $sqlreq)) {
            header("Location: ../forms.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $game_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rows = mysqli_stmt_num_rows($stmt);
            if ($rows == 0) {
                header("Location: ../forms.php?error=wronggame");
                exit();
            } else {
                $insert = "INSERT INTO request (
                    time_zone, 
                    age,
                    description,
                    mood,
                    country,
                    game_id,
                    user_id,
                    date
                ) VALUES (
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    ?,
                    UTC_TIMESTAMP()
                )";
                $stmt = mysqli_stmt_init($mysql);
                if (!mysqli_stmt_prepare($stmt, $insert)) {
                    header("Location: ../forms.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param(
                        $stmt,
                        "sisssii",
                        $time_zone,
                        $age,
                        $description,
                        $mood,
                        $country,
                        $game_id,
                        $user_id
                    );
                    mysqli_stmt_execute($stmt);
                    header("Location: ../forms.php?success=true");
                    exit();
                }
            }
        }
    }
}
else{
    header("Location: ../forms.php");
    exit();
}
