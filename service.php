

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mountain Adventure Services</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap">
  <style>
        
        .navbar {
            background-color: transparent; /* Slate gray color for a cool, mountain look */
            color: #e6e6e6; /* Light gray color for text */
            
            font-size: 1.1em;
            
        }

        .navbar-brand {
            font-family: 'Damion', cursive; /* Cursive font for the brand */
            font-size: 1.1em;
            font-weight: bold;
            color: inherit;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Lighter text shadow */
        }

        .navbar-brand img {
            max-height: 190px;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .navbar-links {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            margin-left: 70px;
        }

        .navbar-links li {
            margin-right: 30px;
        }

        .navbar-links li:last-child {
            margin-right: 0;
        }

        .navbar-links li a {
            font-family: 'Damion', cursive; /* Cursive font for navbar links */
            color: black;
            text-decoration: none;
            font-size: 1.0em;
            font-weight: bold;
            padding: 10px 15px;
            position: relative;
            transition: all 0.3s ease;
        }

        .navbar-links li a:hover,
        .navbar-links li a:focus {
            color: rebeccapurple; /* Light gray color on hover */
            background-color: rgba(230, 230, 230, 0.2); /* Semi-transparent light gray background on hover */
        }

        .navbar-links li a:hover::after,
        .navbar-links li a:focus::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: rebeccapurple; /* Light gray color for underline */
            border-radius: 2px;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .navbar-links li a:hover::after {
            transform: scaleX(1);
        }

        .nav-item.dropdown a.dropdown-toggle {
            color: inherit;
            font-weight: bold;
            font-family: 'Damion', cursive;
        }

        .nav-item.dropdown a.dropdown-toggle:hover,
        .nav-item.dropdown a.dropdown-toggle:focus {
            color: #e6e6e6;
            font-family: 'Damion', cursive;
        }

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
            font-family: 'Damion', cursive;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background-color: rgba(230, 230, 230, 0.2); /* Semi-transparent light gray background on hover */
            color: #e6e6e6;
        }

        .dropdown-divider {
            border-top: 1px solid #e6e6e6; /* Light gray color for divider */
        }

        #bg-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
        }
    
    
    
        </style>
  
  <style>

    
    body {
      font-family: 'Open Sans', sans-serif;
      
    }

    .container {
      background: ;
      padding: 0px;
      margin-top: 0px;
      border-radius: 8px;
      box-shadow: rgba(0, 0, 0, 0.8);
    }

    .heading {
      margin-top: 2px;
    text-align: center;
    font-size: 6em;
    letter-spacing: 1.5px;
    padding: 1px;
    color: rebeccapurple;
    text-shadow: 1px 2px 5px rgba(0, 0, 0, 0.8);
    background: linear-gradient(45deg, #6a0dad, #b19cd9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: all 0.3s ease;
}

/* Hover effect */
.heading:hover {
    color: #ffffff;
    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.6);
    transform: scale(1.05);
}

