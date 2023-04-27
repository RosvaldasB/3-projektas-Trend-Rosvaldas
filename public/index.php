<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend | Business Club</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charis+SIL:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/adds/link/normalize.css">
    <link rel="stylesheet" href="../app/adds/link/style.css">
    <script src="https://kit.fontawesome.com/6337da2237.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
</head>

<body>

    <?php
        include ('../app/view/header.php');
        require __DIR__ . '/../app/adds/db/app.php';
    ?>
    <section class="introduction flex-container">
        <div class="introduction-first">
            <h1>we Trend —</h1>
            <h2>Business Club</h2>
        </div>
        <div class="introduction-second flex-container">
            <p>Trend is a dynamic business club that offers a range of financial services, including stocks,
                investments, financial consultation, loaning, and a cooperative business community hub. It provides a
                platform for members to network, share ideas, and access resources to grow their businesses.</p>
            <a id="learnMore" href="javascript:void(0)" onclick="scrollElement()"><img src="../app/adds/assets/btnsvg.svg"
                    alt="learn-more-btn"></a>
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
    <section class="aboutus flex-container" id="scrollloc">
        <div class="au-col1">
            <h1>About US</h1>
            <p>
                Since launching our Early Stage and Growth Funds in San Francisko, we've established Early Stage funds
                in Asia, Europe, and South America. We created these funds to lead rounds at every stage, in every
                geography.
            </p>
            <p>
                We are actively on the ground across continents, seeing local trends up close, searching for top
                foundersm and brindging them our world of resources. Once we commit to a team, we go to the ends of the
                earth - connecting entrepreneurs to each other, to customers, and to insights from distant markets - to
                help them become a global success.
            </p>
            <div class="numbers">
                <div class="numbersitem">
                    <div>+100</div>
                    <div>Institutions and businesses as our partners!</div>
                </div>
                <div class="numbersitem">
                    <div>66</div>
                    <div>Offices around the globe for you to visit!</div>
                </div>
                <div class="numbersitem">
                    <div>231</div>
                    <div>Large business owners in our team!</div>
                </div>
                <div class="numbersitem">
                    <div>10000</div>
                    <div>Clients assisted over A SINGLE YEAR!</div>
                </div>
            </div>
        </div>
        <div class="au-col2">
            <img src="../app/adds/assets/nrd-c3tNiAb098I-unsplash.jpg" alt="Corridor">
        </div>
    </section>
    <section class="benefits flex-container">
        <div class="container">
            <h1>For whom Business Club</h1>
            <div class="boxes">
                <div class="box">
                    <div class="box-heading flex-container">
                        <h2>Entrepreneurs and Business Owners</h2>
                        <span>-01</span>
                    </div>
                    <div class="box-content">
                        <ul>
                            <li>Networking opportunities with potential investors and partners.</li>
                            <li>Access to educational resources and mentorship programs to help grow their business.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box">
                    <div class="box-heading flex-container">
                        <h2 style='font-style: 14px'>Business Students</h2>
                        <span>-02</span>
                    </div>
                    <div class="box-content">
                        <ul>
                            <li>Exposure to real-world business scenarios and case studies.</li>
                            <li>Opportunities to meet and learn from successful entrepreneurs and business leaders.</li>
                        </ul>
                    </div>
                </div>
                <div class="box">
                    <div class="box-heading flex-container">
                        <h2>Corporate Employees</h2>
                        <span>-03</span>
                    </div>
                    <div class="box-content">
                        <ul>
                            <li>Networking opportunities with professionals from various industries.</li>
                            <li>Professional development workshops and seminars to enhance skills and advance career
                                goals.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="opinion flex-container">
        <div class="opinion-header flex-container">
            <h1>what they say<br>about business club</h1>
            <div class="controls">
                <button class="prevBtn"><i class="fa-solid fa-arrow-left fa-2x"></i></button>
                <button class="nextBtn"><i class="fa-solid fa-arrow-right fa-2x"></i></button>
            </div>
        </div>
        <div class="slider flex-container">
            <div>
                <img src="../app/adds/assets/nastuh-abootalebi-yWwob8kwOCk-unsplash.jpg" alt="office">
                <div class="show-text">
                    <h3>Comfy offices</h3>
                    <p>"Trend-Business Club's comfy offices provide a welcoming and productive environment for work and
                        collaboration."</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/gonz-ddl-UNmhernRpZc-unsplash.jpg" alt="glassbuilding">
                <div class="show-text">
                    <h3>heart of the city</h3>
                    <p>"Vibrant hub for networking and business events. Recommended."</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/maryna-yazbeck-pyzjoMvyCmw-unsplash.jpg" alt="frankfurteuro">
                <div class="show-text">
                    <h3>European standart</h3>
                    <p>"Business Club meets European standard. Exceptional service and quality, highly recommended for
                        professional networking."</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/rsz_oren-elbaz-wf1opky4iai-unsplash.jpg" alt="stockmarket">
                <div class="show-text">
                    <h3>First-class consultation</h3>
                    <p>"First-class consultation exceeded my expectations - thorough, insightful, and invaluable
                        advice."</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/rsz_1proxyclick-visitor-management-system-bufr5-ftmmw-unsplash.jpg"
                    alt="canteen">
                <div class="show-text">
                    <h3>Treats right next to you</h3>
                    <p>"Business club offers top-notch cafeteria food that never disappoints. Provides only the top
                        highest quality goods out there."</p>
                </div>
            </div>
        </div>
    </section>
    <section class="receive">
        <div class="receive-header">
            <h1>What do club members receive?</h1>
            <p>Member can find themselves receiving plenty benefits to suit their tastes and desires to grow personally
                and seeing their businesses flourishing.</p>
        </div>
        <div class="receive-content">
            <div class="receive-box">
                <i class="fa-solid fa-user-tie fa-3x"></i>
                <h3>Opportunities</h3>
                <p>Members can connect with like-minded professionals to grow their business or career.</p>
            </div>
            <div class="receive-box">
                <i class="fa-solid fa-user-tie fa-3x"></i>
                <h3>Events</h3>
                <p>Members receive invitations to private events featuring industry leaders and experts.</p>
            </div>
            <div class="receive-box">
                <i class="fa-solid fa-user-tie fa-3x"></i>
                <h3>Resources</h3>
                <p>Access to online resources such as market research reports, business articles, and industry insights.
                </p>
            </div>
            <div class="receive-box">
                <i class="fa-solid fa-user-tie fa-3x"></i>
                <h3>Development</h3>
                <p>Members can attend workshops, training sessions, and seminars to enhance their skills and knowledge.
                </p>
            </div>
            <div class="receive-box">
                <i class="fa-solid fa-user-tie fa-3x"></i>
                <h3>Discounts and Perks</h3>
                <p>Members enjoy discounts on services such as hotel bookings, car rentals, and office supplies.</p>
            </div>
            <div class="receive-box">
                <i class="fa-solid fa-user-tie fa-3x"></i>
                <h3>Community Support</h3>
                <p>Members can seek advice, mentorship, and support from fellow members who share their goals and
                    values.</p>
            </div>
        </div>
    </section>
    <section class="calendar flex-container">
        <div class="wrapper">
            <div class="calendar-header">
                <h1>The Calendar activities <?php echo date("Y") ?></h1>
            </div>
            <div id='calendar-container'>
                <div id="calendar"></div>
            </div>
        </div>
    </section>
    <section class="participate flex-container">
        <div class="participate-header">
            <h1>How to become<br> a participant of the club</h1>
        </div>
        <div class="participation flex-container">
            <div class="part">
                <i class="fa-solid fa-file-invoice fa-3x"></i>
                <h3>step 1</h3>
                <p class="part-text">Make sure you meet <a href="/">requirements of the Club</a></p>
            </div>
            <div class="part">
                <i class="fa-solid fa-laptop fa-3x"></i>
                <h3>step 2</h3>
                <p class="part-text"><a href="/">Leave the application</a> of a potencial candidate on the site</p>
            </div>
            <div class="part">
                <i class="fa-solid fa-phone-volume fa-3x"></i>
                <h3>step 3</h3>
                <p class="part-text">The manager makes an appointment with the Club administration</p>
            </div>
            <div class="part">
                <i class="fa-solid fa-handshake fa-3x"></i>
                <h3>step 4</h3>
                <p class="part-text">Business lunch and personal acquintance with the CEO and the Club Board</p>
            </div>
        </div>
    </section>
    <section class="people flex-container">
        <div class="people-header flex-container">
            <h1>Our team and<br> invited guests</h1>
            <div class="controls1">
                <button class="prevButton"><i class="fa-solid fa-arrow-left fa-2x"></i></button>
                <button class="nextButton"><i class="fa-solid fa-arrow-right fa-2x"></i></button>
            </div>
        </div>
        <div class="slider-people flex-container">
            <div>
                <img src="../app/adds/assets/founders-partners/craig mckay.jpg" alt="Craig McKay">
                <div class="people-show-text">
                    <h3>Craig McKay</h3>
                    <p>Founder &#9679; Investor</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/founders-partners/erik lucatero.jpg" alt="Erik Lucatero">
                <div class="people-show-text">
                    <h3>Erik Lucatero</h3>
                    <p>Investor &#9679; Lecturer</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/founders-partners/houcine nocib.jpg" alt="Houcine Nocib">
                <div class="people-show-text">
                    <h3>Houcine Nocib</h3>
                    <p>Professional investing advisor</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/founders-partners/joseph gonzalez.jpg" alt="Joseph Gonzalez">
                <div class="people-show-text">
                    <h3>Joseph Gonzalez</h3>
                    <p>Economics professor &#9679; business advisor</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/founders-partners/juric koletic.jpg" alt="Juric Koletic">
                <div class="people-show-text">
                    <h3>Juric Koletic</h3>
                    <p>First class janitor</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/founders-partners/michaela dam.jpg" alt="Michaela Damm">
                <div class="people-show-text">
                    <h3>Michaela Damm</h3>
                    <p>Founder &#9679; head of analytics team</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/founders-partners/omida armin.jpg" alt="Omida Armin">
                <div class="people-show-text">
                    <h3>Omida Armin</h3>
                    <p>Founder &#9679; cafeteria manager</p>
                </div>
            </div>
            <div>
                <img src="../app/adds/assets/founders-partners/pier muhamad putera.jpg" alt="Pier Muhamad Putera">
                <div class="people-show-text">
                    <h3>Pier Muhamad Putera</h3>
                    <p>Business partner &#9679; public relations advisor</p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact flex-container">
        <div class="contact-col1">
            <div class="contact-col1-header">
                <h1>Join us</h1>
            </div>
            <div class="contact-col1">
                <form action="index.php" method="post">
                    <input type="text" name="name" placeholder="NAME" required><br>
                    <input type="email" name="email" placeholder="EMAIL" required><br>
                    <input type="tel" name="phone" placeholder="PHONE" required><br>
                    <button name="submit">SEND</button>
                </form>
            </div>
        </div>
        <div class="contact-col2 flex-container">
            <img src="../app/adds/assets/mikhail-derecha-q-XTB-YTsho-unsplash.jpg" alt="stockmarketcorridor">
            <img src="../app/adds/assets/adam-smigielski-K5mPtONmpHM-unsplash.jpg" alt="stockmarketblue">
        </div>
    </section>
    <section class="get-in-touch">
        <div class="get-in-touch-header">
            <h1>Get in touch</h1>
        </div>
        <div class="get-in-touch-content">
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
    <script src="../app/adds/link/slide1.js" defer></script>
    <script src="../app/adds/link/slide2.js" defer></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
    <script src="../app/adds/link/calendar.js"></script>

</body>

</html>