<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend | News</title>
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
    ?>
    <section class="news">
        <div class="return flex-container">
            <a href="./index.php"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
            <h3>News.</h3>
        </div>
        <div class="header-content">
            <h1>Lastest news</h1>
        </div>
        <div class="news-content">
            <div class="news1 newsitem">
                <img src="../app/adds/assets/news/flag-republic-china-broken-brick-wall-half-usa-united-states-america-crisis-president-nuclear-atomic-customs-112835875.jpg"
                    alt="newtrade">
                <div class="newsitem-content">
                    <h3>Global Markets React to New Trade Agreements Between US and China</h3>
                    <p>As news of the new trade agreements between the US and China broke, global markets were thrown
                        into a frenzy. Investors anxiously watched as stock prices fluctuated wildly, unsure of what the
                        future held. Some speculated that the deals would bring stability, while others feared the
                        potential for further economic turbulence.</p>
                    <a href="/"><i class="fa-solid fa-circle-arrow-right fa-3x"></i></a>
                </div>
            </div>
            <div class="news2 newsitem">
                <a href="/">
                    <h3>Economists Forecast Continued Growth for Emerging Markets in 2023</h3>
                </a>
                <span>March 11</span>
            </div>
            <div class="news3 newsitem">
                <a href="/">
                    <h3>Tech Stocks Surge as Companies Report Strong Q1 Earnings</h3>
                </a>
                <span>March 8</span>
            </div>
            <div class="news4 newsitem">
                <a href="/">
                    <h3>Experts Warn of Possible Inflation Spike as Prices Continue to Rise</h3>
                </a>
                <span>March 5</span>
            </div>
            <div class="news5 newsitem">
                <a href="/">
                    <h3>New Investment Opportunities Arise in Renewable Energy Sector</h3>
                </a>
                <span>March 3</span>
            </div>
            <div class="news6 newsitem">
                <a href="/">
                    <h3>US Considers New Sanctions Against Russian Officials for Election Interference</h3>
                </a>
                <span>Feb 28</span>
            </div>
            <div class="news7 newsitem">
                <img src="../app/adds/assets/news/matt-brown-ZrrBdq0VNio-unsplash.jpg" alt="">
                <div class="newsitem-content">
                    <h3>EU and UK Negotiate Post-Brexit Trade Agreement amid Tensions</h3>
                    <p>As tensions ran high between the European Union and the United Kingdom, negotiations over a
                        post-Brexit trade agreement were in full swing. Both sides were digging in their heels,
                        determined to secure the best possible deal for their respective nations.</p>
                    <a href="/"><i class="fa-solid fa-circle-arrow-right fa-3x"></i></a>
                </div>
            </div>
            <div class="news8 newsitem">
                <a href="/">
                    <h3>Federal Reserve Signals Possible Interest Rate Hike in Response to Economic Recovery</h3>
                </a>
                <span>Feb 27</span>
            </div>
            <div class="news9 newsitem">
                <a href="/">
                    <h3>Blockchain Technology Disrupts Traditional Financial Institutions, Raises Regulatory Questions
                    </h3>
                </a>
                <span>Feb 26</span>
            </div>
            <div class="more flex-container"><button>More news</button></div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="../app/adds/link/script.js"></script>
</body>

</html>