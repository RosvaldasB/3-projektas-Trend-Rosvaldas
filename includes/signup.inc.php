<?php
if (isset($_POST['submit'])) {
    include_once '../includes/db.inc.php';
    $first = mysqli_real_escape_string($conn, $_POST['ufname']);
    $last = mysqli_real_escape_string($conn, $_POST['ulname']);
    $email = mysqli_real_escape_string($conn, $_POST['uemail']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../public/investsignup.php?signup=empty");
        exit();
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../public/investsignup.php?signup=invalid");
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../public/investsignup.php?signup=invalidemail");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
                $result = mysqli_query($conn, $sql);
                $result_check = mysqli_num_rows($result);
                if ($result_check > 0) {
                    header("Location: ../public/investsignup.php?signup=usertaken");
                    exit();
                } else {
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
                    VALUES('$first', '$last', '$email', '$uid', '$hashedPwd');
                    ";
                    mysqli_query($conn, $sql);
                    header("Location: ../public/invest.php?=signup=success");
                    exit();
                }
            }

        }
    }
} else {
    header("Location: ../public/investsignup.php");
    exit();
}