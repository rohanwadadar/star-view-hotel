<?php
// Include database connection
include_once 'db.php';

// Initialize session
session_start();

// Check if the user is already logged in, if yes, then redirect them to the home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

// Define variables and initialize with empty values
$username = $email = $password = "";
$username_err = $email_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Check input errors before inserting into database
    if(empty($username_err) && empty($email_err) && empty($password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: rebeccapurple;
            background-size: cover;
            
            background-repeat: no-repeat;
            padding-top: 100px; /* Add padding from the top */
        }
       
        h2 {
            color: #007bff;
            text-align: center; 
            font-size:  50px;
            font-family: "Audiowide", sans-serif;/* Center align the heading */
        }
        p {
            color: rebeccapurple;
            margin-top: 30px;
            font-size: 20px;
        }
        form {
            margin-top: 20px;
            text-align: center; /* Center align the form */
            ackground-position: center;
             backdrop-filter: blur(30px);
    box-shadow: 0px 20px 100px rgba(227, 228, 237, 0.37);
        }
        button {
            margin-top: 10px;
        }

        .form-group {
            ackground-position: center;
             backdrop-filter: blur(30px);
    box-shadow: 0px 0px 80px rgba(227, 228, 237, 0.37);
            background-color: cornsilk; /* Purple background for the form */
            color: rebeccapurple; /* White text color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            margin-bottom: 50px;
        }
       .form-group text1 {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        size: 10px;
       }
       .form-control{
        margin-bottom: 20px;
       }
       .form-group h2 {
            text-align: center;
            margin-bottom: 20px;
            color: rebeccapurple; /* White color for the heading */
        }

        .form-group label {
            font-size: 1.1rem;
            margin-top: 40px;

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

.small-curved-btn {
    padding: 5px 10px; /* Adjust padding to make the button smaller */
    font-size: 14px; /* Adjust font size as needed */
    border-radius: 15px; /* Makes the corners curved */
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

</head>
<body>
    <div class="form-group">
        <h2>New User Sign Up</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            
                <label>Email</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
           
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary" value="Reset">
           
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
        </div>
    </div>    
</body>
</html>
