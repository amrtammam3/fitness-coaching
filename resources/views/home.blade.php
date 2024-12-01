<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('css/plans-pricing.css') }}">


    <link rel="stylesheet" href="payment.html">
    <!-- <link rel="stylesheet" href="payment.css"> -->


    <link rel="stylesheet" href="sccs/fa-solid">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>




    <title>Document</title>
</head>
<body>
    <header>
        <a href="#" class="logo">A M R<span> Fitness</span></a>
        <div class='bx bx-menu' id="menu-icon"></div>
        <ul class="navbar" id="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#pricing">plan & pricing guide</a></li>
            <li><a href="#review">review</a></li>
            <li><a href="{{ route('payment') }}">payment</a></li>

        </ul>

        <div class="top-btn">
            <a href="#" class="nav-btn">join us</a>
        </div>
    </header>

    <!-- home section code -->

    <section class="home" id="home">
        <div class="home-content" data-aos="zoom-in">
            <h3>build your</h3>
            <h1>dream shape</h1>
            <h3><span class="multiple-text">bodybuilding</span></h3>
            <p>"Every workout is a step toward the best version of yourself.
                In this journey, consistency is your greatest ally.
                Let’s unlock your potential together!"</p>
            <a href="#" class="btn">join us</a>
        </div>
        <div class="home-img">
            <img src="img/main.jpg">
        </div>
    </section>

    <!-- service section code -->

    <section class="services" id="services">
        <h2 class="heading"  data-aos="zoom-in-down">our <span> services</span></h2>
        <div class="services-content" data-aos="zoom-in-up">
            <div class="row">
                <img src="img/image1 p f .png">
                <h4>physical fitness</h4>
            </div>
            <div class="row">
                <img src="img/weighy fit.png">
                <h4>wegiht lifting</h4>
            </div>
            <div class="row">
                <img src="img/cardio.png">
                <h4>cardio</h4>
            </div>
            <div class="row">
                <img src="img/fat lose.png">
                <h4>lose fat</h4>
            </div>
            <div class="row">
                <img src="img/wigh gain.png">
                <h4>workout plan</h4>
            </div>
            <div class="row">
                <img src="img/s tra.png">
                <h4>nutiration plan</h4>
            </div>
        </div>
    </section>

    <!-- about section code -->

    <section class="about" id="about">
        <div class="about-img" data-aos="zoom-in-down">
            <img src="img/wigh gain.png">
        </div>

        <div class="about-content" data-aos="zoom-in-up">
            <h2 class="headingg">why choose us ?</h2>
            <!-- <p> our diverse membership base create healhy life style</p> -->
            <p>We’re not just another online training platform – we’re your dedicated partners in growth. Our approach blends cutting-edge techniques with personalized attention, ensuring every session is tailored to your unique goals and pace. Whether you're just starting out or refining your skills, we provide a supportive, interactive environment that goes beyond traditional learning. With expert guidance, flexible schedules, and an engaging community, we don’t just train bodies or minds – we transform lives. When you choose us, you’re choosing a journey to the best version of yourself.</p>
            <a href="#" class="btn">book a free class</a>
        </div>
    </section>


<!-- pricing section code -->

<section class="pricing" id="pricing">
    <h2 class="heading" data-aos="zoom-in-down">Our <span> plans</span></h2>
    <div class="plans-content"data-aos="zoom-in-up">
        <div class="box">
            <h3>Basic</h3>
            <h2><span>$100/month</span></h2>
            <ul>
                <li>Customized workout plan</li>
                <li>Customized Advanced plan</li>
                <li>Customized cardio routine</li>

            </ul>
            <a href="{{ url('/payment') }}">join now</a>
        </div>

        <div class="box">
            <h3>Pro</h3>
            <h2><span>$150/month</span></h2>
            <ul>
                <li>Customized workout plan</li>
                <li>Customized Advanced plan</li>
                <li>Customized cardio routine</li>
                <li>Weekly follow up via the coach (no team)</li>
            </ul>
            <a href="{{ url('/payment') }}">join now</a>

        </div>

        <div class="box">
            <h3>premium</h3>
            <h2><span>$300/month</span></h2>
            <ul>
                <li>Customized workout plan</li>
                <li>Customized Advanced plan</li>
                <li>Customized cardio routine</li>
                <li>Video Call to assist the clients performance</li>
                <li>Higher rate for response on Whatsapp</li>

            </ul>
            <a href="{{ url('/payment') }}">join now</a>

        </div>
    </div>
