<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STAR-VIEW_HOTEL</title>
     <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

  
  <?php
session_start();  // Ensure session is started

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $username = $_SESSION["username"];

} else {
    // Redirect to login page if not logged in
    header("location: login.php");
    exit;
}
?>

<style>
    /* Include the Montserrat font */
    
 

   .scrolled {
    position: sticky;
    
            padding: 0;
            width: 60px;
            height: 60px;
            background: rgba(227, 153, 235, 1);
            border-radius: 50%;
            justify-content: center;
            align-items: center;
        }



/* Navbar styles */
.navbar {
  
      position: sticky;
            top: 0; /* Position it at the top */
            left: 0; /* Align it to the left edge */
            width: 100%; /* Ensure it spans the entire width of the screen */
            z-index: 1000; //* Aligns it to the left edge */
padding: 10px;
    background: linear-gradient(to bottom, rgba(0, 0, 0.8, 0.8), transparent);
    color: wheat; /* Light gray color for text */
    backdrop-filter: blur(0px);
    box-shadow: 0px 0px 30px rgba(227, 228, 237, 0.37);
    font-size: 1.1em;
    border: 0.1px solid rgba(33, 58, 45, 100);/* Smooth transition for parallax effect */
}
.navbar.scrolled {
  padding: 5px 20px;
         position: static fixed;
            border-radius: 10px; /* Changed to rounded rectangle */
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            background: rgba(33, 58, 45, 100); 
        }

        .navbar.scrolled .navbar-brand,
        .navbar.scrolled .navbar-links {
     
        }



    .navbar-brand {
      
    font-family: 'Serif', cursive; /* Keep the cursive font */
    font-size: 1.1em;/* Increase the font size for the brand */
    font-weight: bold;
    color: red; /* Change the text color to red */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Lighter text shadow */

    /* Optional: Adjust padding or margin if needed */
    padding: 3px 0; /* Example padding adjustment */
}
    
   



.navbar-brand img {
    max-height: 100px;
    transition: transform 0.3s ease;
}

.navbar-brand img:hover {
    transform: scale(1.1);
}

/* Navbar Links Styling */
.navbar-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    margin-left: 8px;
}

