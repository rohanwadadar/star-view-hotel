<?php
session_start();

// Define predefined offers
$predefinedOffers = array(
    2999,
    3999,
    4999
);

// Validate form data
if (isset($_POST['selected_rooms'], $_POST['start_date'], $_POST['end_date'])) {
    $selectedRooms = $_POST['selected_rooms'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Calculate number of nights
    $start = new DateTime($startDate);
    $end = new DateTime($endDate);
    $interval = $start->diff($end);
    $numberOfNights = $interval->days;

    // Assuming you have a database connection
    include_once 'db.php';

    // Fetch room details for the selected rooms
    $sql = "SELECT * FROM rooms WHERE id IN (" . implode(',', $selectedRooms) . ")";
    $result = $mysqli->query($sql);

    // Initialize total price
    $totalPrice = 0;

    // Calculate total price without offer
    while ($row = $result->fetch_assoc()) {
        $pricePerNight = $row['price'];
        $totalRoomPrice = $pricePerNight * $numberOfNights;
        $totalPrice += $totalRoomPrice;
    }

    // Apply offer if submitted
    if (isset($_POST['offer_code'])) {
        $offerAmount = $_POST['offer_code'];
        if (in_array($offerAmount, $predefinedOffers)) {
            $totalPrice += $offerAmount;
        }
    }

    // Display cart summary
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart Summary</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                padding-top: 20px;
            }

            .container {
                background-color: white;
                border-radius: 5px;
                padding: 20px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
                width: 80%;
                margin: auto;
            }

            h2 {
                color: #007bff;
                text-align: center;
                margin-bottom: 30px;
            }

            th {
                color: #007bff;
            }

            .btn-primary {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h2>Cart Summary</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Room Type</th>
                    <th>Price per Night</th>
                    <th>Number of Nights</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display room details
                $result->data_seek(0);
                while ($row = $result->fetch_assoc()) {
                    $roomType = $row['room_type'];
                    $pricePerNight = $row['price'];
                    $totalRoomPrice = $pricePerNight * $numberOfNights;
                    ?>
                    <tr>
                        <td><?php echo $roomType; ?></td>
                        <td>INR <?php echo number_format($pricePerNight, 2); ?></td>
                        <td><?php echo $numberOfNights; ?></td>
                        <td>INR <?php echo number_format($totalRoomPrice, 2); ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Amount (Before Offer)</th>
                    <th>INR <?php echo number_format($totalPrice, 2); ?></th>
                </tr>
            </tfoot>
        </table>

        <!-- Offer selection -->
        <div>
            <h3>Apply Offer:</h3>
            <select id="offer_code" name="offer_code" class="form-control" onchange="calculateTotal()">
                <option value="">Select Offer</option>
                <?php foreach ($predefinedOffers as $offerAmount): ?>
                    <option value="<?php echo $offerAmount; ?>">INR <?php echo number_format($offerAmount, 2); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Total price after offer -->
        <div id="total_with_offer" style="display: none;">
            <h3>Total Amount (After Offer)</h3>
            <p id="total_amount"></p>
        </div>

        <script>
            function calculateTotal() {
                var offerAmount = document.getElementById("offer_code").value;
                var totalPrice = <?php echo $totalPrice; ?>;
                if (offerAmount !== "") {
                    totalPrice += parseInt(offerAmount);
                    document.getElementById("total_amount").textContent = "INR " + totalPrice.toFixed(2);
                    document.getElementById("total_with_offer").style.display = "block";
                    document.getElementById("final_total").value = totalPrice;
                } else {
                    document.getElementById("total_with_offer").style.display = "none";
                    document.getElementById("final_total").value = <?php echo $totalPrice; ?>;
                }
            }
        </script>

        <!-- Proceed to Payment button -->
        <form action="book_room.php" method="post">
            <input type="hidden" name="selected_rooms" value="<?php echo implode(',', $selectedRooms); ?>">
            <input type="hidden" name="start_date" value="<?php echo $startDate; ?>">
            <input type="hidden" name="end_date" value="<?php echo $endDate; ?>">
            <input type="hidden" name="totalPrice" id="final_total" value="<?php echo $totalPrice; ?>">
            <button type="submit" class="btn btn-primary btn-block">Proceed to Payment</button>
        </form>
    </div>
    </body>
    </html>
    <?php
}
?>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800, 800i, 900&display=swap');
    .form-control {
        color: white;
    }
    h2 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }
        p {
            color: yellowgreen;
            margin-left: 20px;
           
        }
        h3 {
            color: white;
            text-align: center;
            margin-left: 30px;
        }
        th {
            color: white;
        }
        td {
            color: yellowgreen;
        }
        .btn-primary {
            color: white;
            margin-top: 20px;
        }

        /* Adjust alignment for table footer */
        tfoot th {
            color: white;
            text-align: right;
        }
    body {
   
    
  
    background: black;
}
.container {
    position: relative;
     
    background: rebeccapurple;
    box-shadow: rgba(0, 0, 0, 0.8);
}
.container {
    display: flex; /* Make the containers flex items */
    flex-wrap: wrap; /* Allow them to wrap to the next line */
    justify-content: flex-start; /* Align them starting from the left */
    margin-left: 70px;
    padding-bottom: 90px; /* Counteract the margin on the first container */
}

.container .card {
    width: 320px;
    height: 450px;
    background: #232323;
    border-radius: 20px;
    overflow: hidden;
    margin: 20px; /* Add margin around each card */
}

.container .card:hover:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: purple;
    clip-path: circle(150px at 80% 20%);
    transition: 0.5s ease-in-out;
}

