<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my portfolio</title>
    <link rel="stylesheet" href="<?php echo e(asset('data/css/style.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('data/images/logo-removebg-preview.png')); ?>" type="image/x-icon">
</head>
<body>
    <!-- this is the header section that contains the logo and the navigation bars   -->
    <header id="head">
        <!-- this is the logo container -->
        <div class="logo-container">
            <img src="<?php echo e(asset('data/images/logo-removebg-preview.png')); ?>" alt="" class="logo">
        </div>

        <!-- this is the navigation bar  for the destop view -->
        <nav class="navbar">

            <ul class="navlist">
                <li class="tab">
                    <!-- these are the navbar links to different pages -->
                    <a href="<?php echo e(route("index")); ?>" class="link">about me</a>
                </li>
                <li class="tab">
                    <a href="#service" class="link">services</a>
                </li>
                <li class="tab">
                    <a href="<?php echo e(route("resume")); ?>" class="link">resume</a>
                </li>
                <li class="tab">
                    <a href="<?php echo e(route("project")); ?>" class="link">projects</a>
                </li>
                <li class="tab">
                    <a href="<?php echo e(route("blog")); ?>" class="link">blog</a>
                </li>
                <li class="tab">
                    <a href="<?php echo e(route("contact")); ?>" class="link">contact</a>
                </li>
            </ul>
        </nav>

        <!-- this is the navigation sidebar for the mobile view -->

        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="<?php echo e(asset('data/images/1193.png')); ?>" alt=""  id="close-sidebar" class="close-btn">
            </div>
         <ul class="list-items">
            <li><a href="<?php echo e(route("index")); ?>">home <img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"> </a ></li>
             <li><a href="<?php echo e(route("contact")); ?>">contact  <img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"></a></li>
             <li><a href="<?php echo e(route("blog")); ?>">blog  <img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"></a></li>
             <li><a href="<?php echo e(route("project")); ?>">projects <img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"></a></li>
             <li><a href="<?php echo e(route("resume")); ?>">resume  <img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"></a></li>
         </ul>
        </div>
        <!-- this is the code for the hamburger menu in the mobile view -->

        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
    </header>
<!-- end of the header section -->

