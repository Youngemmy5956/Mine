<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
<link rel="stylesheet" href="{{asset('data/css/general.css')}}">
    <link rel="shortcut icon" href="{{asset('data/images/logo-removebg-preview.png')}}" type="image/x-icon">
</head>
<body>
    <header id="head">
        <div class="logo-container">
            <img src="{{asset('data/images/logo-removebg-preview.png')}}" alt="" class="logo">
        </div>
        <!-- this is the navbar for desktop view  -->
        <nav class="navbar">
            <ul class="navlist">
                <li class="tab">
                    <a href="{{route("index")}}" class="link">about me</a>
                </li>
                <li class="tab">
                    <a href="{{route("contact")}}" class="link">contact</a>
                </li>
                <li class="tab">
                    <a href="{{route("resume")}}" class="link">resume</a>
                </li>
                <li class="tab">
                    <a href="{{route("project")}}" class="link">projects</a>
                </li>
                <li class="tab">
                    <a href="{{route("blog")}}" class="link">blog</a>
                </li>
            </ul>
        </nav>
        <!-- this is the navbar for mobile view  -->
        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="{{asset('data/images/1193.png')}}" alt=""  id="close-sidebar" class="close-btn">
            </div>
         <ul class="list-items">
            <li><a href=".{{route("index")}}">home <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"> </a ></li>
             <li><a href="{{route("contact")}}">contact  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="{{route("blog")}}">blog  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="{{route("resume")}}">resume  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             <li><a href="{{route("project")}}">projects <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
         </ul>
        </div>
        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
    </header>
    <!-- this is the first section which contains the blog posts  -->
    <section class="blog-section">
        <!-- this is the blog header  -->
        <div class="blog-header">
            <h1>blog</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, adipisci. A
                tque culpa dolores sit doloremque esse aspernatur excepturi facere,
                quae quia recusandae delectus quisquam assumenda consequatur, soluta
                olorem quasi temporibus magnam
                repellendus vitae? Suscipit ullam culpa repellat aliquam rem!
            </p>
        </div>
        <!-- this div contains all the blog cards  -->
        <div class="blog-card-container">
            <!-- this is the first blog card  -->
            <div class="blog-card">
                <!-- this is the blog post image  -->
                <img src="{{asset('data/images/pexels-ehsan-ahmadnejad-983436.jpg')}}" alt="" class="blog-img">
                <!-- this part contains the blog details  -->
                <div class="blog-details">

                    <!-- the is the blog title  -->

                    <p class="blog-title">who are we?</p>

                    <!-- this is the time the post was made  -->

                    <p class="post-date">posted 3mins ago</p>

                </div>
                <div class="blog-body">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptate at, voluptatem ut dolores rem corporis!
                    </p>
                </div>
                <!-- this the readmore btn  -->
                <!-- this applies to every other card  -->
                <div class="readmore-container">
                    <a href="" class="readmore">readmore</a>
                </div>
            </div>
            <!-- 2nd  -->
            <div class="blog-card">
                <img src="{{asset('data/images/pexels-pixabay-315999.jpg')}}" alt="" class="blog-img">
                <div class="blog-details">
                    <p class="blog-title">who are we?</p>
                    <p class="post-date">posted 3mins ago</p>
                </div>
                <div class="blog-body">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptate at, voluptatem ut dolores rem corporis!
                    </p>
                </div>
                <div class="readmore-container">
                    <a href="" class="readmore">readmore</a>
                </div>
            </div>
            <!-- 3rd  -->
            <div class="blog-card">
                <img src="{{asset('data/images/pexels-eberhard-grossgasteiger-1624504.jpg')}}" alt="" class="blog-img">
                <div class="blog-details">
                    <p class="blog-title">who are we?</p>
                    <p class="post-date">posted 3mins ago</p>
                </div>
                <div class="blog-body">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptate at, voluptatem ut dolores rem corporis!
                    </p>
                </div>
                <div class="readmore-container">
                    <a href="" class="readmore">readmore</a>
                    <!-- <img src="../images/paper-plane.png" alt="" class="share-icon" alt=""> -->
                </div>
            </div>
            <!-- fourth  -->
            <div class="blog-card">
                <img src="{{asset('data/images/pexels-johannes-plenio-2080961.jpg')}}" alt="" class="blog-img">
                <div class="blog-details">
                    <p class="blog-title">who are we?</p>
                    <p class="post-date">posted 3mins ago</p>
                </div>
                <div class="blog-body">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptate at, voluptatem ut dolores rem corporis!
                    </p>
                </div>
                <div class="readmore-container">
                    <a href="" class="readmore">readmore</a>
                </div>
            </div>
        </div>
    </section>
    <!-- this is the top design section  -->
    <section class="top-design-section">
        <div class="top-design-header">
            <h1>top desing trend</h1>
        </div>
        <!-- this div contains all the design cards  -->
        <div class="design-card-container">
            <!-- card 1 -->
            <div class="design-card">
                <!-- this is the design img  -->
                <img src="{{asset('data/images/pexels-riciardus-228095.jpg')}}" alt="" class="design-img">

                <!-- this the left part containing the txt  -->
                <!-- it also applies to all other cards here and in the project page  -->
                <div class="design-text-container">
                    <h1>the beauty of nature</h1>
                    <div class="design-post-date">
                        <h2>coding</h2>
                        <div class="icon-container">
                            <img src="{{asset('data/images/share-icon-removebg-preview.png')}}" alt="" class="share-icon">
                            <img src="{{asset('data/images/calender2-removebg-preview.png')}}" alt="" class="icon">
                            <p>27th 02 2022</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus,
                        fugit perferendis facilis nesciunt enim nobis incidunt voluptatibus ullam!
                        Labore necessitatibus id
                         accusantium doloribus velit iusto. Excepturi numquam possimus dolorum
                         ? Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Natus, error nesciunt necessitatibus ullam consequuntur itaque!
                    </p>
                </div>
            </div>
            <div class="design-card">
                <img src="{{asset('data/images/pexels-ehsan-ahmadnejad-983436.jpg')}}" alt="" class="design-img">
                <div class="design-text-container">
                    <h1>the beauty of nature</h1>
                    <div class="design-post-date">
                        <h2>coding</h2>
                        <div class="icon-container">
                            <img src="{{asset('data/images/share-icon-removebg-preview.png')}}" alt="" class="share-icon" alt="" class="icon">
                            <img src="{{asset('data/images/calender2-removebg-preview.png')}}" alt="" class="icon">
                            <p>27th 02 2022</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus,
                        fugit perferendis facilis nesciunt enim nobis incidunt voluptatibus ullam!
                        Labore necessitatibus id
                         accusantium doloribus velit iusto. Excepturi numquam possimus dolorum
                         ? Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Natus, error nesciunt necessitatibus ullam consequuntur itaque!
                    </p>
                </div>
            </div>
            <div class="design-card">
                <img src="{{asset('data/images/pexels-mauricio-artieda-609554.jpg')}}" alt="" class="design-img">
                <div class="design-text-container">
                    <h1>the beauty of nature</h1>
                    <div class="design-post-date">
                        <h2>coding</h2>
                        <div class="icon-container">
                            <img src="{{asset('data/images/share-icon-removebg-preview.png')}}" alt="" class="share-icon" alt="" class="icon">
                            <img src="{{asset('data/images/calender2-removebg-preview.png')}}" alt="" class="icon">
                            <p>27th 02 2022</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus,
                        fugit perferendis facilis nesciunt enim nobis incidunt voluptatibus ullam!
                        Labore necessitatibus id
                         accusantium doloribus velit iusto. Excepturi numquam possimus dolorum
                         ? Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                         Natus, error nesciunt necessitatibus ullam consequuntur itaque!
                    </p>
                </div>
            </div>
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
                <img src="{{asset('data/images/facebook.png')}}" alt="" class="social-icon"> <a href="https://facebook.com/emmanuelnwamini">facebook</a>
                <img src="{{asset('data/images/insta.png')}}" alt="" class="social-icon"> <a href="https://www.linkedin.com/in/emmanuel-godwin-a21081215?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BNxacVc4PTFuG5iak6zwyxQ%3D%3D">linkedln</a>
                <img src="{{asset('data/images/whatsapp.png')}}" alt="" class="social-icon"> <a href=" https://wa.me/+2347042244539">whatsapp</a>
                <img src="{{asset('data/images/git.png')}}" alt="" class="social-icon"> <a href="https://github.com/youngemmy5956">github</a>
                <img src="{{asset('data/images/mail.png')}}" alt="" class="social-icon"> <a href="mailto:emmanuelgodwin558@gmail.com">email</a>
            </div>
        </div>
        <!-- second division  -->
        <div class="foot1">
            <h2>contact me</h2>
            <li ><img src="{{asset('data/images/twitter.png')}}" alt=""class="my-img"> <a href="https://twitter.com/onyedicach">@onyedicach</a></li>
            <li ><img src="{{asset('data/images/instagram.png')}}" alt=""class="my-img"> <a href="https://instagram.com/nwaminiemmy">@nwaminiemmy</a></li>
            <li ><img src="{{asset('data/images/images__4_-removebg-preview.png')}}" alt=""class="my-img"> <a href="https://wa.me/+2347042244539">+2347042244539</a></li>
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
    <script src="{{asset('data/js/main.js')}}"></script>
</body>
</html>
<!-- with this boss, i coe to the end of my part... i love working with you boss @emma. -->
