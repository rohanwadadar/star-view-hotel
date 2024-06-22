<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
</head>
<body>
    <video autoplay muted loop id="bg-video">
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
                <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="rooms1.html">ROOMS</a></li>
                    <li class="nav-item"><a class="nav-link" href="REVIEW1.php">GALLERY</a></li>
                    <li class="nav-item"><a class="nav-link" href="cancel2.php">STATUS</a></li>
                    <li class="nav-item"><a class="nav-link" href="service1.php">SERVICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="darjeeling1.php">PLACES </a></li>
                    <li class="nav-item"><a class="nav-link" href="contact1.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        

        .form-group {
            background-color: transparent; /* Purple background for the form */
            color: rebeccapurple; /* White text color */
            padding: 20px;
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

        
.heading1 {
    text-align: center;
    
    letter-spacing: 1.0px;
    padding: 40px;
    color: rebeccapurple;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
    background: linear-gradient(45deg, #6a0dad, #b19cd9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: all 0.3s ease;
}

/* Hover effect */
.heading1:hover {
    color: #ffffff;
    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.9);
    transform: scale(1.05);
}

/* Media Queries */
@media (max-width: 1200px) {
    .heading1 {
        font-size: 5em;
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .heading1 {
        font-size: 4em;
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .heading1 {
        font-size: 3em;
        padding: 10px;
    }
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
        .alert-danger {
           font-size:  60px;
           background-color: rgb(red, green, blue);  
           text-align: center;    
        
           font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
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
       
        .alert-success{
            background-color: transparent;
            
            margin-top: 20px;
            font-size: 40px;
            
        }
        .alert-success img {
         size: 1px;
            
        }
        .alert-info{
            background-color: transparent;
            margin-top: 30px;
        }
    </style>
    <div class="form-group">
        <h2 class="heading1">Check Booking Status</h2>
        <form method="POST">
            
                <label for="customer_id" class="text1">Customer ID:</label>
                <input type="text" class="form-control" id="customer_id" name="customer_id" required>
        
                <label for="room_id"  class="text1">Room ID:</label>
                <input type="text" class="form-control" id="room_id" name="room_id" required>
          
            <button type="submit" class="btn btn-primary">Check Status</button>
        </form>
        <!-- Go to Home Button -->
        <div class="mt-3">
            <a href="index2.php" class="btn btn-secondary">Go to Home</a>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['customer_id']) && !empty($_POST['room_id'])) {
        include_once 'db.php'; // Include your database connection setup

        $customer_id = $_POST['customer_id'];
        $room_id = $_POST['room_id'];

        // Prepare the SQL statement to find the booking details for the customer ID and room ID
        $stmt = $mysqli->prepare("SELECT b.id AS booking_id, b.room_id, r.availability FROM bookings b
                                  JOIN rooms r ON b.room_id = r.id
                                  WHERE b.customer_id = ? AND b.room_id = ?");
        $stmt->bind_param("ii", $customer_id, $room_id);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $booking = $result->fetch_assoc();
            $booking_id = $booking['booking_id'];
            $room_id = $booking['room_id'];
            $availability = $booking['availability'];

            // Display the status based on room availability
            if ($availability === 'booked') {
                echo "<div class='center'>
                <div class='alert-success' role='alert'>
                    Room is booked with the Room ID: $room_id and Customer ID: $customer_id
                    <br><img src='unnamed.gif' alt='Booking Confirmed' >
                </div>
              </div>";
                // Provide cancellation form if room is booked
                echo "<div class='alert-info' role='alert'>
                        <form method='POST'>
                            <input type='hidden' name='booking_id' value='$booking_id'>
                            <input type='hidden' name='customer_id' value='$customer_id'>
                            <input type='hidden' name='room_id' value='$room_id'>
                            <div class='form-group'>
                            <label for='reason'>If You Wanna Cancel</label>
                                <label for='reason'>Reason for cancellation: (*Initial money non-refundable)</label>
                                <textarea class='form-control' id='reason' name='reason' required></textarea>
                            </div>
                            <div class='center'>
                            <button type='submit' name='cancel' class='btn-danger '>Cancel Booking</button>
                            </div>
                        </form>
                      </div>";
            } else {
                echo "<div class='alert-danger' role='alert'>Not Booked</div>";
            }
        } else {
            echo "<div class='alert-danger' role='alert'>No booking found for this customer ID and room ID.</div>";
        }
        $stmt->close();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancel'])) {
        $booking_id = $_POST['booking_id'];
        $room_id = $_POST['room_id'];
        $reason = $_POST['reason'];

        include_once 'db.php'; // Include your database connection setup

        // Update availability status in rooms table to 'available'
        $stmt = $mysqli->prepare("UPDATE rooms SET availability = 'available' WHERE id = ?");
        $stmt->bind_param("i", $room_id);
        $stmt->execute();

        // Insert cancellation record
        $stmt = $mysqli->prepare("INSERT INTO cancel (booking_id, reason) VALUES (?, ?)");
        $stmt->bind_param("is", $booking_id, $reason);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<div class='alert alert-success' role='alert'>Booking cancelled successfully.</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Failed to cancel booking.</div>";
        }
        $stmt->close();
        $mysqli->close(); // Close database connection
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>














  
<style>
        .footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
      margin-top: 90px;
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
  background-color: slateblue;
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


   