.container .card:after {
    content: "Dinner";
    position: absolute;
    top: 30%;
    left: -20%;
    font-size: 12em;
    font-weight: 800;
    font-style: italic;
    color: rgba(255, 255, 255, 0.04);

}

.container .card .imgBx {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    width: 100%;
    height: 100%;
    transition: .5s;
}

.container .card:hover .imgBx {
    top: 0%;
    transform: translateY(-25%);
    /* bug  */
}

.container .card .imgBx img {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(0deg);
    width: 270px;
}

.container .card .contentBx {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    text-align: center;
    transition: 1s;
    z-index: 90;
}

.container .card:hover .contentBx {
    height: 210px;
}

.container .card .contentBx h2 {
    position: relative;
    font-weight: 600;
    letter-spacing: 1px;
    color: #fff;
}

.container .card .contentBx .size,
.container .card .contentBx .color {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px 20px;
    transition: .5s;
    opacity: 0;
    visibility: hidden;
}

.container .card:hover .contentBx .size {
    opacity: 1;
    visibility: visible;
    transition-delay: .5s;
}

.container .card:hover .contentBx .color {
    opacity: 1;
    visibility: visible;
    transition-delay: .6s;
}

.container .card .contentBx .size h3,
.container .card .contentBx .color h3 {
    color: white;
    font-weight: 300;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-right: 10px;
}

.container .card .contentBx .size span {
    width: 26px;
    height: 26px;
    text-align: center;
    line-height: 26px;
    font-size: 14px;
    display: inline-block;
    color: #111;
    background: #fff;
    margin: 0 5px;
    transition: .5s;
    color: #111;
    border-radius: 4px;
    cursor: pointer;
}

.container .card .contentBx .size span:hover {  /* other bug */
    background: #B90000;
}

.container .card .contentBx .color span {
    width: 20px;
    height: 20px;
    background: #ff0;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}

.container .card .contentBx .color span:nth-child(2) {
     background: white;
    
}

.container .card .contentBx .color span:nth-child(3) {
     background: white;
}

.container .card .contentBx .color span:nth-child(4) {
     background: white;
}

.container .card .contentBx a {
    display: inline-block;
    padding: 10px 20px;
    background: #fff;
    border-radius: 4px;
    margin-top: 10px;
    text-decoration: none;
    font-weight: 600;
    color: #111;
    opacity: 0;
    transform: translateY(50px);
    transition: .5s;
}

.container .card:hover .contentBx a {
    opacity: 1;
    transform: translateY(0px);
    transition-delay: .7s;
} 
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <title>Product Card UI Design</title>
</head>


<body>

    <div class="container">
        <div class="card">
            <div class="imgBx">
                <img src="https://www.ragaontheganges.com/assets/img/candle-light-dinner.jpg" alt="Candel">
            </div>
            <div class="contentBx">
                <h2>Candel Night Dinner</h2>
                <div class="size">
                    <h3>₹ 3999</h3>
                </div>
                <p>Get personal candle night dinner with a</p>
        <p> stunning view of Darjeeling hills</p>
                
            </div>
        </div>
    

        <div class="card">
            <div class="imgBx">
                <img src="https://tripindia.co.in//uploads/Short-Escape-to-Darjeeling2.jpg" alt="Candel">
            </div>
            <div class="contentBx">
                <h2>Darjeeling Escape</h2>
                <div class="size">
                    <h3>₹ 4999</h3>
                </div>
                <p>Experience a two-night stay with complimentary breakfast and a guided tour</p>
       
                
            </div>
        </div>
   

        <div class="card">
            <div class="imgBx">
                <img src="https://assets.cntraveller.in/photos/627d1326b4ee3e5281042f03/16:9/w_1280,c_limit/ging-darjeeling-lead.jpg" alt="Candel">
            </div>
            <div class="contentBx">
                <h2>Luxury Retreat</h2>
                <div class="size">
                    <h3>₹ 6999</h3>
                </div>
                <p>Enjoy a three-night luxury stay with spa access and gourmet dining</p>
      
             
            
        </div>
    </div>
</div>
</body>
</html>
