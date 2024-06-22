<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
}</style>
</head>
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
    
  <div class="timing-display">
            <p> <a href="rooms.html"><img src="roomlogo.png" alt="WhatsApp Logo" width="100" height="100" />Image</a></p>
       </div>     
               


<style>
    .text2 {
    text-align: left;
}
    .text1 {
    font-family: Arial, sans-serif;  /* Sets the font */
    font-size: 50px;                 /* Sets the font size */
    color: rebeccapurple;                     /* Sets the text color */
    padding: 5px 10px;               /* Adds padding around the text */
             /* Adds a border around the label */
    /* Rounds the corners of the border */
    display: inline-block;           /* Makes the label behave like an inline-block element */
    margin-bottom: 10px;             /* Adds space below the label */
}

     .form-group {
            background-color: transparent; /* Purple background for the form */
            color: rebeccapurple; /* White text color */
            padding: 50px;
            
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }
       .form-group text1 {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
     
       }
       .form-group h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 70px;
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
    <form action="search1.php" method="post" id="bookingForm">
        <div class="text2">
            <label for="start_date" class="text1">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        
            <label for="end_date" class="text1">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
            </div>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Container</title>
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
          font-size: 70PX;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           
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
        .back-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: white;
    cursor: pointer;
}

.btn-add-to-cart {
            background-color: rebeccapurple;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-add-to-cart:hover {
            background-color: darkviolet;
        }
    .price{
        color: red;
    }

    .description{
      
        color: rebeccapurple;
    }
    .rno{
        color: rebeccapurple;
        font-size: 20px;
        margin-top: 15px;
    }
    .hed{
        color: rebeccapurple;
        font-size: 50px;
        margin-top: 15px;
    }
    </style>
</head>
<body>
    <div class="containe2">
        <div class="dot"><img  alt=""> Click to see the rooms </div>
        <div class="card-container2">   <div class="back-btn">&times;</div>
            <div class="card">
                <img src="fbcc8527.avif">
                <div class="card__head">Standard Room</div>
            </div>
            <div class="card">
                <img src="vvroom1.jpg">
                <div class="card__head">Deluxe Room</div>
            </div>
            <div class="card">
                <img src="333825214.jpg">
                <div class="card__head">Suite</div>
            </div>
            <div class="card">
                <img src="500036448.jpg">
                <div class="card__head">Penthouse</div>
            </div>
            <div class="card">
                <img src="Image.jpg">
                <div class="card__head">Villa</div>
            </div>
        </div>
    </div>

    <script>
       

        const dot = document.querySelector('.dot');
const cardContainer = document.querySelector('.card-container2');
const backBtn = document.querySelector('.back-btn');

dot.addEventListener('click', () => {
    cardContainer.style.display = 'flex';
    dot.style.display = 'none';
});

backBtn.addEventListener('click', () => {
    cardContainer.style.display = 'none';
    dot.style.display = 'block';
});
    </script>
</body>
</html>
            
        

        <div id="selectedRooms">
            <!-- Hidden input fields for selected rooms will be added dynamically -->
        </div>

        <button type="button" class="btn btn-primary btn-block mt-4" onclick="submitForm()">Book Selected Rooms</button>
    </form>
</div>
    <div id="roomList">
        <?php
        include_once 'db.php';

        // Fetch rooms grouped by type
        $sql = "SELECT DISTINCT room_type FROM rooms WHERE availability = 'available' AND max_occupancy >= ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $_POST['num_adults']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $room_type = $row['room_type'];

                // Fetch available rooms of this type
                $rooms_query = "SELECT * FROM rooms WHERE room_type = ? AND availability = 'available'";
                $rooms_stmt = $mysqli->prepare($rooms_query);
                $rooms_stmt->bind_param("s", $room_type);
                $rooms_stmt->execute();
                $rooms_result = $rooms_stmt->get_result();

                if ($rooms_result->num_rows > 0) {
                    ?>
                    <div class="room-info">
                        <div class="hed"><?php echo $room_type; ?></div>
                        
                        <?php while ($room = $rooms_result->fetch_assoc()) { ?>
                            <div>
                            <div class="rno">Room Number : <?php echo htmlspecialchars($room['id']); ?></div>
                                <div class="price">INR <?php echo number_format($room['price'], 2); ?> / night</div>
                                <div class="description"><?php echo $room['description']; ?></div>
                                <button type="button" class="btn-add-to-cart"
                                        data-room-type="<?php echo $room_type; ?>" data-room-id="<?php echo $room['id']; ?>"
                                        onclick="addToCart(this)">Add Rooms</button>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                }
            }
        } else {
            echo "No available rooms matching the criteria.";
        }

        $mysqli->close();
        ?>
    </div>
</div></div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    var selectedRooms = {};

    function addToCart(button) {
    var roomType = button.getAttribute('data-room-type');
    var roomId = button.getAttribute('data-room-id');

    if (!selectedRooms[roomType]) {
        selectedRooms[roomType] = [];
    }

    var index = selectedRooms[roomType].indexOf(roomId);

    if (index === -1) {
        // Room not selected, add it to the list
        selectedRooms[roomType].push(roomId);
        button.classList.add('btn-selected');
    } else {
        // Room already selected, remove it from the list
        selectedRooms[roomType].splice(index, 1);
        button.classList.remove('btn-selected');
    }
}

    function submitForm() {
        var selectedRoomsContainer = document.getElementById('selectedRooms');
        selectedRoomsContainer.innerHTML = '';

        for (var roomType in selectedRooms) {
            selectedRooms[roomType].forEach(roomId => {
                var selectedRoomsInput = document.createElement('input');
                selectedRoomsInput.type = 'hidden';
                selectedRoomsInput.name = 'selected_rooms[]';
                selectedRoomsInput.value = `${roomId}`;
                selectedRoomsContainer.appendChild(selectedRoomsInput);
            });
        }

        document.getElementById('bookingForm').submit();
    }
</script>
<style>
        .footer {
      background-color: #343a40;
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
