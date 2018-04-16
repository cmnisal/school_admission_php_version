<?php
require "config.php";
session_start();
if(isset($_SESSION['username'])) {
    header("Location: includes/welcome.php");
}
// Define variables and initialize with empty values
$username = $password= $role = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
        echo "<script type='text/javascript'>alert('Enter a username');window.location='../views/login_view.php';</script>";;

    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
        echo "<script type='text/javascript'>alert('Enter password');window.location='../views/login_view.php';</script>";;

    } else{
        $password = trim($_POST['password']);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password,role FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password,$role);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;
                            $_SESSION['role'] = $role;
                            header("Location:welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                            echo "<script type='text/javascript'>alert('Password not valid');window.location='../views/login_view.php';</script>";;

                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                    echo "<script type='text/javascript'>alert('User doesn\'t exist!!');window.location='../views/login_view.php';</script>";;

                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
                echo "<script type='text/javascript'>alert('Something went wrong!!');window.location='../views/login_view.php';</script>";;

            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($db);
}
?>