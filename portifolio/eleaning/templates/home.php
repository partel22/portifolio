<?php include("../libs/db_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parteltech</title>
    <link rel="stylesheet" href="../assets/css/style.css" />

    <!-- *Smooth Scroll Link -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
</head>

<body>
    <!-- Header Start -->

    <section id="header">
        <div class="container">
            <img src="../assets/img/partel.jpeg" alt="logo" class="logo" />
            <div class="login">
                  <a href="">Login</a>Or <a href="">Register</a>
            </div>
            <div class="header-text">
                <h1>The purpose is to<br />educate and  bring learning to the world.</h1>
                <!-- small square box -->
                <span class="square"></span>
                <p>
                  
Our purpose as PartelTech e-learning system aims to provide accessible, flexible, and high-quality educational resources. It empowers learners to acquire in-demand skills, advance their careers, and stay competitive in today's rapidly evolving digital landscape, regardless of their location or schedule.
                </p>
                <!-- common button -->
<!-- the code for read more starts from here -->
                
  <style>
    /* CSS styles */
    .additional-content {
      display: none; /* Hide additional content by default */
    }
    .login{
        text-align: center;
        color: black;


    }
    .login a{
        text-decoration: none;
        color: gold;
    }
    .login a:hover{
        color: blue;
    }

    .read-more-btn {
     padding: 18px 40px;
  background: transparent;
  outline: none;
  border: 2px solid #f67c92;
  font-weight: bold;
  cursor: pointer;

    }

    .read-more-btn:hover {
      background-color: #0056b3;
    }
  </style>

  <div class="content">
    <button class="read-more-btn" onclick="toggleReadMore()">Read More</button>
    <div class="additional-content" id="additionalContent">
      <p>As PartelTech organization we area to revolutionize skill learning and monetization globally through our innovative platform. By offering a diverse range of courses spanning technology, business, and creative fields, PartelTech provides learners with comprehensive skill development opportunities. Leveraging cutting-edge e-learning technologies, interactive modules, and expert instructors, learners can acquire in-demand skills at their own pace. Additionally, PartelTech facilitates monetization by enabling skilled individuals to showcase their expertise through courses, tutorials, and consultations, thereby creating income streams. Through its global reach and community-driven approach, PartelTech empowers individuals worldwide to unlock their potential and thrive in the digital economy.</p>
    </div>
  </div>

  <script>
    // JavaScript for toggling visibility of additional content
    function toggleReadMore() {
      var additionalContent = document.getElementById('additionalContent');
      var readMoreBtn = document.querySelector('.read-more-btn');

      if (additionalContent.style.display === 'none') {
        additionalContent.style.display = 'block';
        readMoreBtn.textContent = 'Read Less';
      } else {
        additionalContent.style.display = 'none';
        readMoreBtn.textContent = 'Read More';
      }
    }
  </script>
  <!-- read more content ends here -->



                <!-- <button class="common-btn">Read More</button> -->
                <!-- 2line & a box -->
                <div class="line">
                    <span class="line-1"></span><br />
                    <span class="line-2"></span><br />
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Side Navbar Start -->
    <nav id="sideNav">
        <ul>
            <!-- *added link according to id -->
            <li><a href="#header">HOME</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#features">FEATURES</a></li>
            <li><a href="#courses">COURSES</a></li>
            <li><a href="#offer">OFFER</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="templates/Comment/index.php">COMMENT</a></li>
            <li><a href="Registrations/index.php">LOGIN / REGISTRATIONS</a></li>
        </ul>
    </nav>
    <!-- Navbar menu image -->
    <img src="../assets/img/menu.png" alt="Menu" id="menuBtn" />
    <!-- Side Navbar End -->
    <!-- Header End -->

    <!-- ABOUT US Start -->
    <section id="about">
        <div class="about-left-col">
            <img src="../assets/img/about.png" alt="" />
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1>About Us</h1>
                <!-- small square box -->
                <span class="square"></span>
                <p>
                    
"Parteltech is a premier online learning platform offering top-rated courses and skill development opportunities. With a curated selection of the highest-ranked content, learners access cutting-edge knowledge in various fields. Our platform combines expert instruction, interactive resources, and user-friendly interfaces to empower individuals to excel. From technology to business, Parteltech equips learners with the tools and expertise needed to succeed in today's dynamic global landscape."
                </p>
                <br /><br />
                <!-- 2line & a box -->
                <div class="line">
                    <span class="line-1"></span><br />
                    <span class="line-2"></span><br />
                    <span class="line-3"></span>
                </div>

                <h2>
                    "Learning is not attained by chance, it must be sought for with ador
                    and attended to with diligence"
                </h2>
                <h3>---Henry Ondimu</h3>
            </div>
        </div>
    </section>
    <!-- ABOUT US End -->

    <!-- FEATURES Start -->
    <section id="features">
        <div class="feature-row">
            <div class="feature-col">
                <img src="../assets/img/pic-1.png" alt="" />
                <h4>Learn Anywhere</h4>
                <p>Switch between your computer, tablet or mobile device</p>
            </div>
            <div class="feature-col">
                <img src="../assets/img/pic-2.png" alt="" />
                <h4>Expert Developers</h4>
                <p>Learn from industry experts who are passionate about teaching.</p>
            </div>
            <div class="feature-col">
                <img src="../assets/img/pic-3.png" alt="" />
                <h4>Unlimited Access</h4>
                <p>
                    Choose what yo'd like to learn from our extensive subscription
                    library.
                </p>
            </div>
        </div>
        <!-- Button -->
        <div class="feature-btn">
            <!-- 2line & a box -->
            <div class="line">
                <span class="line-1"></span><br />
                <span class="line-2"></span><br />
                <span class="line-3"></span>
            </div>
            <!-- common button -->
            <button class="common-btn">Start Free Trial</button>
        </div>
    </section>
    <!-- FEATURES End -->

    <!-- COURSES Strat -->
    <section id="courses">
        <div class="container course-row">
            <div class="course-left-col">
                <div class="course-text">
                    <h1>Browse our top<br />courses</h1>
                    <!-- small square box -->
                    <span class="square"></span>
                    <p>
                        
In today's fast-paced world, acquiring new skills is essential for professional growth. PartelTech's online learning platform offers a convenient and flexible way to gain expertise in various fields. With accessible resources and up-to-date content, learners can stay ahead of the curve, adapt to changing industry trends, and enhance their employability, ultimately shaping successful and fulfilling career paths
                    </p>
                    <!-- common button -->
                    <button class="common-btn"><a href="">   View All Courses</a></button>
                    <!-- 2line & a box -->
                    <div class="line">
                        <span class="line-1"></span><br />
                        <span class="line-2"></span><br />
                        <span class="line-3"></span>
                    </div>
                </div>
            </div>
            <div class="course-right-col">
                <img src="../assets/img/course.png" alt="" />
            </div>
        </div>
    </section>
    <!-- COURSES End -->

    <!-- OFFER Start -->
    <!-- OFFER section almost same as ABOUT US section -->
    <section id="offer">
        <div class="about-left-col">
            <img src="../assets/img/offer.png" alt="" />
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1>Limitless learning,<br />limitless possibilities</h1>
                <!-- small square box -->
                <span class="square"></span>
                <p>
                    
"Revolutionizing education, our eLearning system pioneers accessible, interactive learning experiences. Tailored courses, cutting-edge technology, and global accessibility empower learners worldwide to thrive in an ever-evolving digital landscape."
                </p>
                <!-- common button -->
                <button class="common-btn">Start Free Trial</button>
                <!-- 2line & a box -->
                <div class="line">
                    <span class="line-1"></span><br />
                    <span class="line-2"></span><br />
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- OFFER End -->

    <!-- CONTACT Start -->
    <section id="contact">
        <div class="container contact-row">
            <div class="contact-left-col">
                <h1>Sign Up to join our<br />learning community</h1>
                <!-- TODO: Validate this form -->
                <form action="">
                    <input type="text" placeholder="Enter Name" />
                    <input type="email" placeholder="Enter Email" />
                    <input type="password" placeholder="Enter Password" />
                    <div class="btn-box">
                        <!-- 2 common button -->
                        <button class="common-btn">Sign Up</button>
                        <button class="common-btn">7-Day Trial</button>
                    </div>
                </form>
                <!-- 2line & a box -->
                <div class="line">
                    <span class="line-1"></span><br />
                    <span class="line-2"></span><br />
                    <span class="line-3"></span>
                </div>
            </div>
            <div class="contact-right-col">
                <img src="../assets/img/contact.png" alt="" />
            </div>
        </div>
    </section>
    <!-- CONTACT End -->

    <!-- Footer Start -->
    <section id="footer">
        <div class="container footer-row">
            <hr />
            <div class="footer-left-col">
                <div class="footer-links">
                    <div class="link-title">
                        <h4>Product</h4>
                        <small>Our Plan</small><br />
                        <small>Free Trial</small>
                    </div>
                    <div class="link-title">
                        <h4>About Us</h4>
                        <small>Request Demo</small><br />
                        <small>FAQs</small>
                    </div>
                    <div class="link-title">
                        <h4>Support</h4>
                        <small>Features</small><br />
                        <small>Contact Us</small>
                        <small>+254758762150</small>
                    </div>
                    <div class="link-title">
                        <h4>Explore</h4>
                        <small>Find a nonprofit</small><br />
                        <small>Corporate Solution</small>
                    </div>
                </div>
            </div>
            <div class="footer-right-col">
                <div class="footer-info">
                    <div class="copyright-text">
                        <strong>info@parteltech.co.ke</strong><br />
                        <small>copyright @2024 PartelTech</small>
                    </div>
                    <div class="footer-logo">
                        <img src="../assets/img/partel.jpeg" alt="" />
                        <!-- common button -->
                        <button class="common-btn">English</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Social-icons -->
    <div class="social-icons">
        <img src="../assets/img/facebook.png" alt="" />
        <img src="../assets/img/instagram.png" alt="" />
        <img src="../assets/img/twitter.png" alt="" />
        <img src="../assets/img/linkedin.png" alt="" />
    </div>

    <!-- JS Link -->
    <script src="../assets/js/main.js"></script>
</body>

</html>