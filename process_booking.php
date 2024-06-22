<?php
// Include database connection
include_once 'db.php';

// Function to generate a random 7-digit alphanumeric string
function generateCustomerID($length = 7) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$customer_id = ''; // Initialize the customer_id variable
$roomIDs = []; // Array to store room IDs

// Check if form data is set and complete
if (isset($_POST['selected_rooms'], $_POST['start_date'], $_POST['end_date'], $_POST['totalPrice'],$_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address'], $_POST['payment_id'])) {
    // Retrieve form data
    $selectedRooms = $_POST['selected_rooms']; // Since it's a comma-separated string, no need to explode
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $total_price = $_POST['totalPrice']; // Adjusted key name
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $payment_id = $_POST['payment_id'];
    $customer_id = generateCustomerID(); // Generate a unique customer ID
    
    // Insert booking details into the database for each selected room
    $selectedRoomsArray = explode(',', $selectedRooms);
    foreach ($selectedRoomsArray as $selected_room_id) {
        $sql = "INSERT INTO bookings (room_id, start_date, end_date, total_price, phone, email, address, payment_id, customer_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("issssssss", $selected_room_id, $start_date, $end_date, $total_price, $phone, $email, $address, $payment_id, $customer_id);

        // Execute the query and handle success/failure
        if ($stmt->execute()) {
            // Update room availability
            $updateRoomSql = "UPDATE rooms SET availability = 'booked' WHERE id = ?";
            $updateRoomStmt = $mysqli->prepare($updateRoomSql);
            $updateRoomStmt->bind_param("i", $selected_room_id);
            $updateRoomStmt->execute();
            $updateRoomStmt->close();

            // Store room ID
            $roomIDs[] = $selected_room_id;
        } else {
            // Handle insertion failure
            echo "Error: Unable to confirm booking.";
            // Log or display detailed error information
        }

        // Close prepared statement
        $stmt->close();
    }

    // Close database connection
    $mysqli->close();
} else {
    echo "Form data is not complete.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jsPDF library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('istockphoto-539107688-612x612.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-top: 100px;
        }
        #processing {
            text-align: center;
            color: #007bff;
        }
        #done {
            text-align: center;
            color: #007bff;
            display: none; /* Initially hidden */
        }
    </style>
</head>
<body>
    <!-- Display processing animation -->
    <div id="processing">
        <img src="processing.gif" alt="Processing" width="100" height="100">
        <p>Processing your booking...</p>
    </div>

    <!-- Display done animation -->
    <div id="done">
        <img src="check-mark-button-joypixels.gif" alt="Done" width="100" height="100">
        <p>Booking Processed! Booking ID: <?php echo $customer_id ?></p>
    
        <ul>
            <?php foreach ($roomIDs as $roomID): ?>
                <li><?php echo "Room ID: {$roomID}"; ?></li>
            <?php endforeach; ?>
        </ul>
        <!-- Button to go to the home page and status page -->
        <a href="index.php" class="btn btn-primary">Go to Home Page</a>
        <a href="cancel.php" class="btn btn-secondary">Check Booking Status</a>
        <!-- Button to download the PDF -->
        <button onclick="downloadPDF()" class="btn btn-success">Download PDF</button>
    </div>

    <script>
        // Show the done animation after a few seconds
        setTimeout(function(){
            document.getElementById('processing').style.display = 'none';
            document.getElementById('done').style.display = 'block';
        }, 3000); // 3000 milliseconds = 3 seconds

        // Function to download the PDF
        function downloadPDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            const bookingID = "<?php echo $customer_id ?>";
            const roomIDs = <?php echo json_encode($roomIDs) ?>;
            const startDate = "<?php echo $start_date ?>";
            const endDate = "<?php echo $end_date ?>";
            const totalPrice = "<?php echo $total_price ?>";
            const name = "<?php echo $name ?>";
            const phone = "<?php echo $phone ?>";
            const email = "<?php echo $email ?>";
            const address = "<?php echo $address ?>";

            let content = `
                Booking Confirmation\n
                name: ${name}\n
                Booking ID: ${bookingID}\n
                Room IDs: ${roomIDs.join(', ')}\n
                Start Date: ${startDate}\n
                End Date: ${endDate}\n
                Total Price: ${totalPrice}\n
                
                Phone: ${phone}\n
                Email: ${email}\n
                Address: ${address}\n
            `;

            doc.text(content, 10, 10);
            doc.save('Booking_Confirmation.pdf');
        }
    </script>
</body>
</html>
