<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trend | Invest</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Charis+SIL:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../app/adds/link/normalize.css">
        <link rel="stylesheet" href="../app/adds/link/style.css">
        <script src="https://kit.fontawesome.com/6337da2237.js" crossorigin="anonymous"></script>
        
    </head>
<body>
    <?php
        include ('../app/view/header.php');
        if(isset($_SESSION['u_ui'])) {
            echo "<p>You successfully logged in! Begin your investing now.</p>";
    }
    ?>
    <section class="login">
        <div class="return flex-container">
            <a href="./index.php"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
            <h3>Sign In.</h3>
        </div>
        <div class="logInMain">
            <div class="wrapper">
                <div class="LogInMain-col1">
                    <div class="LogInMain-col1-header">
                        <h1>Log In</h1>
                    </div>
                    <div class="LogInMain-col1-content">
                        <form action="../includes/login.inc.php" method="post">
                            <input type="text" name="uid" placeholder="NAME" required><br>
                            <input type="password" name="pwd" id="passwordField" placeholder="PASSWORD" required>
                            <div class="adds1 flex-container">
                                <div class="checkbox-visibility"><input type="checkbox" name="passwordVisibility" onclick="visibility()"> Show password</div>
                                <div class="RememberCheck"><input type="checkbox" name="remeberInputs"> <span>Remember me</span></div>
                                <a href="/">Forgot password?</a>
                            </div>
                            <button type="submit" name="submit">Sign Up</button>
                            <div class="adds1">
                                <p class="createAcc">Not registered yet? <a href="./investsignup.php">Create an Account</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="LogInMain-col2">
                    <img src="../app/adds/assets/invest/pepi-stojanovski-MJSFNZ8BAXw-unsplash.jpg" alt="LoadsOfMoney">
                    <img src="../app/adds/assets/invest/alexandre-pellaes-6vAjp0pscX0-unsplash.jpg" alt="AuditoriumsOfTheClub">
                </div>
            </div>
        </div>
        <div id="toTop" onclick="takeMeToTop()">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="4em" width="4em"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.001,1.993C6.486,1.994,2,6.48,2,11.994c0.001,5.514,4.487,10,10,10c5.515,0,10.001-4.486,10.001-10 S17.515,1.994,12.001,1.993z M12,19.994c-4.41,0-7.999-3.589-8-8c0-4.411,3.589-8,8.001-8.001c4.411,0.001,8,3.59,8,8.001 S16.412,19.994,12,19.994z">
                </path>
                <path d="M12.001 8.001L7.996 12.006 11.001 12.006 11.001 16 13.001 16 13.001 12.006 16.005 12.006z">
                </path>
            </svg>
        </div>
    </section>
    <section class="get-in-touch get-in-touch-extra">
        <div class="get-in-touch-header">
            <h1>Get in touch</h1>
        </div>
        <div class="get-in-touch-content ">
            <div>
                <h6>Press</h6>
                <span><a href="mailto:press@trend.com">press@trend.com</a></span>
            </div>
            <div>
                <h6>General</h6>
                <span><a href="mailto:general@trend.com">general@trend.com</a></span>
            </div>
            <div>
                <h6>Careers</h6>
                <span><a href="mailto:careers@trend.com">careers@trend.com</a></span>
            </div>
            <div>
                <h6>Ideas</h6>
                <span><a href="mailto:ideas@trend.com">ideas@trend.com</a></span>
            </div>
        </div>
    </section>
    <?php
    include ('../app/view/footer.php');
    ?>
    <script src="https://kit.fontawesome.com/6337da2237.js" crossorigin="anonymous"></script>
    <script src="../app/adds/link/script.js" defer></script>
</body>
</html>