<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>
    <link rel="stylesheet" href="<?php echo e(asset('data/css/general.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('data/css/contact.css')); ?>">
</head>

<body>
    <header id="head">
        <!-- this is the log container  -->
        <div class="logo-container">
            <img src="<?php echo e(asset('data/images/logo-removebg-preview.png')); ?>" alt="" class="logo">
        </div>
        <!-- this is the navbar for desktop view    -->
        <nav class="navbar">
            <ul class="navlist">
                <li class="tab">
                    <a href="<?php echo e(route("index")); ?>" class="link">about me</a>
                </li>
                <li class="tab">
                    <a href="<?php echo e(route("contact")); ?>" class="link">contact</a>
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
            </ul>
        </nav>
        <!-- this is the navbar for the mobile view  -->
        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="<?php echo e(asset('data/images/1193.png')); ?>" alt=""  id="close-sidebar" class="close-btn">
            </div>
         <ul class="list-items">
            <li><a href="<?php echo e(route("index")); ?>">home<img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"> </a ></li>
             <li><a href="<?php echo e(route("contact")); ?>">contact  <img src="{asset{('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="<?php echo e(route("blog")); ?>">blog  <img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"></a></li>
             <li><a href="<?php echo e(route("resume")); ?>">resume  <img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"></a></li>
             <li><a href="<?php echo e(route("project")); ?>">projects  <img src="<?php echo e(asset('data/images/arrow-24-xxl.png')); ?>" alt="" class="arrow"></a></li>
         </ul>
        </div>
        <!-- this is the hamburger menu  -->
        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
    </header>
    <!-- this is the resume landpage  -->
    <section class="resume-landpage">
        <!-- this contains the resume text  -->
        <div class="resume-text-container">
            <h1>resume</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eaque enim exercitationem ad quidem, nulla similique
                consectetur consequuntur beatae itaque. Sint veniam
                dignissimos ex ipsum,
                 beatae iure accusamus atque velit repellendus?
            </p>
        </div>

        <div class="resume-doc-container">
            <!-- resume pdf comes here  -->
        </div>

    </section>
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
<?php /**PATH C:\Users\user\Documents\Work\myportfolio\resources\views/resume.blade.php ENDPATH**/ ?>