<?php
// Include database connection
include_once 'db.php';

// Initialize session
session_start();

// Check if the user is already logged in, if yes, then redirect them to the home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index2.php");
    exit;
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Define success message
$login_success_message = '';

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Check input errors before proceeding to authenticate the user
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Set login success message
                            $login_success_message = 'Login successful!';
                            
                            // Redirect user to home page after a delay
                            echo '<script>
                                    setTimeout(function() {
                                        window.location.href = "index2.php";
                                    }, 2000); // 2 seconds delay
                                 </script>';
                        } else{
                            // Password is not valid, display a generic error message
                            $password_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $username_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
   
    <style>
    /* Custom styles for login page */body {
    font-family: Arial, sans-serif;
    background-color: rebeccapurple;
            background-size: cover;
            b
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
        <h2>Existing users login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         
                <label>Username</label>
                <input type="text" name="username" class="form-control" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
          
                <label>Password</label>
                <input type="password" name="password" class="form-control" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
           
                <input type="submit" class="btn btn-primary" value="Login">
            
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form></div>
    </div>
    
    <!-- Display login success message as a pop-up -->
    <?php if (!empty($login_success_message)): ?>
        <script>
            alert("<?php echo $login_success_message; ?>");
        </script>
    <?php endif; ?>
</body>
</html>
