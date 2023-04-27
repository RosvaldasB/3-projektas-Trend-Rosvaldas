<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend | portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charis+SIL:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/adds/link/normalize.css">
    <link rel="stylesheet" href="../app/adds/link/style.css">
    <script src="https://kit.fontawesome.com/6337da2237.js" crossorigin="anonymous"></script>
    <script src="../app/link/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js" defer></script>
    
</head>

<body>
    <?php
        include ('../app/view/header.php');
    ?>
    <section class="porfolio">
        <div class="return flex-container">
                <a href="./index.php"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
                <h3>Portfolio.</h3>
        </div>
        <div class="confidence">
                <div class="wrapper flex-container">
                    <div class="confidence-content-col1">
                        <h1>We knew they were going to win, we just helped them win bigger.</h1>
                        <p><span>We invest $1M-50M</span> across stages and geographies.</p>
                    </div>
                    <div class="confidence-content-col2 flex-container">
                            <img src="../app/adds/assets/portfolio/cytonn-photography-n95VMLxqM2I-unsplash.jpg"
                                alt="collaboration">
                            <img src="../app/adds/assets/portfolio/headway-F2KRf_QfCqw-unsplash.jpg" alt="clubmeetings">
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
        <div class="invest-now">
            <div class="invest-now1 flex-container">
                <div class="invest-now1-col1">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="14em" width="14em" xmlns="http://www.w3.org/2000/svg"><path d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path></svg>
                </div>
                <div class="invest-now1-col2">
                    <p>We believe in giving back to our community, and that's why we also invest in community projects, charities, and open-source projects. We understand the importance of supporting causes that make a positive impact on society, and we take pride in being a responsible corporate citizen. By investing in community projects, we aim to promote sustainable development and make a lasting difference in the lives of people. We also support charities that are working towards improving the lives of the less fortunate, and we believe that every little bit helps in making a difference. Finally, we contribute to open-source projects to promote innovation and collaboration in the tech community. <a href="/">Click here</a> to learn more about our community initiatives and how you can get involved.</p>
                </div>
            </div>
            <div class="invest-now2">
                <div class="invest-now2-header">
                    <h2>How much can you earn</h2>
                </div>
                <div>
                    <canvas id="investChart" max-width="calc(100% - 5%)" height="max-content"></canvas>
                </div>
            </div>
            <div class="invest-now3">
                <div class="invest-now3-header">
                    <h2>About the company</h2>
                </div>
                <div class="invest-now3-content">
                    <p>Start investing with us <span>today</span> and join the trend of successful business club members. Don't miss out on the opportunity for financial growth.</p>
                    <button>Start investing</button>
                </div>
            </div>
        </div>
        <div class="partners">
            <div class="wrapper flex-container">
                <div class="company">
                    <div class="company-logo">
                        <img src="../app/adds/assets/portfolio/healthcatalyst.svg" alt="healthcatalyst-logo">
                    </div>
                    <div class="company-name">
                        <h3>Health Catalyst</h3>
                    </div>
                </div>
                <div class="company">
                    <div class="company-logo">
                        <img src="../app/adds/assets/portfolio/google-icon.svg" alt="google-logo">
                    </div>
                    <div class="company-name">
                        <h3>Google</h3>
                    </div>
                </div>
                <div class="company">
                    <div class="company-logo">
                        <img src="../app/adds/assets/portfolio/loom.svg" alt="loom-logo">
                    </div>
                    <div class="company-name">
                        <h3>Loom</h3>
                    </div>
                </div>
                <div class="company">
                    <div class="company-logo">
                        <img src="../app/adds/assets/portfolio/magneto.svg" alt="magneto-logo">
                    </div>
                    <div class="company-name">
                        <h3>Magneto</h3>
                    </div>
                </div>
                <div class="company">
                    <div class="company-logo">
                        <img src="../app/adds/assets/portfolio/nextdoor.svg" alt="nextdoor-logo">
                    </div>
                    <div class="company-name">
                        <h3>Nextdoor</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured-companies">
            <div class="wrapper">
                <div class="featured-companies-header flex-container">
                    <h1>Featured companies</h1>
                    <div class="controls2">
                        <button class="companyprevBtn"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M872 474H286.9l350.2-304c5.6-4.9 2.2-14-5.2-14h-88.5c-3.9 0-7.6 1.4-10.5 3.9L155 487.8a31.96 31.96 0 0 0 0 48.3L535.1 866c1.5 1.3 3.3 2 5.2 2h91.5c7.4 0 10.8-9.2 5.2-14L286.9 550H872c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8z"></path></svg></button>
                        <button class="companynextBtn"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="2em" width="2em" xmlns="http://www.w3.org/2000/svg"><path d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 0 0 0-48.4z"></path></svg></button>
                    </div>
                </div>
                <div class="featured-companies-content flex-container">
                    <div class="company-content-item">
                        <div class="company-item-name">
                            <h2>Tesla</h2>
                        </div>
                        <div class="company-item-description">
                            <p>Investing in Tesla offers the opportunity to participate in the growth of the electric vehicle industry, but requires careful consideration of the risks involved.</p>
                        </div>
                        <div class="company-item-more">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="2.5em" width="2.5em" xmlns="http://www.w3.org/2000/svg"><path d="M864 170h-60c-4.4 0-8 3.6-8 8v518H310v-73c0-6.7-7.8-10.5-13-6.3l-141.9 112a8 8 0 0 0 0 12.6l141.9 112c5.3 4.2 13 .4 13-6.3v-75h498c35.3 0 64-28.7 64-64V178c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        <div class="company-item-img">
                            <img src="../app/adds/assets/portfolio/tesla.jpg" alt="tesla-photo">
                        </div>
                    </div>
                    <div class="company-content-item">
                        <div class="company-item-name">
                            <h2>Amazon</h2>
                        </div>
                        <div class="company-item-description">
                            <p>Investing in Amazon can offer potential for long-term growth with its dominant position in e-commerce and expanding businesses in cloud computing and advertising.</p>
                        </div>
                        <div class="company-item-more">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="2.5em" width="2.5em" xmlns="http://www.w3.org/2000/svg"><path d="M864 170h-60c-4.4 0-8 3.6-8 8v518H310v-73c0-6.7-7.8-10.5-13-6.3l-141.9 112a8 8 0 0 0 0 12.6l141.9 112c5.3 4.2 13 .4 13-6.3v-75h498c35.3 0 64-28.7 64-64V178c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        <div class="company-item-img">
                            <img src="../app/adds/assets/portfolio/amazon.jpg" alt="amazon-photo">
                        </div>
                    </div>
                    <div class="company-content-item">
                        <div class="company-item-name">
                            <h2>Apple</h2>
                        </div>
                        <div class="company-item-description">
                            <p>Investing in Apple can be a relatively stable option due to its strong brand, loyal customer base, and diverse revenue streams.</p>
                        </div>
                        <div class="company-item-more">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="2.5em" width="2.5em" xmlns="http://www.w3.org/2000/svg"><path d="M864 170h-60c-4.4 0-8 3.6-8 8v518H310v-73c0-6.7-7.8-10.5-13-6.3l-141.9 112a8 8 0 0 0 0 12.6l141.9 112c5.3 4.2 13 .4 13-6.3v-75h498c35.3 0 64-28.7 64-64V178c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        <div class="company-item-img">
                            <img src="../app/adds/assets/portfolio/apple.jpg" alt="apple-photo">
                        </div>
                    </div>
                    <div class="company-content-item">
                        <div class="company-item-name">
                            <h2>Microsoft</h2>
                        </div>
                        <div class="company-item-description">
                            <p>Investing in Microsoft can provide exposure to the technology sector with its dominant position in software, cloud computing, and gaming industries.</p>
                        </div>
                        <div class="company-item-more">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="2.5em" width="2.5em" xmlns="http://www.w3.org/2000/svg"><path d="M864 170h-60c-4.4 0-8 3.6-8 8v518H310v-73c0-6.7-7.8-10.5-13-6.3l-141.9 112a8 8 0 0 0 0 12.6l141.9 112c5.3 4.2 13 .4 13-6.3v-75h498c35.3 0 64-28.7 64-64V178c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        <div class="company-item-img">
                            <img src="../app/adds/assets/portfolio/microsoft.jpg" alt="microsoft-photo">
                        </div>
                    </div>
                    <div class="company-content-item">
                        <div class="company-item-name">
                            <h2>Meta</h2>
                        </div>
                        <div class="company-item-description">
                            <p>Investing in Meta (formerly Facebook) may offer long-term potential with its leadership in social media and growing virtual and augmented reality businesses.</p>
                        </div>
                        <div class="company-item-more">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="2.5em" width="2.5em" xmlns="http://www.w3.org/2000/svg"><path d="M864 170h-60c-4.4 0-8 3.6-8 8v518H310v-73c0-6.7-7.8-10.5-13-6.3l-141.9 112a8 8 0 0 0 0 12.6l141.9 112c5.3 4.2 13 .4 13-6.3v-75h498c35.3 0 64-28.7 64-64V178c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        <div class="company-item-img">
                            <img src="../app/adds/assets/portfolio/meta.webp" alt="meta-photo">
                        </div>
                    </div>
                    <div class="company-content-item">
                        <div class="company-item-name">
                            <h2>NVIDIA</h2>
                        </div>
                        <div class="company-item-description">
                            <p>Investing in NVIDIA can offer potential for growth with its leadership in the high-performance computing and artificial intelligence industries.</p>
                        </div>
                        <div class="company-item-more">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="2.5em" width="2.5em" xmlns="http://www.w3.org/2000/svg"><path d="M864 170h-60c-4.4 0-8 3.6-8 8v518H310v-73c0-6.7-7.8-10.5-13-6.3l-141.9 112a8 8 0 0 0 0 12.6l141.9 112c5.3 4.2 13 .4 13-6.3v-75h498c35.3 0 64-28.7 64-64V178c0-4.4-3.6-8-8-8z"></path></svg>
                        </div>
                        <div class="company-item-img">
                            <img src="../app/adds/assets/portfolio/nvidia.jpg" alt="nvidia-photo">
                        </div>
                    </div>
                </div>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/6337da2237.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js" defer></script>
    <script src="../app/adds/link/script.js"></script>
    <script src="../app/adds/link/slide3.js" defer></script>
    <script src="../app/adds/link/chart.js"></script>
</body>

</html>