/* Media Queries */
@media (max-width: 1200px) {
    .heading {
        font-size: 5em;
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .heading {
        font-size: 4em;
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .heading {
        font-size: 3em;
        padding: 10px;
    }
}


    p {
      text-align: center;
      font-size: 1.1rem;
      margin-top: 40px;
      color: rebeccapurple;
    }

    .service-card {
      border: none;
      border-radius: 8px;
      transition: box-shadow 0.3s ease;
    }

    .service-card:hover {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    
    /* Add animation to the card images */
.card-img-top {
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  max-height: 200px;
  object-fit: cover;
  transition: transform 0.3s ease; /* Add transition for smooth animation */
}

/* Add hover effect to the card images */
.card-img-top:hover {
  transform: scale(1.1); /* Increase scale on hover for animation effect */
}

    .card-img-top {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
      max-height: 200px;
      object-fit: cover;
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
      color: #333;
    }

    .card-text {
      font-size: 1rem;
      color: #666;
    }

    .text-muted {
      font-size: 1rem;
      color: #999;
      display: none; /* Hide the price initially */
    }

    .form-check-input {
      margin-top: 15px;
      width: 30px;
      height: 30px;
    }

    button {
      background-color: #5c67f2;
      color: white;
      border: none;
      padding: 15px 30px;
      font-size: 1rem;
      cursor: pointer;
      border-radius: 5px;
      margin-top: 20px;
    }

    button:hover {
      background-color: #4a54e1;
    }
    .custom-form {
  background-color: transparent;
  padding: 20px;
  border-radius: 8px;
}




.dis h1 {
color: red;
}




  </style>
</head>
<body>
    
    
    
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="L3.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-links">
                    <li class="nav-item"><a class="nav-link" href="index2.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="rooms.html">ROOMS</a></li>
                    <li class="nav-item"><a class="nav-link" href="review.php">GALLERY</a></li>
                    <li class="nav-item"><a class="nav-link" href="cancel.php">STATUS</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.php">SERVICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="darjeeling.php">PLACES </a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    </body>






<body>
<video autoplay muted loop id="bg-video">
        <source src="mixkit-bubbles-of-water-rising-to-the-surface-186-medium.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
  <form id="serviceForm" method="post" class="custom-form">
  <div class="container mt-5">

  
    <p class="heading"> Services</p>
    <p class="lead mb-5">Experience the thrill of the mountains with our personalized services.</p>
    
      <div class="row">
        <!-- Laundry Service -->
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="laundry.php">
            <img src="laundri_services.jpg" alt="Laundry Service" class="card-img-top">
          </a>
            <div class="card-body">
              <h5 class="card-title">Laundry Service</h5>
              <p class="card-text">Take the hassle out of laundry during your mountain adventure.</p>
              <div class="form-check">
          <!--      <input type="checkbox" class="form-check-input" id="laundry" name="services[]" value="Laundry">  -->
                <label class="form-check-label" for="laundry"></label>
              </div>
              <p class="text-muted" data-price="700">₹700</p>
            </div>
          </div>
        </div>
        <!-- Food Service -->
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="food.php">
  <img src="310106896.jpg" alt="Food Service" class="card-img-top">
</a>

            <div class="card-body">
              <h5 class="card-title">Food Service</h5>
              <p class="card-text">Enjoy delicious and hearty meals prepared by experienced chefs.</p>
              <div class="form-check">
          <!--      <input type="checkbox" class="form-check-input" id="food" name="services[]" value="Food">    -->
                <label class="form-check-label" for="food"></label>
              </div>
              <p class="text-muted" data-price="1500">₹1500</p>
            </div>
          </div>
        </div>
        <!-- Bonfire Arrangement -->
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="bornfire.php">
            <img src="guided-hike_h.webp" alt="Bonfire Arrangement" class="card-img-top">
          </a>
            <div class="card-body">
          
              <h5 class="card-title">Adition Services</h5>
              <p class="card-text">Gather around  under the stars with Star-View hotle for unforgettable evenings with our add on services.</p>
              <div class="form-check">
           <!--     <input type="checkbox" class="form-check-input" id="bonfire" name="services[]" value="Bonfire">  -->
                <label class="form-check-label" for="bonfire"></label>
              </div>
              <p class="text-muted" data-price="2000">₹2000</p>
            </div>
          </div>
        </div>
        <!-- Guided Hiking Tours 
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="bornfire.php">
            <img src="guided-hike_h.webp" alt="Guided Hiking Tours" class="card-img-top">
          </a>
            <div class="card-body">
              <h5 class="card-title">Guided Hiking Tours</h5>
              <p class="card-text">Explore breathtaking trails with experienced guides for a safe and memorable adventure.</p>
              <div class="form-check">
              <!--  <input type="checkbox" class="form-check-input" id="hiking" name="services[]" value="Guided Hiking Tours">  
                <label class="form-check-label" for="hiking"></label>
              </div>
              <p class="text-muted" data-price="2500">₹2500</p>
            </div>
          </div>
        </div>
        <!-- Tent Rental 
        <div class="col-md-6 mb-4">
          <div class="card service-card">
            <img src="4b925461.webp" alt="Tent Rental" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Tent Rental</h5>
              <p class="card-text">Rent comfortable and spacious tents for a cozy night's sleep in the mountains.</p>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tent" name="services[]" value="Tent Rental">
                <label class="form-check-label" for="tent"></label>
              </div>
              <p class="text-muted" data-price="1200">₹1200</p>
            </div>
          </div>
        </div> 
        <!-- Mountain Biking       
        <div class="col-md-6 mb-4">
          <div class="card service-card">
          <a href="bornfire.php">
            <img src="bangalore-mountain-festival-mtb-event-cross-country-olympic.avif" alt="Mountain Biking" class="card-img-top">
          </a>
            <div class="card-body">
              <h5 class="card-title">Mountain Biking</h5>
            <!--  <p class="card-text">Embark on thrilling mountain biking adventures through rugged terrain.</p> 
              <div class="form-check">
         <!--       <input type="checkbox" class="form-check-input" id="biking" name="services[]" value="Mountain Biking">  
                <label class="form-check-label" for="biking"></label>
              </div>
              <p class="text-muted" data-price="1800">₹1800</p>
            </div>
          </div>
        </div>--> 
      </div>
      
    <!--  <a href="index2.php" class="btn btn-secondary home-btn">Go to Home</a> -->
    </form>
    <!-- Notification bar for displaying selected service price -->
    <div id="notification" class="alert alert-info mt-4" style="display: none;"></div>
  </div>

  <!-- JavaScript code 
  <script>
    function submitForm() {
      var selectedServices = [];
      var selectedPrices = [];
      var checkboxes = document.querySelectorAll('input[name="services[]"]:checked');
      checkboxes.forEach((checkbox) => {
        selectedServices.push(checkbox.value);
        var price = checkbox.parentNode.nextElementSibling.getAttribute('data-price');
        selectedPrices.push(price);
      });
      if (selectedServices.length > 0) {
        var notification = document.getElementById('notification');
        notification.style.display = 'block';
        notification.innerHTML = 'You have selected: ' + selectedServices.join(', ') + '.<br>';
        notification.innerHTML += 'Total Price: ₹' + selectedPrices.reduce((acc, curr) => parseInt(acc) + parseInt(curr), 0);
      } else {
        alert("Please select at least one service.");
      }
    }
  </script>
</body>
  -->
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relieved Daring Beaver</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
   <style>
        
    /* Navbar styles */
     


    </style>
</head>
<body>



 <!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>   </div>
</>
</body>
</html>






  
<style>
      .footer {
    background-color: #343a40;
    color: #ffffff;
    padding: 20px 0;
    text-align: center;
    margin-top: 90px;
    box-shadow: rgba(0, 0, 0, 0.8);
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
<html>
<div class="footer">
    <div class="footer-content">
        <div class="footer-text">
            <p>&copy; 2024 Star-View Hotel. All Rights Reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> |
                <a href="#">Terms of Service</a> |
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

</body>
</html>
<script>

</script>


   
</body>
 
</html>