.navbar-links li {
    margin-right: 30px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links li a {
        font-family:"Times New Roman", Times, serif; /* Cursive font for navbar links */
        color: inherit;
        text-decoration: none;
        font-size: 1.1em;
        font-weight: bold;
        padding: 10px 15px;
        position: relative;
        transition: all 0.3s ease;
    }

/* Hover and Active States Styling */
.navbar-links li a:hover,
.navbar-links li a:focus,
.nav-item.login a.nav-link:hover,
.nav-item.login a.nav-link:focus {
    color: saddlebrown; /* Light gray color on hover */
    background-color: rgba(230, 230, 230, 0.2); /* Semi-transparent light gray background on hover */
}

/* Stylish Underline Effect on Hover */
.navbar-links li a:hover::after,
.navbar-links li a:focus::after,
.nav-item.login a.nav-link:hover::after,
.nav-item.login a.nav-link:focus::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background-color: #e6e6e6; /* Light gray color for underline */
    border-radius: 2px;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

/* Keyframes for Underline Slide Effect */
.navbar-links li a:hover::after,
.nav-item.login a.nav-link:hover::after {
    transform: scaleX(1);
}

/* Adjustments for Dropdown Toggle */
.nav-item.dropdown a.dropdown-toggle {
    color: inherit;
    font-weight: bold;
    font-family: "Times New Roman", Times, serif;;
    
}

.nav-item.dropdown a.dropdown-toggle:hover,
.nav-item.dropdown a.dropdown-toggle:focus {
    color: saddlebrown;
   
    font-family: "Times New Roman", Times, serif;
}

/* Customizing Dropdown Menu */
.dropdown-menu {
    background-color: slategray; /* Dark slate gray background for dropdown menu */
    
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Lighter shadow */
    padding: 10px 0;
}

.dropdown-item {
    color: #ffffff; /* White color for dropdown items */
    font-weight: bold;
    font-size: 0.9em;
    
    padding: 8px 20px;
     font-family: "Times New Roman", Times, serif;
    transition: all 0.3s ease;
}

.dropdown-item:hover,
.dropdown-item:focus {
    background-color: rgba(230, 230, 230, 0.2); /* Semi-transparent light gray background on hover */
    color: #ffffff;
}

.dropdown-divider {
    border-top: 1px solid #e6e6e6; /* Light gray color for divider */
}
.expand {
            width: 100% !important;
            height: auto !important;
            border-radius: 0 !important;
            padding: 20px !important;
            background: rebeccapurple !important;
        }

        .expand .navbar-brand,
        .expand .navbar-links {
            display: flex !important;
        }

        .expand .navbar-links {
            display: flex;
            flex-direction: column;
        }

        .expand .navbar-links li {
            margin-right: 0;
            margin-bottom: 10px;
        }

:root {
  --motion-ease: cubic-bezier(0.68, -0.6, 0.32, 1.6);
  --motion-duration: 0.3s;
}

* {
  box-sizing: border-box;
}
.but {
  appearance: none;
  background: transparent;
  border: 0;
  color: #fff;
  cursor: pointer;
  font: inherit;
  font-weight: 500;
  line-height: 1;
  padding: 1em 1.5em;
  position: relative;
  margin-right: 30px;
  transition: filter var(--motion-duration);
}

.but:hover {
  filter: brightness(1.1);
}

.but:active {
  filter: brightness(0.9);
}

.but > span {
  display: block;
  position: relative;
  transition: transform var(--motion-duration) var(--motion-ease);
  z-index: 1;
}

.but:hover > span {
  transform: scale(1.05);
}

.but:active > span {
  transform: scale(0.95);
}

.but > svg {
  fill: #950cde;
  position: absolute;
  top: -5%;
  left: -5%;
  width: 110%;
  height: 110%;
}

.but > svg > path {
  transition: var(--motion-duration) var(--motion-ease);
}

.but:hover > svg > path {
  d: path("M0,0 C0,-5 100,-5 100,0 C105,0 105,100 100,100 C100,105 0,105 0,100 C-5,100 -5,0 0,0");
}

.but:active > svg > path {
  d: path("M0,0 C30,10 70,10 100,0 C95,30 95,70 100,100 C70,90 30,90 0,100 C5,70 5,30 0,0");
}

body {
  padding-top: 60px /* background-image: url('201604151513476616-32a7f51a9ac511eba7cc0242ac110004.avif'); */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Ensures the background stays in place while scrolling */
        }
 
.timing-display {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: transparent;
   
    
    z-index: 1;
    border-radius: 5px;
}

.timing-display h3 {
    font-size: 18px;
    color: #8b0000;
    margin-bottom: 10px;
}

.timing-display p {
    margin-bottom: 5px;
    font-size: 14px;
}
.welcome-section {
    background-size: cover;
    
    font-family: 'Arial', sans-serif;
    padding-top: 0; /* Remove the top padding */
}

        .container1 {
    display: flex;
    justify-content: center;  /* Centers children horizontally */
    align-items: center;      /* Centers children vertically */
    height: 90vh;            /* Full viewport height to enable vertical centering */
    flex-direction: column;   /* Stacks children vertically */
}
     }

        .carousel {
            position: relative;
            background: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 0px;
        }

        .carousel-content {
            text-align: center;
            padding: 20px;
        }
        
        .carousel-content h2 {
            font-size: 24px;
            color: goldenrod;
            margin-bottom: 0px;
        }
        .carousel-content h1 {
    color: white; /* Replace with your preferred color */
}
.carousel-content {
  color: white;
}

        .carousel-content p {
            font-size: 40px;
            color: white;
        }
        .carousel-content h2 {
            font-size: 66px;
            color: white;
            margin-bottom: 30px;
        }
        .carousel-content h1 {
            font-size: 24px;
            color: gold;
        }
        .carousel-indicators li {
            background-color: #555;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .carousel-indicators .active {
            background-color: #007bff;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 45px;
            height: 45px;
            background-color: none;
            border-radius: 100%;
            border: none;
            opacity: 0.5;
            margin-top: 75px;
            align-items: center;
            justify-content: center;
        }
        .button-container {
           display: flex;
           justify-content: center;
           width:  20%;
            margin-top: 30px;
            padding: 10px 30px;
            background-color: rebeccapurple;
            color: white;
            align-items: center;
            text-decoration: gold;
            border-radius: 20px;
            transition: background-color 1.1s ease; /* Move the margin from the button to the container for better control */
         }

        .button-container:hover {
            background-color: sienna;
            color: rebeccapurple;
            border-radius: 60px
            

        }
        .latest-food {
            background-color:  rgba(33, 58, 45, 100);
            padding: 10px 0;
            box-shadow: 0 2px 60px rgba(0, 0, 0, 0.8);
            border-bottom: 1px solid lightpink;
        }

        .latest-food h2 {
            color: white;
            text-align: center;
            margin-bottom: 50px;
        }
        .latest-food h1 {
            color: white;
            text-align: center;
            margin-bottom: 10px;
        }
        #food-carousel .carousel-inner .carousel-item img {
            border-radius: 60px; /* Adjust the border radius for round corners */
            transition: transform 3.9s ease;
        }

        #food-carousel .carousel-inner .carousel-item img:hover {
            transform: scale(1.1); /* Increase scale on hover for a reactive effect */
        }

        #food-carousel .carousel-control-prev,
        #food-carousel .carousel-control-next {
            background: none;
            border: none;
            width: 5%;
            padding: 200px;
            color: transparent;
        }

        #food-carousel .carousel-control-prev-icon,
        #food-carousel .carousel-control-next-icon {
            background-color: transparent;
            background-size: contain;
            position: absolute;
            opacity: 1;
            transition: opacity 0.9;
        }

        #food-carousel .carousel-control-prev-icon {
            background-image: url('previous-icon.png');
        }

        #food-carousel .carousel-control-next-icon {
            background-image: url('next-icon.png');
        }

        #food-carousel .carousel-control-prev:hover .carousel-control-prev-icon,
        #food-carousel .carousel-control-next:hover .carousel-control-next-icon {
            opacity: 0.7;
        }

    </style>
</head>
<body>

<script>
window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            let scrollPosition = window.pageYOffset;

            if (scrollPosition > 80) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        document.querySelector('.navbar').addEventListener('click', function() {
            this.classList.toggle('expand');
        });
    </script>

