<?php
    session_start();
?>
        <header>
            <div class="navigation flex-container">
                <div class="logo">
                    <h1><a href="./index.php">Trend</a></h1>
                </div>
                <?php if(isset($_SESSION['u_id'])){?> 
                    <div class="nav">
                        <ul>
                            <li> <a class="accounts" href="./invest.php">invest</a> </li>
                            <li> <?php echo '<form action="../includes/logout.inc.php" method="post">
                            <button class="logoutBtn" type="submit" name="submit"><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg"><path d="M12 10v-2h-5v-2h5v-2l3 3zM11 9v4h-5v3l-6-3v-13h11v5h-1v-4h-8l4 2v9h4v-3z"></path></svg></button>
                            </form>'?></li>
                            <li> <a href="./aboutus.php">About us</a> </li>
                            <li> <a href="./portfolio.php">Portfolio</a> </li>
                            <li> <a href="./news.php">News</a> </li>
                        </ul>
                    </div>
                    <div id="mobile-nav">
                        <ul class="flex-container">
                            <a class="accounts" href="./invest.php">
                                <li>Invest</li>
                            </a>
                            <a href="./aboutus.php">
                                <li>About us</li>
                            </a>
                            <a href="./portfolio.php">
                                <li>Portfolio</li>
                            </a>
                            <a href="./news.php">
                                <li>News</li>
                            </a>
                            <li> <?php echo '<form action="../includes/logout.inc.php" method="post">
                            <button class="logoutBtn" type="submit" name="submit"><svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="1.2em" width="1.2em" xmlns="http://www.w3.org/2000/svg"><path d="M12 10v-2h-5v-2h5v-2l3 3zM11 9v4h-5v3l-6-3v-13h11v5h-1v-4h-8l4 2v9h4v-3z"></path></svg></button>
                            </form>'?></li>
                        </ul>
                    </div>
                <?php }  else { ?>
                    <div class="nav">
                        <ul>
                            <li> <a class="accounts" href="./invest.php">invest</a> </li>
                            <li> <a href="./aboutus.php">About us</a> </li>
                            <li> <a href="./portfolio.php">Portfolio</a> </li>
                            <li> <a href="./news.php">News</a> </li>
                        </ul>
                    </div>
                    <div id="mobile-nav">
                        <ul class="flex-container">
                            <a class="accounts" href="./invest.php">
                                <li>Invest</li>
                            </a>
                            <a href="./aboutus.php">
                                <li>About us</li>
                            </a>
                            <a href="./portfolio.php">
                                <li>Portfolio</li>
                            </a>
                            <a href="./news.php">
                                <li>News</li>
                            </a>
                        </ul>
                    </div>
                <?php } ?>
                <a href="javascript:void(0)" onclick="showMenu()" id="mMenu"><i class="fa-solid fa-bars fa-2x"></i></a>
            </div>
        </header>

