<?php
// Initialize the session
session_start();

// Define sessionData object
$_SESSION['sessionData'] = [];

// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = "";
$username_err = $password_err = $confirm_password_err = $email_err = "";

// Function to validate email using regex
function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty($_POST["username"])) {
        $username_err = "Please enter a username.";
    } else {
        $username = $_POST["username"];
    }

    // Validate email
    if (empty($_POST["email"])) {
        $email_err = "Please enter your email.";
    } else {
        $email = $_POST["email"];
        if (!isValidEmail($email)) {
            $email_err = "Invalid email format.";
        }
    }

    // Validate password
    if (empty($_POST["password"])) {
        $password_err = "Please enter a password.";
    } else {
        $password = $_POST["password"];
    }

    // Validate confirm password
    if (empty($_POST["confirm_password"])) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = $_POST["confirm_password"];
        if ($password != $confirm_password) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check if there are no validation errors
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {

        // Save data in sessionData object
        $_SESSION['sessionData']['username'] = $username;
        $_SESSION['sessionData']['email'] = $email;

        // Redirect to index.php
        header("location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        /* STYLE FOR FORM HTML */
        body {
            font-family: Arial, sans-serif;
            background-color: #94A684;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #E4E4D0;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 4px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        #errorMessage {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo $username; ?>" required>
            <span id="errorMessage"><?php echo $username_err; ?></span>

            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php echo $email; ?>" required>
            <span id="errorMessage"><?php echo $email_err; ?></span>

            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <span id="errorMessage"><?php echo $password_err; ?></span>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" required>
            <span id="errorMessage"><?php echo $confirm_password_err; ?></span>

            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>

</html>
