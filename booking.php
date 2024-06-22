<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
          body {
           
           font-family: Arial, sans-serif;
           
       }

       .container {
           background-color: transparent;
           padding: 20px;
       
   
           width: 80%;
           margin: auto;
       }

       h2 {
           color: white;
           margin-bottom: 30px;
       }

       .room-info {
           background-color: snow;
           border: 1px solid #dee2e6;
           border-radius: 5px;
           padding: 20px;
           margin-bottom: 20px;
       }

       .price {
           font-size: 24px;
           color: #007bff;
           margin-bottom: 10px;
       }

       .description {
           color: #007bff;
           margin-bottom: 10px;
       }

       .btn-view {
           margin-top: 20px;
       }

       .btn-add-to-cart {
           font-size: 18px;
           padding: 10px 20px;
       }

       .btn-selected {
           background-color: red !important;
           color: white !important;
       }
       .navbar-brand {
   font-family: 'Damion', cursive; /* Keep the cursive font */
   font-size: 3em; /* Increase the font size for the brand */
   font-weight: bold;
   color: white; /* Change the text color to red */
   text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Lighter text shadow */

   /* Optional: Adjust padding or margin if needed */
   padding: 10px 0; /* Example padding adjustment */
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
       .footer {
   background-color: #343a40;
   color: #ffffff;
   padding: 20px 0;
   text-align: center;
   margin-top: 50px;
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

    </style>
</head>




</div>
<body>
<video autoplay muted loop id="bg-video" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -1;">
    <source src="mixkit-bubbles-of-water-rising-to-the-surface-186-medium.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

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
                    <li class="nav-item"><a class="nav-link" href="cancel.php">STATUS</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.php">SERVICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="darjeeling.php">PLACES </a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>         
    




<style>
       .form-group {
            background-color: transparent; /* Purple background for the form */
            color: rebeccapurple; /* White text color */
            padding: 49px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }
       .form-group text1 {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        size: 10px;
       }
       .form-group h2 {
            text-align: center;
            margin-bottom: 20px;
            color: rebeccapurple; /* White color for the heading */
        }

        .form-group label {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            margin-bottom: 5px;
            font-weight: bold;
            display: block;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .btn-primary, .btn-secondary {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary {
            background-color: rebeccapurple;
            color: white;
        }

        .btn-primary:hover {
            background-color: rebeccapurple;
        }

        .btn-secondary {
            background-color: rebeccapurple;
            color: white;
            margin-top: 10px;
        }

        .btn-secondary:hover {
            background-color: rebeccapurple;
        }

        .mt-3 {
            margin-top: 10px;
        }
        .btn-danger button {
            background-color: red;
            color: white;
            text-align: center;
            margin-top: 10px;
        }
        .center {
            text-align: center;
        }
       
</style>


<div class="form-group">
    <div class="center">
    <h2>Check Rooms</h2>
    <form action="roomcart.php" method="post" id="bookingForm">
        
            <label for="num_adults" class="text1">Number of Adults</label>
            <input type="number" class="form-control" id="num_adults" name="num_adults" min="1">
        
            <label for="num_children" class="text1">Number of Children</label>
            <input type="number" class="form-control" id="num_children" name="num_children" min="0">
        </div>
        <!-- Use btn-block to make button full-width -->
        <button type="submit" class="btn btn-primary btn-block">View Rooms</button>
        <a href="index2.php" class="btn btn-secondary btn-block">Home</a>
    </form>
    </div>
    <div id="roomList">
        <?php
        // Assuming you have a database connection
        include_once 'db.php';

        // Fetch room details from the database where availability is 'available' and max_occupancy is greater than or equal to the number of adults
        $sql = "SELECT * FROM rooms WHERE availability = 'available' AND max_occupancy >= ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $_POST['num_adults']);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if there are any available rooms
        if ($result->num_rows > 0) {
            // Output each available room info
            while ($row = $result->fetch_assoc()) {
                $room_id = $row['id'];
                $room_type = $row['room_type'];
                $price = $row['price'];
                $description = $row['description'];
                ?>
                <div class="room-info">
                    <h3><?php echo $room_type; ?></h3>
                    <div class="price">INR <?php echo number_format($price, 2); ?> / night</div>
                    <div class="description"><?php echo $description; ?></div>
                    <button type="button" class="btn btn-primary btn-lg btn-view">View Details</button>
                    <!-- Add data attributes to store room details -->
                    <button type="button" class="btn btn-success btn-lg btn-add-to-cart"
                            onclick="addToCart('<?php echo $room_type; ?>')">Add to Cart</button>
                </div>
                <?php
            }
        } else {
            echo "";
        }

        // Close database connection
        $mysqli->close();
        ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Function to add room to cart
    function addToCart(roomType) {
        // Create hidden input field with room type value
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'selected_rooms[]';
        input.value = roomType;
        document.getElementById('bookingForm').appendChild(input);
    }
</script>




<style>
        .footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
      margin-top: 20px;
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
          .x {
  background-color: red;
  padding: 10px;
  border-radius: 3px;
  transition: all 0.3s ease; /* Add transition for smooth effect */
}

.x:active {
  border-radius: 20px; /* Increase border-radius for curved edges */
  box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.3); /* Add inner shadow */
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
              <a href="https://www.facebook.com" target="_blank" class="x">Facebook</a>
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
