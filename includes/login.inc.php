<?php
    session_start();
    if(isset($_POST['submit'])) {
        include_once '../includes/db.inc.php';
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

        if(empty($uid) || empty($pwd)) {
            header("Location: ../public/invest.php?=login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check < 1) {
                header("Location: ../public/invest.php?=login=error");
                exit();
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                    if($hashedPwdCheck == false) {
                        header("Location: ../public/invest.php?=login=error");
                        exit();
                    } elseif($hashedPwdCheck == true) {
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_first'] = $row['user_ufname'];
                        $_SESSION['u_last'] = $row['user_ulname'];
                        $_SESSION['u_email'] = $row['user_uemail'];
                        $_SESSION['u_uid'] = $row['user_uid'];
                        header("Location: ../public/index.php?Welcome_" . "$uid");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../public/invest.php?=login=error");
        exit();
    }