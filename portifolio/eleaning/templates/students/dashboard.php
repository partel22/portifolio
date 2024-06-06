<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parteltech</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="styles/style.css"/>
    <script src="https://kit.fontawesome.com/c7c0e3b23f.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!--Navbar Section-->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo"><img src="../../assets/img/partel.jpeg" alt="Parteltech" class="logo" /></a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="/index.php" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__item">
            <a href="#services" class="navbar__links" id="services-page"
              >Classes</a
            >
          </li>
          <li class="navbar__btn">
            <a href="#join-class" class="button" id="join-class">Join Class</a>
          </li>
          <li class="navbar__item">
            <a href="../Registrations/logout.php" class="navbar__links" id="services-page"
              >Logout</a
            >
          </li>
        </ul>
      </div>
    </nav>

    <div class="services" id="services">
      <h1>Classes</h1>
      <div class="services__wrapper">
        <div class="services__card">
          <h2>CODING AND PROGRAMMING</h2>
          <p>INTERNET AND WEB TECHNOLOGY</p>
          <a href="coding.html"><div class="services__btn"><button>Get Started</button></div></a>
        </div>
        <div class="services__card">
          <h2>DIGITAL MARKETING</h2>
          <p>MARKETING ONLINE</p>
          <a href="marketing.html"><div class="services__btn"><button>Get Started</button></div></a>
        </div>
        <div class="services__card">
          <h2>ENGINEERING</h2>
          <p>SOFTWARE ENGINEERING</p>
          <a href=""><div class="services__btn"><button>Get Started</button></div></a>
        </div>
        <div class="services__card">
          <h2>DESIGN</h2>
          <p>GRAPHIC DESIGN</p>
          <a href="graphics.html"><div class="services__btn"><button>Get Started</button></div></a>
        </div>
        <div class="services__card">
          <h2>FREELANCING</h2>
          <p>HOW TO MAKE MONEY</p>
          <a href="trading.html"><div class="services__btn"><button>Get Started</button></div></a>
        </div>
      </div>
    </div>   

    <!-- 1:46:18 Adding Javascript Smooth Scroll -->

    <!-- JS links -->
    <script src="js/app.js"></script>
  </body>
</html>

