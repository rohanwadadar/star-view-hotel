<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Star-View Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Navbar styles */
        .navbar {
            background-color: transparent;
            color: #e6e6e6;
            font-size: 1.1em;
        }

        .navbar-brand {
            font-family: 'Damion', cursive;
            font-size: 1.1em;
            font-weight: bold;
            color: inherit;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
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
            font-family: 'Damion', cursive;
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
            color: rebeccapurple;
            background-color: rgba(230, 230, 230, 0.2);
        }

        .navbar-links li a:hover::after,
        .navbar-links li a:focus::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: rebeccapurple;
            border-radius: 2px;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .navbar-links li a:hover::after {
            transform: scaleX(1);
        }

        /* Contact page styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }

        .contact-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .contact-header {
            text-align: center;
    font-size: 6em;
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
.contact-header:hover {
    color: #ffffff;
    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.9);
    transform: scale(1.05);
}

/* Media Queries */
@media (max-width: 1200px) {
    .contact-header {
        font-size: 5em;
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .contact-header {
        font-size: 4em;
        padding: 20px;
    }
}

@media (max-width: 480px) {
    .contact-header {
        font-size: 3em;
        padding: 10px;
    }
}
        .contact-header h1 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }

        .contact-form .form-group label {
            margin-bottom: 20px;
            color: rebeccapurple;
        }

        .contact-form label {
            font-weight: bold;
            color: #555;
        }

        .contact-form input,
        .contact-form textarea {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            color: #333;
            transition: border-color 0.3s ease;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: rebeccapurple;
            outline: none;
        }

        .contact-form button[type="submit"] {
            background-color: rebeccapurple;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button[type="submit"]:hover {
            background-color: #6a2c8d;
        }

        

        
        .contact-details {
            text-align: center;
            margin-top: 40px;
        }

        .contact-details h3 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-details ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .contact-details li {
            margin-bottom: 10px;
        }

        .contact-details li a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-details li a:hover {
            color: rebeccapurple;
        }

        .contact-details li i {
            margin-right: 10px;
            color: rebeccapurple;
        }
        .footer-iframe {
            flex-shrink: 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
                    <li class="nav-item"><a class="nav-link" href="REVIEW.php">GALLERY</a></li>
                    <li class="nav-item"><a class="nav-link" href="cancel.php">STATUS</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.php">SERVICE</a></li>
                    <li class="nav-item"><a class="nav-link" href="darjeeling.php">PLACES </a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Form -->
    <div class="contact-container">
        <div class="contact-header">
            <h1>Get in Touch</h1>
        </div>
        <form class="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
            </div><button type="submit" class="btn btn-primary">Submit</button>
       </form>

       <!-- Contact Details -->
       <div class="contact-details">
           <h3>Contact Details</h3>
           <ul>
               <li><i class="fas fa-envelope"></i><a href="mailto:info@starviewhotel.com">info@starviewhotel.com</a></li>
               <li><i class="fab fa-facebook"></i><a href="https://www.facebook.com/starviewhotel" target="_blank">facebook.com/starviewhotel</a></li>
               <li><i class="fab fa-instagram"></i><a href="https://www.instagram.com/starviewhotel" target="_blank">instagram.com/starviewhotel</a></li>
               <li><i class="fab fa-linkedin"></i><a href="https://www.linkedin.com/company/starviewhotel" target="_blank">linkedin.com/company/starviewhotel</a></li>
           </ul>
       </div>
       <div class="footer-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3553.6146815890843!2d88.26370952495186!3d27.042339104508784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e42eea86a85c0b%3A0x2abd29f6dfa41e75!2sDarjeeling%20Mall!5e0!3m2!1sen!2sin!4v1715960810903!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
   </div>
<script>
    const form = document.querySelector('.contact-form');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the default form submission

  const name = document.querySelector('#name').value;
  const email = document.querySelector('#email').value;
  const message = document.querySelector('#message').value;

  // Construct the WhatsApp message
  const whatsappMessage = `Name: ${name}%0AEmail: ${email}%0AMessage: ${message}`;
  const whatsappNumber = '8585048271'; // Replace with the desired WhatsApp number

  // Open WhatsApp Web with the constructed message
  const whatsappUrl = `https://web.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(whatsappMessage)}`;
  window.open(whatsappUrl, '_blank');
});</script>

   <!-- Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></SCRIP>
</body>
</html>