<!-- this is the beginning of the landpage section  -->

    <section class="landpage">
        <!-- this contains the introductory text -->

        <div class="welcome-text-container">
            <h1 class="intro-header">
                i'm emmanuel nwamini <span class="a">a</span><span class="fullstack"> full stack</span>
                web developer
            </h1>
            <p class="intro-details">
                I AM NWAMINI EMMANUEL, A Freelancer ,Web-Developer, Software Engineer, Crypto-Trader and A Teacher of Programming.

            </p>
            <button class="cssbuttons-io-button"> hire me
                <div class="icon">
                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
                </div>
              </button>
        </div>

        <!-- this contains the lanpage image -->

        <div class="img-container">
            <img src="<?php echo e(asset('data/images/profile2.png')); ?>" alt="" >
        </div>
    </section>
    <!-- this is the end of the landpage section -->

    <!-- this is the beginning of the about me section  -->

    <section class="about-section">
        <!-- this is the profile picture container  -->
        <div class="profile-pix-container">
            <!-- this is the div round the picture with pink border-color  -->
            <div class="picture-wrapper">
                <img src="<?php echo e(asset('data/images/profile1.jpg')); ?>" alt="" class="profile-pix">
            </div>
        </div>
        <!-- this contains the about me text  -->
        <div class="about-us-text">
            <h1>about me</h1>
            <p>I AM NWAMINI EMMANUEL, A Freelancer ,Web-Developer, Software Engineer, Crypto-Trader and A Teacher. Am a final year student of Biology science at the Ebonyi state university....
                I have Over 10 month experience as a frontend web developer and 4month as a backed web developer...... Am Passionate about building Innovative code-based disruptive Web and Mobile solutions using (Primarily) JavaScript, JQuery, GitHub, HTML, CSS,Bootstrap PHP and Laravel...
                 Writing code has been the best thing that has happened to me....

                    </p>


                <!-- this is the download cv button  -->

            <button class="button" style="vertical-align:middle"><span>Download cv</span></button>
        </div>
    </section>

    <!-- this is the end of the about me section  -->


     <!-- this is the beginning of the service section  -->
    <section class="service-section" id="service">

        <!-- this div contains the service header text  -->
        <div class="service-header">
            <h1>my services</h1>
            <p>I and my team focus on Web development, App development both native apps and cross platform, Web design, Video-Scribing....
                We look forward rendering best services around the world...  </p>
        </div>

        <!-- this div contains the service cards -->
        <div class="service-card-container">
            <!-- this contains the first two top service cards  -->
            <div class="top-card">
                <!-- this is the first top service card  -->
                <div class="card card1">
                    <div class="card-body1">
                        <div class="card-img-container">
                            <img src="<?php echo e(asset('data/images/ux.png')); ?>" alt="" class="card-img">
                        </div>
                        <h2>web development</h2>
                        <p>Frontend and Backend Web development</p>
                    </div>
                </div>
                <!-- this is the second top service card  -->
                <div class="card card2">
                    <div class="card-body2">
                        <div class="card-img-container">
                            <img src="<?php echo e(asset('data/images/images__5_-removebg-preview.png')); ?>" alt="" class="card-img">
                        </div>
                        <h2>app development</h2>
                        <p>Native and cross platforms App.... </p>
                    </div>
                </div>
            </div>
            <!-- end of the top card container  -->

            <!-- beginning of the lower card container  -->
            <div class="lower-card">
                <!-- third card -->
                <div class="card card3">
                    <div class="card-body3">
                        <div class="card-img-container">
                        <img src="<?php echo e(asset('data/images/video-camera.png')); ?>" alt="" class="card-img">
                        </div>
                        <h2>video scribing</h2>
                        <p>We scribe animation videos for kids and schools to enable them learn faster.. </p>
                    </div>
                </div>
                <!-- 4th card  -->
                <div class="card card4">
                    <div class="card-body4">
                        <div class="card-img-container">
                            <img src="<?php echo e(asset('data/images/web-design.png')); ?>" alt="" class="card-img">
                        </div>
                        <h2>web design</h2>
                        <p>With our creactivity skills we design different types of websites, Logo, Banner, </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of lower card  -->
    </section>
    <!-- end of service container section  -->

    <!-- beginning of prizing section "dont mind the contact section i wrote" i'll correct it -->

    <section class="contact-section">
        <!-- top section the contains prizing btns -->
        <div class="top-btn">
            <h3>Check out our pricing packages....</h3>
            <button class="button" style="vertical-align:middle"><span>monthly</span></button>
        </div>

        <!-- prize crad containing section  -->
        <div class="price-card-container">
            <!-- prize card 1 -->
            <div class="prize-card prizecard1">
                <img src="<?php echo e(asset('data/images/gold-medal-1321-removebg-preview.png')); ?>" alt="" class="banner">
                <h1 class="prize">
                    <span class="small-text">bronze plan</span><br>
                    $150.00
                </h1>
                <ul class="prize-container">
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost of your site</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                </ul>
                <button class="pink-btn">
                    order
                </button>
            </div>
            <!-- prize card 2 -->
            <div class="prize-card prizecard2">
                <img src="<?php echo e(asset('data/images/silver-medal-1948-removebg-preview.png')); ?>" alt="" class="banner">
                <h1 class="prize">
                    <span class="small-text">silver plan</span><br>
                    $200.00
                </h1>
                <ul class="prize-container">
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost of your site</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('asset/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                </ul>
                <button class="pink-btn">
                    order
                </button>
            </div>
            <!-- prize card 3 -->
            <div class="prize-card prizecard3">
                <img src="<?php echo e(asset('data/images/gold.png')); ?>" alt="" class="banner">
                <h1 class="prize">
                    <span class="small-text">gold plan</span><br>
                    $300.00
                </h1>
                <ul class="prize-container">
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost of your site</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                    <li class="prize-list">
                        <img src="<?php echo e(asset('data/images/thick.png')); ?>" alt="" class="thicked"> <a href="#">webhost</a>
                    </li>
                </ul>
                <button class="pink-btn">
                    order
                </button>
            </div>
        </div>
    </section>
    <!-- end of prizing section  -->

    <!-- footer section -->
    <footer>
        <!-- first division -->
        <div class="foot1">
            <h2><span class="emmy">emmy</span>Tech</h2>
            <p>
                No.25 Udensi Street, Abakaliki, Ebonyi State Nigeria.
                    Send us an email, call us on +2347033244567
                  You can follow us on social media and get latest updates from us.
            </p>
            <div class="social-media-handle">
                <img src="<?php echo e(asset('data/images/facebook.png')); ?>" alt="" class="social-icon"> <a href="https://facebook.com/emmanuelnwamini">facebook</a>
                <img src="<?php echo e(asset('data/images/insta.png')); ?>" alt="" class="social-icon"> <a href="https://www.linkedin.com/in/emmanuel-godwin-a21081215?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BNxacVc4PTFuG5iak6zwyxQ%3D%3D">linkedln</a>
                <img src="<?php echo e(asset('data/images/whatsapp.png')); ?>" alt="" class="social-icon"> <a href=" https://wa.me/+2347042244539">whatsapp</a>
                <img src="<?php echo e(asset('data/images/git.png')); ?>" alt="" class="social-icon"> <a href="https://github.com/youngemmy5956">github</a>
                <img src="<?php echo e(asset('data/images/mail.png')); ?>" alt="" class="social-icon"> <a href="mailto:emmanuelgodwin558@gmail.com">email</a>
            </div>
        </div>
        <!-- second division  -->
        <div class="foot1">
            <h2>contact me</h2>
            <li ><img src="<?php echo e(asset('data/images/twitter.png')); ?>" alt=""class="my-img"> <a href="https://twitter.com/onyedicach">@onyedicach</a></li>
            <li ><img src="<?php echo e(asset('data/images/instagram.png')); ?>" alt=""class="my-img"> <a href="https://instagram.com/nwaminiemmy">@nwaminiemmy</a></li>
            <li ><img src="<?php echo e(asset('data/images/images__4_-removebg-preview.png')); ?>" alt=""class="my-img"> <a href="https://wa.me/+2347042244539">+2347042244539</a></li>
        </div>
        <!-- 3rd division  -->

        <div class="foot1">
            <p>
            <h2>newsletter</h2>
                Consequuntur neque excepturi debitis hic quasi labore amet
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, deserunt.
            </p>
            <input type="email" name="" id="" placeholder="enter your email" class="input">
            <button class="pink-btn">
                subscribe
            </button>
        </div>
    </footer>
    <script src="<?php echo e(asset('data/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\user\Documents\Work\myportfolio\resources\views/index.blade.php ENDPATH**/ ?>