</section>
<section id="plans-pricing" class="plans-pricing">
    <div class="container">
        <div class="header">
            <h2>Plans & Pricing Guide</h2>
            <p>Start your fitness journey with a customized plan that fits your needs.</p>
        </div>
        <div class="steps">
            <div class="step">
                <h3>Personalized Guidance</h3>
                <p>After subscribing to one of our plans,Customer Service will contact you to activate the subscription<br> you register and login becouse sumbit form<br> and respond to all your questions and inquiries throughout your transformation journey with islam and send your information to Coach islam  to design a detailed program for you based on
                    Your body details<br>
                    Your purpose in the program<br>
                    your lifestyle<br>
                    your preferred food<br>
                    Any injuries<br>
                    And any other details
                    .<br>
                then send to plan and you can use spicial coustomized dashboard  to use and eaisly and response any changied plan </p>
            </div>


        </div>
        <div class="why-choose">
            <h3>Why Choose Us?</h3>
            <ul>
                <li><strong>Affordable Plans:</strong> Flexible pricing options for all budgets.</li>
                <li><strong>Expert Coaches:</strong> Certified professionals dedicated to your success.</li>
                <li><strong>24/7 Support:</strong> We're here whenever you need us!</li>
            </ul>
        </div>
        <p class="cta">Let’s get started and achieve your goals together! 💪</p>
    </div>
</section>




<!-- review section code -->
<section class="review" id="review">
    <div class="review-box">
        <h2 class="heading" data-aos="zoom-in-down">Clint <span> Review</span></h2>
        <div class="wrapper" data-aos="zoom-in-up">
            <div class="review-item">
                <img src="img/person03.png">
                <h2>darlin</h2>
                <div class="rating">
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>

                </div>
                <p>Training with islam has been life-changing. Not only did I achieve my fitness goals, but I also gained confidence and a new outlook on health. Every session is challenging yet fun, and islam always knows how to push me just the right amount. Their personalized approach made me feel like I was truly cared for, and I’ve never felt stronger or more motivated. If you’re serious about transforming your body and mindset, islam is the one to trust!" </p>
            </div>
            <div class="review-item">
                <img src="img/ppp.jpg">
                <h2>jasmine</h2>
                <div class="rating">
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                    <i class='bx bx-star'id="star"></i>
                </div>
                <p>"Since I started training with islam, my life has completely changed. I used to struggle with staying consistent and following a healthy lifestyle, but islam made everything feel easier and more enjoyable. Their positive and motivating approach had me looking forward to every session, and with each workout, I felt closer to my goals. Now, I’m fitter, more confident, and I wouldn't have reached this level without their guidance and expertise. If you're looking for guaranteed results, [Trainer's Name] is the perfect choice."</p>
            </div>
            <div class="review-item">
                <img src="img/person02.png">
                <h2>marly</h2>
                <div class="rating">
                    <i class='bx bx-star' id="star"></i>
                    <i class='bx bx-star' id="star"></i>
                    <i class='bx bx-star' id="star"></i>
                    <i class='bx bx-star' id="star"></i>
                    <i class='bx bx-star' id="star"></i>
                </div>
                <p>"Working with islam has been an incredible experience. Their personalized approach and constant motivation helped me achieve results I never thought possible. I feel stronger, more confident, and healthier than ever!"</p>
            </div>
        </div>
    </div>
</section>

<!-- foter section code -->

<footer class="footer">
    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-linkedin-square'></i></a>
    </div>
    <p class="cobyright">
        &copy; Amr fitnees 2024 - all right reserved
    </p>
</footer>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
         AOS.init({
            offset: 300,
            duration: 1400
         });
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>
</html>