<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container back-m fixed pad-b-m-14 nopadlr affix-top">
   
        <a class="navbar-brand" href="#"><img src="L4.png" alt="Logo" ></a>
      
      
      
  <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('bg-video');
            video.playbackRate = 2.0; // Adjust the playback speed here (2.0 means 2x speed)
        });
    </script>
 
 
 
 
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-links">
      
                <li class="nav-item"><a class="nav-link" href="rooms.html"></a></li>
                <li class="nav-item"><a class="nav-link" href="#welcome-section">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="rooms.html">ROOMS</a></li>
                <li class="nav-item"><a class="nav-link" href="service.php">SERVICE</a></li>
                <li class="nav-item"><a class="nav-link" href="darjeeling.php">PLACES TO VISIT</a></li>
                <li class="nav-item"><a class="nav-link" href="#offer">OFFERS</a></li>
                <li class="nav-item"><a class="nav-link" href="#transportation">CAB BOOKING</a></li>
            </ul>
            <ul class="navbar-nav">
              
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        More
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="booking.php"></a>
        <a class="dropdown-item" href="index.php">Log Out</a>
        <a class="dropdown-item" href="adminlogin.html">ADMIN</a>
    </div>
</li> <!-- Add this closing tag -->

                <li class="nav-item"><a class="nav-link" href="login.php"> </a></li>
                
            </ul>
        </div>
   </div>
   <form id="userForm" action="use.php" method="post">
    <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">
    <div class="but" onclick="document.getElementById('userForm').submit();">
        <span><?php echo htmlspecialchars($username); ?></span>
        <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,0 C0,-5 100,-5 100,0 C105,0 105,100 100,100 C100,105 0,105 0,100 C-5,100 -5,0 0,0"/>
        </svg>
    </div>
</form>



<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  
</nav>
<script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            let scrollPosition = window.pageYOffset;
            navbar.style.transform = 'translateY(' + scrollPosition * 1 + 'px)';
        });
    </script>  
</div>










  <!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> 
     
   
<video autoplay muted loop id="bg-video" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -1;">
    <source src="InShot_20240520_224036248.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
    
</head>

      

<section id="welcome-section" class="welcome-section">
    <div class="container1">
    
  </video>
        <h1 class="carousel-content1"></h1>
        <div id="welcome-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <li data-target="#welcome-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#welcome-carousel" data-slide-to="1"></li>
                <li data-target="#welcome-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-content">
                    <h2>Welcome to Our Hotel</h2>
                        <p>Experience luxury and comfort like never before</p>
                        <p>Book now and get 20% off on your stay. Limited time offer!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-content">
                    <h2>Welcome to Our Hotel</h2>
                        <p>Unlock exclusive discounts by booking directly through our website</p>
                        <p>Don't miss out on our special deals. Book now and save!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-content">
                    <h2>Welcome to Our Hotel</h2>
                        <p>Sign up for our newsletter to receive updates on promotions and offers</p>
                        <p>Subscribe now and be the first to know about our latest discounts!</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#welcome-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#welcome-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="timing-display">
           <!-- <p> <a href="https://wa.me/7595921010"><img src="whatsapp.png" alt="WhatsApp Logo" width="70" height="70" /></a></p>
      -->
            <p></p>
        </div>
        </div>
        <a href="booking.php" class="button-container">Check For Rooms</a>
    </div>
</section>

<!-- jQuery and Bootstrap JS -->




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->


    <style>
        /* Latest Food section styles */
      .wordCarousel {
  font-family: "Roboto Condensed", cursive;
  margin-bottom: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    font-weight: 100;
    color: #979797;
    div {
        overflow: hidden;
        position: relative;
        float: right;
        height: 65px;
        padding-top: 10px;
        margin-top: -10px;
        li {
            font-family: Serif;
            color: #eee;
            font-weight: 700;
            padding: 0 10px;
            height: 45px;
            margin-bottom: 45px;
            display: block;
        }
    }
}


.flip2 { animation: flip2 1s cubic-bezier(0.23, 1, 0.32, 1.2) infinite; }
        .flip3 { animation: flip3 5s cubic-bezier(0.23, 1, 0.32, 1.2) infinite; }
        .flip4 { animation: flip4 9s cubic-bezier(0.23, 1, 0.32, 1.2) infinite; }
        .flip5 { animation: flip5 11s cubic-bezier(0.23, 1, 0.32, 1.2) infinite; }

@keyframes flip2 {
    0% { margin-top: -180px; }
    5% { margin-top: -90px;  }
    50% { margin-top: -90px; }
    55% { margin-top: 0px; }
    99.99% { margin-top: 0px; }
    100% { margin-top: -180px; }
}

@keyframes flip3 {
    0% { margin-top: -270px; }
    5% { margin-top: -180px; }
    33% { margin-top: -180px; }
    38% { margin-top: -90px; }
    66% { margin-top: -90px; }
    71% { margin-top: 0px; }
    99.99% { margin-top: 0px; }
    100% { margin-top: -270px; }
}

@keyframes flip4 {
    0% { margin-top: -360px; }
    5% { margin-top: -270px; }
    25% { margin-top: -270px; }
    30% { margin-top: -180px; }
    50% { margin-top: -180px; }
    55% { margin-top: -90px; }
    75% { margin-top: -90px; }
    80% { margin-top: 0px; }
    99.99% { margin-top: 0px; }
    100% { margin-top: -360px; }
}

@keyframes flip5 {
    0% { margin-top: -450px; }
    5% { margin-top: -360px; }
    20% { margin-top: -360px; }
    25% { margin-top: -270px; }
    40% { margin-top: -270px; }
    45% { margin-top: -180px; }
    60% { margin-top: -180px; }
    65% { margin-top: -90px; }
    80% { margin-top: -90px; }
    85% { margin-top: 0px; }
    99.99% { margin-top: 0px; }
    100% { margin-top: -450px; }
}

// Layout //////////////////////////////////////////

@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Oswald);

}
    </style>
</head>
<br>

