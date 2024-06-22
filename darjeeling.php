<!DOCTYPE html>
<html lang="en">
<style>
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
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darjeeling Tourism</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px 0;
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

        .form-control {
            background-color: darkgrey;
        }

        .info-section {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .text1 {
            font-size: 20px;
            text-decoration: sandybrown;
        }
        /* Initial state */
.place-to-visit img {
    transition: transform 1s ease; /* Slow transition */
    transform: scale(1); /* Normal size */
}

/* Hover effect */
.place-to-visit img:hover {
    transform: scale(1.2); /* Scale up when hovered */
}

/* Touch effect for touch devices */
@media (hover: none) and (pointer: coarse) {
    .place-to-visit img:active {
        transform: scale(1.2); /* Scale up when touched */
    }
}

  
    </style>
</head>
<body>
    <video autoplay muted loop id="bg-video" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; z-index: -1;">
        <source src="mixkit-bubbles-of-water-rising-to-the-surface-186-medium.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container-fluid">
        <header class="bg-dark text-white py-3 mb-4">
            <div class="container">
                <h1>Darjeeling Tourism</h1>
            </div>
        </header>
        
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Places to Visit in Darjeeling
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Activities in Darjeeling
                        </label>
                    </div>
                </div>
            </div>
            
            <div id="places-to-visit" class="segment show">
                <h2 class="activities-heading">Places to Visit in Darjeeling</h2>
                <div class="row">
                    <!-- Adding places inside the row as provided in your last message -->
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="Tiger_Hill_i1xvel.avif" alt="Tiger Hill" class="img-fluid">
                            <div class="place-info">
                                <h3>Tiger Hill</h3>
                                <p>One of the best tourist destinations in Darjeeling for nature lovers is Tiger Hill. The captivating sight of the sun's rays hitting the Himalayas just requires a small amount of climbing and enduring the bitter cold. Remember to bring your camera so you can capture this breathtaking scene.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="Batasia_Loop_esvu2m.avif" alt="Batasia Loop" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Batasia Loop</h3>
                                <p>Batasia Loop is an engineering marvel but more than that it is a paramount tourist attraction to view the glorious Mount Kanchenjunga and other associated Himalayan Peaks. The war memorial of Batasia stands witness to the courage of brave Gorkha soldiers who laid down their lives in a line of duty to protect the sovereignty and integrity of the nation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="shutterstock_1471402307_iu0b6j.avif" alt="Peace Pagoda" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Peace Pagoda</h3>
                                <p>This monument reflects the 4 avatars of Lord Buddha that attract a lot of tourists who come here to meditate and experience spiritual serenity. When visiting Darjeeling, don't miss out on the spectacular bird's eye view of Darjeeling from the summit of the Peace Pagoda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_25,w_800,h_450,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/chowrasta_darjeeling_suy5ft" alt="Chowrasta" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Chowrasta</h3>
                                <p>Nestled at the heart of Darjeeling Chowrasta beholds the testimony of Himalayan Hospitality. A go-to place for the populace of Darjeeling, it is where love stories are written and immortalized whereas the elderly devote their time discussing the future of Darjeeling comparing it with a glorious past.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="Happy_Valley_Tea_Estate_seng7w.avif" alt="Happy Valley Tea Estate" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Happy Valley Tea Estate</h3>
                                <p>Any trip to this land of golden beverage is incomplete without visiting tea estates that are the pride of Darjeeling. This tea estate is of the oldest in the town. Experience the beauty of tea gardens and also the process of tea making. Don't forget to take some souvenirs home.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_60,w_1200,h_675,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/Darjeeling-Observatory-Hill-Mahakal-Temple_hish3t" alt="Observatory Hill" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Observatory Hill</h3>
                                <p>Blessed by the might of Lord Shiva and the Lord Buddha, the observatory hill is a living testimony of how Hindu and Buddhist communities live in peace and harmony to celebrate the true essence of fraternity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_36,w_592,h_333,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/Shrubbery_Nightingale_Park_uuopdm" alt="Shrubbery Nightingale Park" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Shrubbery Nightingale Park</h3>
                                <p>On the way to Darjeeling Zoological Park, the Shrubbery Nightingale Park is a place underrated but a moment here will certainly overwhelm you with a majestic view of Mount Kanchenjunga. The lush green environment of the park is a go-to hangout place for locals and you may also expect a young bunch enjoying the serenity in joy and harmony.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_113,w_1200,h_675,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/tenzing-rock_ok584n" alt="Tenzing Rock" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Tenzing Rock</h3>
                                <p>Named after a legendary Mountaineer Tenzing Norgay Sherpa, the Tenzing Rock is a famous tourist attraction in Darjeeling. It is a known fact that the rock served as a training ground for Mr. Sherpa and for that reason alone, the traveler comes from a distance to witness the history that still stands and aspires young mountaineers to be like Mr. Sherpa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_28,w_550,h_310,r_0,c_crop,q_90,fl_progressive/w_550,f_auto,c_fit/summit-hotels-resorts/Darjeeling_Himalayan_Railway_d8llkj" alt="Darjeeling Himalayan Railway" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Darjeeling Himalayan Railway</h3>
                                <p>DHR is a piece of heritage left by colonials for the people of Darjeeling. The chronology associated with the engineering marvels itself needs a special introduction but to understand the timeline one must visit because unless you won't take a ride you will never know how legendary the Darjeeling Himalayan Railway is.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="place-to-visit">
                            <img src="https://res.cloudinary.com/simplotel/image/upload/x_0,y_84,w_1600,h_900,r_0,c_crop,q_90,fl_progressive/w_825,f_auto,c_fit/summit-hotels-resorts/Himalayan_Mountaineering_Institute_wxtno1" alt="Himalayan Mountaineering Institute" class="img-fluid">
                            <div class="place-info">
                                <h3 class="mt-3">Himalayan Mountaineering Institute</h3>
                                <p>Hosting a wonderful collection of mountaineering gears used during the historic expeditions to Everest and other important peaks, the HMI accords the legacy and preserves for aspiring mountaineers and travelers to behold. Amongst the prosperous collection, the mountaineering gears worn by great Tenzing Norgay Sherpa are a must-see collection from their archives.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add other places similarly -->
                </div>
            </div>
            
            <div id="activities" class="segment">
                <h2 class="activities-heading">Activities in Darjeeling</h2>
                <div class="place-to-visit">  <img src="https://res.cloudinary.com/simplotel/image/upload/w_5000,h_1535/x_0,y_0,w_3170,h_1357,r_0,c_crop,q_90,fl_progressive/w_1650,f_auto,c_fit/summit-grace-hotel-darjeeling/Darjeeling_Summit_Hotel_and_" class="img-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Adventure Activities</h2>
                        <ul>
                            <li>Mountain Biking Park in Senchal Wildlife Sanctuary</li>
                            <li>Jeep Safari to Sandakphu and Phalut</li>
                            <li>Darjeeling Rangit Valley Passenger Ropeway</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>Family Activities</h2>
                        <ul>
                            <li>Toy train ride- Darjeeling Himalayan Railway (UNESCO Heritage site)</li>
                            <li>Visit Japanese Peace Pagoda</li>
                            <li>Visit Padmaja Naidu Himalayan Zoological Park</li>
                            <li>Tourist Activities</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>Tourist Activities</h2>
                        <ul>
                            <li>Sightseeing from Tiger Hill Sunrise Observatory Deck</li>
                            <li>Stroll in Chowrasta & Mall Road</li>
                            <li>Tour of Happy Valley Tea Estate</li>
                        </ul>
                    </div>
                </div></div>
            </div>
        </div>

        <div class="footer">
            <div class="footer-content">
                <div class="footer-text">
                    <p>&copy; 2024 Star-View Hotel. All Rights Reserved.</p>
                    <p>
                        <a href="#">Privacy Policy</a> |
                        <a href="#">Terms of Service</a> |
                        <a href="#">Contact</a>
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
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('input[type=radio][name=options]').change(function() {
                if (this.id == 'option1') {
                    $('#places-to-visit').show();
                    $('#activities').hide();
                } else if (this.id == 'option2') {
                    $('#places-to-visit').hide();
                    $('#activities').show();
                }
            });
        });
    </script>
</body>
</html>