<section id="latest-food" class="latest-food">
    <div class="container">
        <div class="row">
         
        <h4 class="wordCarousel">
    <span>Capture the Enchantment </span>
    <div>
        <ul class="flip5">
            <li>Of Darjeeling</li>
            <li>in STAR-VIEW Hotel</li>
            <li>Of Darjeeling</li>
            <li>in STAR-VIEW Hotel</li>
            <li>Of Darjeeling</li>
            <li>in STAR-VIEW Hotel</li>
            <li>Of Darjeeling</li>
            <li>in STAR-VIEW Hotel</li>
            <li>Of Darjeeling</li>
            <li>in STAR-VIEW Hotel</li>
            <li>Of Darjeeling</li>
            <li>in STAR-VIEW Hotel</li>
        </ul>
    </div>
         </h4>
        </div>
        <div id="food-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="4b925461.webp" class="d-block w-100" alt="Food 1" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="dining-table-with-tasty-food-restaurant_219968-17.avif" class="d-block w-100" alt="Food 2" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="Terraco-view-1.jpg" class="d-block w-100" alt="Food 3" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="fitness_room_2.avif" class="d-block w-100" alt="Food 4" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="guided-hike_h.webp" class="d-block w-100" alt="Food 5" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="bangalore-mountain-festival-mtb-event-cross-country-olympic.avif" class="d-block w-100" alt="Food 6" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="all-in-getaway.jpg" class="d-block w-100" alt="Food 7" style="max-width: 100%; max-height: 500px; object-fit: cover;">
                </div>
            </div>
            <a class="carousel-control-prev" href="#food-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#food-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <brs>
        <h1 class="text-center mb-4">Explore our captivating gallery and immerse yourself in the beauty of STAR-VIEW  Hotel and its surroundings.</h1>
    </div>
</section>

<!-- Bootstrap JS -->

<!-- Custom JavaScript for automatic image change -->
<script>
    // Automatically advance carousel every 5 seconds
    $('#food-carousel').carousel({
        interval: 3000
    });
</script>






  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-FvBECIWA1iIl8فافH8T2c2BQbEGwLE6gkRDgnwgvTJaNGwR0mNxBzWEv9nEtJ4B/i" crossorigin="anonymous">

  <style>
    

    /* Best Suite section styles */
#best-suite {
  padding: 40px 0;
}

.video-container {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 aspect ratio */
  height: 0;
  
  overflow: hidden;
}

.video-container video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
    /* About section styles */
    #about {
      background-color: #fff;
      padding: 50px 0;
      box-shadow: 0 2px 60px rgba(0, 0, 0, 0.8);
    }

    .about-text h2 {
      font-family: 'Playfair Display', serif; /* Stylish font for "About Us" heading */
      font-size: 2.5em;
      font-weight: 700;
      color: #333;
    }

    .about-text {
      color: #333;
    }

    .about-image {
      text-align: center;
    }

    .about-image img {
      max-width: 100%;
      height: auto;
    }

    /* Owner photos styles */
    .owner-photos {
      list-style-type: none;
      padding: 0;
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .owner-photos li {
      margin: 0 10px;
    }

    .owner-photos li img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .owner-photos li img:hover {
      transform: scale(1.2);
    }

    /* Hotel amenities styles */
    .amenities {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-top: 30px;
    }

    .amenity {
      text-align: center;
      padding: 15px;
      
      margin: 10px;
      width: 220px;
    }

    .amenity img {
      width: 200px;
      height: 200px;
      transition: transform 0.3s ease;
      border-radius: 90%;
     
    }
    .amenity img:hover {
    transform: scale(1.2);
}



    .amenity p {
      font-weight: bold;
    }

    /* Special offer styles */
   
/* Owner photos styles */
.owner-photos {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.owner-photos li {
    margin: 0 10px;
}

.owner-photos li img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.owner-photos li img:hover {
    transform: scale(1.2);
}









/* Existing styles */
.special-offer {
  background-color:  rgba(33, 58, 45, 100);
    color: #fff;
    padding: 20px;
    text-align: center;
    margin-top: 30px;
    border-radius: 5px;
    animation: zoomIn 1s ease;
}

.special-offer h3 {
    font-size: 1.8em;
    margin-bottom: 10px;
}

.special-offer p {
    font-weight: bold;
}

/* Zoom-in animation */
@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale(0.5);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Touch responsive styles */
@media (max-width: 767px) {
    .special-offer {
        padding: 15px;
        font-size: 14px;
    }

    .special-offer h3 {
        font-size: 1.4em;
    }
}

.parallax {
    /* Set a specific height */
    min-height: 500px;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative; /* Added to position the video */
    overflow: hidden; /* Added to ensure the video stays within the container */
}

.parallax-video {

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1; /* Added to position the video behind the content */
}

.lottie-animation {
    position: absolute; /* Positions the Lottie animation absolutely within the .parallax container */
    right: 20px; /* Adjusts the horizontal position */
    bottom: 200px; /* Adjusts the vertical position */
    width: 150px; /* Reduces the width of the Lottie animation */
    height: 150px; /* Reduces the height of the Lottie animation */
    z-index: 1; /* Ensures the Lottie animation is on top of other elements */
}
.lottie-animation2 {
    position: absolute; /* Positions the Lottie animation absolutely within the .parallax container */
    left: 20px; /* Adjusts the horizontal position */
    bottom: 200px; /* Adjusts the vertical position */
    width: 150px; /* Reduces the width of the Lottie animation */
    height: 150px; /* Reduces the height of the Lottie animation */
    z-index: 1; /* Ensures the Lottie animation is on top of other elements */
}
.lol {
  border-image: 10px;
 
  box-shadow: 0 2px 60px rgba(0, 0, 211, 0.8); 
}

.lol1 {
  border-image: 10px;
    filter: drop-shadow(1px 1px 20px rgba(33, 58, 15, 100));
}
  </style>



  <section id="about">
  <div class="parallax">
      <!--  <div class="lottie-animation">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/5aae5402-c2c5-465e-8a32-2f8a58679d8f/0TzrdsyOmR.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
        </div>
-->
        
        <video class="parallax-video" autoplay loop muted>
            <source src="2yqT.gif" type="video/gif">
        </video>
        
        
    <div class="container">
      <div class="row">
        <div class="col-lg-6 about-text">
          <h2>About Star-View - Your Gateway to Darjeeling's Enchantment</h2>
          <p>Nestled amidst the breathtaking Himalayan foothills, Star-View  Hotel welcomes you to experience the magic of Darjeeling. Our luxurious hotel offers stunning panoramic views, impeccable service, and a haven of tranquility, perfect for an unforgettable getaway.</p>
          <p>
            <p>Steeped in rich history and colonial charm, Star-View Hotel has been a beloved destination for travelers for generations. We are dedicated to preserving this legacy while providing modern amenities and unparalleled guest experiences.</p>
            <p>Indulge in our world-class hospitality, where every detail is meticulously crafted to ensure your comfort and satisfaction. Our dedicated staff is passionate about creating a memorable stay, catering to your every need with warm smiles and genuine care.</p>
             <!-- New content starts here -->
    <h3>Rejuvenating Wellness Retreats</h3>
    <p>Escape the stresses of everyday life and embark on a transformative wellness journey at our state-of-the-art spa. Our talented therapists offer a range of rejuvenating treatments, from traditional Ayurvedic therapies to modern massage techniques, ensuring you leave feeling refreshed and revitalized.</p>

    <h3>Unforgettable Outdoor Adventures</h3>
    <p>Surrounded by the majestic Himalayas, Star-View Hotel is the perfect base for outdoor enthusiasts. Explore the region's breathtaking landscapes through guided trekking, mountain biking, or horseback riding adventures. Our knowledgeable guides will ensure you experience the best of Darjeeling's natural wonders while prioritizing safety and responsible eco-tourism practices.</p>
    <!-- New content ends here -->
            
            <ul class="amenities">
              <P class="amenity">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbJ05atdiHJQiRFzOx33hIW_Tri6jtFAch0Q7lfX6QNg&s" alt="Free Wifi">
                <p></p>
              </P>
              <P class="amenity">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQstyusiaYBJVt1uAMDsbAx2zjBQXGED26EEG3ctPOGEA&s" alt="Spa Treatments">
                <p></p>
              </P>
              <p class="amenity">
                <img src="sanrst-athletic-club.jpg" alt="Fitness Center">
                <p></p>
              </p>
              <p class="amenity">
                <img src="https://3.imimg.com/data3/KD/BJ/MY-16243222/var-m_5-53-53f-5019-56335-service-250x250.jpg" alt="24/7 Room Service">
                <p></p>
              </p>
            </ul>
          </div>
          <div class="col-lg-6 about-image">
            <img src="logostarview.png" class="lol1" alt="STAR-VIEW Hotel Darjeeling">
            <img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExbTQ3ODFvcmZrYXczd2t1ODhvOXN1aHRiYzY3ZTM1MzVxdXI1NW90cSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/E5Hfk3kV0G5zcKPWy4/giphy.webp" class="lol" alt="STAR-VIEW Hotel Darjeeling">

          </div>
          
        
        
        </div>
        

  </div>
        <div class="row">
          <div class="">
        
          </div>
        </div>
        
      </div>
  
      <section id="best-suite">
  <div class="container">
    <h2></h2>
    <div class="video-container" >
      <video autoplay loop muted id="vc">
        <source src="y2mate2.mp4" type="video/mp4">

      </video>
    
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('vc');
            video.playbackRate = 1.0; // Adjust the playback speed here (2.0 means 2x speed)

            // Set the start time (in seconds)
            var startTime = 6; // Change this to the desired start time

            // Wait for the video metadata to be loaded
            video.addEventListener('loadedmetadata', function() {
                video.currentTime = startTime;
                video.play(); // Start playing the video
            });
        });
    </script>
    
    
    
    
    
    
    
    
    </div>
  </div>
</section>
</div>
        <div class="row">
          <div class="col-lg-12 special-offer" id="offer">
            <h3>Exclusive Summer Discount!</h3>
            <p>Book your stay during the Summer season  and enjoy 20% off your room rate. Escape the hustle and bustle of city life and immerse yourself in the beauty of Darjeeling's lush greenery, rejuvenated by the refreshing monsoon showers.</p>
            <p>**Limited time offer! Book now and don't miss out.**</p>
            
            <div class="offers-container">
  <div class="offer-one-container">
    <div class="offer-one">
      <div class="circle">
        <span>@3999</span>
      </div>
      <div class="bottom">
        <h1>Candle Night</h1>
        <p>Get personal candle night dinner with a</p>
        <p> stunning view of Darjeeling hills</p>
       
      </div>
    </div>
    <a href="discount.php">Click me</a>
  </div>
  <div class="offer-two-container">
    <div class="offer-two">
      <div class="circle">
        <span>@4999</span>
      </div>
      <div class="bottom">
        <h1>Darjeeling Escape</h1>
        <p>Experience a two-night stay with complimentary breakfast and a guided tour</p>
       
      </div>
    </div>
    <a href="discount.php"">Click me</a>
  </div>
  <div class="offer-three-container">
    <div class="offer-three">
      <div class="circle">
        <span>@6999</span>
      </div>
      <div class="bottom">
        <h1>Luxury Retreat</h1>
        <p>Enjoy a three-night luxury stay with spa access and gourmet dining</p>
      
      </div>
    </div>
    <a href="discount.php"">Click me</a>
  </div>
</div>

</div>

<style>
div.offers-container {
  display: flex;
  background-color:  rgba(33, 58, 45, 100);
  justify-content: center;
}

div.offer-one, div.offer-two, div.offer-three {
  width: 250px;
  height: 300px;
  background-color: white;
  border: 2px solid #aec6cf;
  margin: 10px;
  margin-top: 100px;
  position: relative;
  background-image: url('200701171052369244-2cd9231e339911eabebd0242ac110007.avif');
  background-repeat: no-repeat;
  transition: all 600ms ease-in-out;
  transform: translateY(0px);
}

div.animate1 {
  transform: translateY(-30px);
}

.offers-container div.circle {
  width: 120px;
  height: 120px;
  border-radius: 90%;
  background-color: #8b0000;
  position: absolute;
  top: -50px;
  left: 125px;
  transform: translateX(-50%);
   box-shadow: 0px 0px 0px 3px white, 0px 0px 0px 5px #DE5233;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 800ms ease-in-out;
}

.offers-container div.circle span {
  font-weight: 400;
  font-size: 30px;
  color: #fff;
}

div.offer-one-container, div.offer-two-container, div.offer-three-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.offer-one-container a {
  text-decoration: none;
  color: #fff;
  padding: 20px 30px;
  background-color: rebeccapurple;
  margin-top: 10px;
  margin-bottom: 10px;
  transition: all 200ms ease-in-out;
}

.offer-two-container a {
  text-decoration: none;
  color: #fff;
  padding: 20px 30px;
  background-color: rebeccapurple;
  margin-top: 10px;
  margin-bottom: 10px;
  transition: all 200ms ease-in-out;
}

.offer-three-container a {
  text-decoration: none;
  color: #fff;
  padding: 20px 30px;
  background-color: rebeccapurple;
  margin-top: 10px;
  margin-bottom: 10px;
  transition: all 200ms ease-in-out;
}

a.offer-one-container, a.offer-two-container, a.offer-three-container:hover {
  box-shadow: 0px 0px 0px 3px #DE5233 inset, 0px 0px 0px 5px white inset;
}

.offers-container div.bottom {
  width: inherit;
  height: 50%;
  background-color: #8b0000;
  position: absolute;
  bottom: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.offers-container div.bottom h1 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
}

.offers-container div.bottom p {
  font-weight: 400;
  font-size: 12px;
  margin-bottom: 7px;
}</style>

<script>
    $(document).ready(function() {
  $('a').hover(function(e) {
    e.preventDefault();
    $(this).prev().toggleClass('animate1');
  });
});
</script>

          </div>
        </div>
        
      </div>

    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    
        .container2 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10vmin;
            overflow: hidden;
            transform: skew(5deg);
        }

        .dot {
            width: 500px;
            height: 500px;
           
            border-radius: 50%;
           right: 50px;
           
        }

        .card-container2 {
            display: none;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .card {
            flex: 1;
            transition: all 1s ease-in-out;
            height: 75vmin;
            position: relative;
            margin: 1em;
        }

        .card__head {
            color: black;
            background: rgba(255, 30, 173, 0.75);
            padding: 0.5em;
            transform: rotate(-90deg);
            transform-origin: 0% 0%;
            transition: all 0.5s ease-in-out;
            min-width: 100%;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
            font-size: 1em;
            white-space: nowrap;
        }

        .card:hover {
            flex-grow: 10;
        }

        .card:hover img {
            filter: grayscale(0);
        }

        .card:hover .card__head {
            text-align: center;
            top: calc(100% - 2em);
            color: white;
            background: rgba(0, 0, 0, 0.5);
            font-size: 2em;
            transform: rotate(0deg) skew(-5deg);
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 1s ease-in-out;
            filter: grayscale(100%);
        }
    /* Transportation Booking section styles */
    #transportation {
      background-color:  rgba(33, 58, 45, 100);
        padding: 50px 0;
        box-shadow: 0 2px 60px rgba(0, 10, 40, 0.8);
  ;
    }

    #transportation h2 {
        text-align: center;
        color: wheat;
        margin-bottom: 30px;
    }

    .transportation-options {
        display: flex;
        margin-top: 50px;
        justify-content: space-around;
        flex-wrap: wrap;
        
    }

    .transportation-option {
        width: 45%;
        background-color: rebeccapurple;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 60px rgba(0, 10, 40, 0.8);
        margin-bottom: 20px;
    }

    .transportation-option h3 {
        margin-bottom: 10px;
        color: white;
    }

    .transportation-option p {
        margin-bottom: 20px;
        color: wheat;
    }

    .transportation-option .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #8b0000;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .transportation-option .btn:hover {
        background-color: #6b0000;
    }

    .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .map-container, .image-container {
            flex: 1;
            margin: 10px;
        }

        .map-container {
            flex: 2; /* Increase the map container's flex value */
            align-items: center;
            display: flex;
        }

        .map-container iframe {
            width: 70%;
            height: 35ex;
            margin-left: 20ex;
            border: 0;
        }
        .image-container img {
            width: 100%;
            margin-left: auto;
            height: auto;
            border: 0;
        }
    
.text-center1 h1{
    text-align: center;
    font-size: 60em;
    letter-spacing: 1.5px;
    padding: 40px;
    color: rebeccapurple;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
    background: linear-gradient(45deg, #6a0dad, #b19cd9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: all 0.3s ease;
}

/* Hover effect */
.text-center1:hover {
    color: #ffffff;
    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.9);
    transform: scale(1.05);
}

/* Media Queries */
@media (max-width: 1200px) {
    .text-center1 {
        font-size: 5em;
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .text-center1 {
        font-size: 4em;
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .text-center1 {
        font-size: 3em;
        padding: 10px;
    }
}
.image-container img {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .image-container img:active {
            transform: scale(1.1);
            opacity: 0.8;
        }

</style>

    <div class="containe2">
 
        <div class="dot"><img src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExeTdidnoyZzljbDJvOXV6Mjc5aGJlZXllM3UxNjZocm9zdHpkOHI2ZSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/mBRLcBE5qCbe1xvwQ3/giphy.gif" alt=""></div>
        <div class="card-container2">   <div class="back-btn">&times;</div>
            <div class="card">
                <img src="187c4ae9-city-42727-16799670a4c.jpg">
                <div class="card__head">Best View</div>
            </div>
            <div class="card">
                <img src="chowrasta1.jpg">
                <div class="card__head">Near Mall</div>
            </div>
            <div class="card">
                <img src="2f63d807146372bac7fd89b3fd81ed077482efe7-1400x1120.jpg">
                <div class="card__head">Luxurious Setup</div>
            </div>
            <div class="card">
                <img src="dining.jpg">
                <div class="card__head">Dinging</div>
            </div>
            <div class="card">
                <img src="58f8418d3475dcb62f3a731c464df29d8f3e0eb1-1892x860.jpg">
                <div class="card__head">Premium Rooms</div>
            </div>
        </div>


  

    </div>



    <script>
       

        const dot = document.querySelector('.dot');
const cardContainer = document.querySelector('.card-container2');


 {
    cardContainer.style.display = 'flex';
    dot.style.display = 'none';
};



    </script>

<section id="transportation">
        <div class="text-center1">
            <h2>Transportation Booking</h2>
        </div>
        <div class="row">
        <div class="image-container">
                <img src="19-09-2018-1537345282-removebg-preview.png" alt="Image">
            </div>
           
            <div class="image-container">
                <img src="Ezjr7sZVUAArQo7-removebg-preview.png" alt="Image">
            </div>
      
        </div>
        <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m34!1m12!1m3!1d227792.18518375687!2d88.17986246529716!3d26.863705202596627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m19!3e0!4m5!1s0x39e443d35d36bfc7%3A0xb6b00a08c43d28f5!2sNew%20Jalpaiguri%20Railway%20Station.%2C%20NJP%20Railway%20Station%20Road%2C%20Ward%2035%2C%20Dabgram%2C%20Siliguri%2C%20West%20Bengal!3m2!1d26.6842105!2d88.44286029999999!4m5!1s0x39e42eea86a85c0b%3A0x2abd29f6dfa41e75!2sDarjeeling%20Mall%2C%20Chauk%20Bazaar%2C%20Darjeeling%2C%20West%20Bengal!3m2!1d27.044856199999998!2d88.2677211!4m5!1s0x39e445fa11c7809d%3A0x95561bf79392f5f4!2sBagdogra%20International%20Airport%2C%20Distt%2C%20Siliguri%2C%20Bagdogra%2C%20Darjeeling%2C%20West%20Bengal!3m2!1d26.685101399999997!2d88.32549759999999!5e0!3m2!1sen!2sin!4v1718428754143!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        <div class="transportation-options">
      
            <div class="transportation-option">
                <h3>NGP to Darjeeling</h3>
                <p>Book your transportation from Nagpur to Darjeeling for a hassle-free journey.</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfTIyH501Hf0WBtvVo6phJ7HMt2HkxIg5gVCTSpCLmmtUaG0g/viewform?usp=sf_link" class="btn">Book Now</a>
            </div>
            <div class="transportation-option">
                <h3>Darjeeling to Airport</h3>
                <p>Arrange your transportation from Darjeeling to the airport for a smooth departure.</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfTIyH501Hf0WBtvVo6phJ7HMt2HkxIg5gVCTSpCLmmtUaG0g/viewform?usp=sf_link" class="btn">Book Now</a>
                          </div>
        
    </section>
  
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
  <link rel="stylesheet" href="styles.css">

  <section id="testimonials">
    <div class="testimonial-heading">
      <span>Guest Reviews</span>
      <h4>Star-view Hotel Darjeeling</h4>
    </div>
    <div class="testimonial-box-container">
      <div class="testimonial-box">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" alt="Guest Image" />
            </div>
            <div class="name-user">
              <strong>Jit Biswas</strong>
              <span>@jitu</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          <p>The Star-view Hotel in Darjeeling exceeded all my expectations! The breathtaking views, impeccable service, and luxurious amenities made my stay truly unforgettable. I can't wait to visit again!</p>
        </div>
      </div>
      <!-- Add more testimonial boxes for other reviews -->



      <!-- Add more testimonial boxes for other reviews -->
<div class="testimonial-box">
    <div class="box-top">
        <div class="profile">
            <div class="profile-img">
                <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" alt="Guest Image 2" />
            </div>
            <div class="name-user">
                <strong>Ahana Goswami</strong>
                <span>@cherry33113</span>
            </div>
        </div>
        <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
    </div>
    <div class="client-comment">
        <p>The Star-view Hotel provided a cozy and welcoming atmosphere. The staff was incredibly friendly and accommodating, and the location was perfect for exploring Darjeeling. I highly recommend it!</p>
    </div>
</div>

<div class="testimonial-box">
    <div class="box-top">
        <div class="profile">
            <div class="profile-img">
                <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" alt="Guest Image 3" />
            </div>
            <div class="name-user">
                <strong>Rahul Das</strong>
                <span>@rahul_d</span>
            </div>
        </div>
        <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>
    <div class="client-comment">
        <p>My stay at the Star-view Hotel was absolutely delightful. The rooms were elegant and comfortable, the food was delicious, and the views were stunning. It was truly a memorable experience!</p>
    </div>
</div>
<div class="testimonial-box">
    <div class="box-top">
        <div class="profile">
            <div class="profile-img">
                <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" alt="Guest Image 4" />
            </div>
            <div class="name-user">
                <strong>Snehal Bhoumik</strong>
                <span>@snehal_m</span>
            </div>
        </div>
        <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
    </div>
    <div class="client-comment">
        <p>I had a fantastic experience at the Star-view Hotel. The staff went above and beyond to make my stay enjoyable, and the facilities were top-notch. The hotel's location offers breathtaking views of Darjeeling, making it an ideal choice for travelers.</p>
    </div>
</div>

<div class="testimonial-box">
    <div class="box-top">
        <div class="profile">
            <div class="profile-img">
                <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" alt="Guest Image 5" />
            </div>
            <div class="name-user">
                <strong>Utsab bose</strong>
                <span>@utsab332</span>
            </div>
        </div>
        <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
    </div>
    <div class="client-comment">
        <p>The Star-view Hotel exceeded my expectations in every way. From the moment I arrived, I felt welcomed and cared for by the attentive staff. The rooms were spacious and beautifully decorated, and the hotel's amenities were exceptional. I would highly recommend it to anyone visiting Darjeeling!</p>
    </div>
</div>

    </div>
  </section>
  <script src='https://kit.fontawesome.com/c8e4d183c2.js'></script>


<style>
*{
   
  margin: 0px;
  padding: 0px;
  font-family: poppins;
  box-sizing: border-box;
}
a{
  text-decoration: none;
}
#testimonials{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width:100%;
}
.testimonial-heading{
  letter-spacing: 1px;
  margin: 30px 0px;
  padding: 10px 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.testimonial-heading span{
  font-size: 1.3rem;
  color: #252525;
  margin-bottom: 10px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.testimonial-box-container{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  width:100%;
}
.testimonial-box{
  width:500px;
  box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
  background-color: #ffffff;
  padding: 20px;
  margin: 15px;
  cursor: pointer;
}
.profile-img{
  width:50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}
.profile-img img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}
.profile{
  display: flex;
  align-items: center;
}
.name-user{
  display: flex;
  flex-direction: column;
}
.name-user strong{
  color: #3d3d3d;
  font-size: 1.1rem;
  letter-spacing: 0.5px;
}
.name-user span{
  color: #979797;
  font-size: 0.8rem;
}
.reviews{
  color: #f9d71c;
}
.box-top{
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
.client-comment p{
  font-size: 0.9rem;
  color: #4b4b4b;
}
.testimonial-box:hover{
  transform: translateY(-10px);
  transition: all ease 0.3s;
}

@media(max-width:1060px){
  .testimonial-box{
      width:45%;
      padding: 10px;
  }
}
@media(max-width:790px){
  .testimonial-box{
      width:100%;
  }
  .testimonial-heading h1{
      font-size: 1.4rem;
  }
}
@media(max-width:340px){
  .box-top{
      flex-wrap: wrap;
      margin-bottom: 10px;
  }
  .reviews{
      margin-top: 10px;
  }
}
::selection{
  color: #ffffff;
  background-color: #252525;
}
</style> 
<style>
      .footer {
        background-color:  rgba(33, 58, 45, 100);
    color: #ffffff;
    padding: 20px 0;
    text-align: center;
    margin-top: 0px;
    position: relative;
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-text {
    flex: 1;
    text-align: left;
    margin-right: 20px;
}

.footer-iframe {
    flex-shrink: 0;
    text-align: right;
}

.footer a {
    color: #ffffff;
    text-decoration: none;
    margin: 0 10px;
}

.footer a:hover {
    text-decoration: underline;
}


        .info-section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

</style>

    </section>

<div class="footer">
    <div class="footer-content">
        <div class="footer-text">
            <p>&copy; 2024 Star-View Hotel. All Rights Reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> |
                <a href="faq.php">FAQ</a> |
                <a href="contact.php">Contact</a>
            </p>
            <h2>Follow Us</h2>
            <p>Stay connected with us on social media:</p>
            <a href="https://www.facebook.com" target="_blank" class="btn btn-primary">Facebook</a>
            <a href="https://www.twitter.com" target="_blank" class="btn btn-info">Twitter</a>
            <a href="https://www.instagram.com" target="_blank" class="btn btn-danger">Instagram</a>
        </div>
        <div class="footer-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3553.6146815890843!2d88.26370952495186!3d27.042339104508784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e42eea86a85c0b%3A0x2abd29f6dfa41e75!2sDarjeeling%20Mall!5e0!3m2!1sen!2sin!4v1715960810903!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 18029073;
    window.__lc.integration_name = "manual_onboarding";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/18029073/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

   
</body>
 
</html>

