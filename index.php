<?php
// Start output buffering and session at the very top
ob_start();
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel1"; // Use your database name here

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Initialize message variables
$signupMessage = "";
$loginMessage = "";

// Handling form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sign Up
  if (isset($_POST['signup'])) {
    $username = $_POST['signup_user'];
    $password = password_hash($_POST['signup_password'], PASSWORD_BCRYPT);
    $email = $_POST['signup_email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
      $signupMessage = "Registration successful!";
    } else {
      $signupMessage = "Error: " . $conn->error;
    }
  }

  // Sign In
  if (isset($_POST['login'])) {
    $username = $_POST['login_user'];
    $password = $_POST['login_password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      if (password_verify($password, $row['password'])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $loginMessage = "Login successful! Redirecting...";
        echo "<script>
                        setTimeout(function() {
                            window.location.href = 'http://localhost/TravelWebsite/Home.php';
                        }, 2000);
                      </script>";
      } else {
        $loginMessage = "Invalid password.";
      }
    } else {
      $loginMessage = "No user found with that username.";
    }
  }
}

// Close the connection
$conn->close();

ob_end_flush(); // End output buffering
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Sign Up</title>

  <!-- Font Awesome CDN link for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <style>
    /* Global Styling */
    h1 {
      font-size: 50px;
      color: white;
      text-shadow: 0 0 10px #00f0ff, 0 0 20px #00bfff;
      /* Neon glow effect */
      font-weight: bold;
      margin-top: 0;
      margin-bottom: 20px;
      /* Space below the header */
      padding-top: 10px;
      padding-bottom: 10px;
      font-family: 'Arial', sans-serif;
      text-align: center;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #000;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      color: #fff;
      flex-direction: column;
      /* Stack items vertically */
    }

    /* Container Styling with Neon Border */
    .login-wrap {
      width: 100%;
      max-width: 400px;
      background: rgba(0, 0, 0, 0.8);
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 15px #00f0ff, 0 0 30px #00bfff;
      /* Neon effect */
      padding: 20px;
    }

    /* Tab Styling */
    .login-html {
      width: 100%;
      padding: 10px;
      position: relative;
    }

    .login-html .tab {
      font-size: 20px;
      margin-right: 20px;
      padding-bottom: 10px;
      display: inline-block;
      cursor: pointer;
      color: #00f0ff;
      transition: color 0.3s;
    }

    .login-html .tab:hover {
      color: #00bfff;
    }

    /* Form Styling */
    .login-form {
      min-height: 250px;
      padding-top: 20px;
    }

    .login-form .group {
      margin-bottom: 20px;
    }

    /* Styling for Labels */
    .login-form .group .label {
      font-size: 14px;
      margin-bottom: 5px;
      display: block;
      color: #00f0ff;
      text-shadow: 0 0 5px #00f0ff, 0 0 10px #00bfff;
      /* Neon effect */
    }

    /* Styling for Input and Button Fields */
    .login-form .group .input,
    .login-form .group .button {
      width: 100%;
      padding: 12px;
      border: 1px solid #00f0ff;
      border-radius: 5px;
      margin-top: 5px;
      font-size: 16px;
      color: #fff;
      background: rgba(255, 255, 255, 0.1);
      transition: border 0.3s, background 0.3s;
      box-sizing: border-box;
      box-shadow: 0 0 10px #00f0ff, 0 0 20px #00bfff;
      /* Neon glow effect */
    }

    .login-form .group .input:focus,
    .login-form .group .button:focus {
      border-color: #00bfff;
      outline: none;
      background: rgba(0, 0, 0, 0.2);
      box-shadow: 0 0 15px #00f0ff, 0 0 30px #00bfff;
      /* Enhanced neon on focus */
    }

    /* Styling for Submit Button */
    .login-form .group .button {
      background: #00f0ff;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s, box-shadow 0.3s;
    }

    .login-form .group .button:hover {
      background: #00bfff;
      box-shadow: 0 0 15px #00bfff, 0 0 30px #00f0ff;
      /* Neon glow on hover */
    }

    /* Footer Link */
    .foot-lnk {
      text-align: center;
      font-size: 14px;
      color: #00f0ff;
      margin-top: 10px;
    }

    .foot-lnk a {
      color: #00f0ff;
      text-decoration: none;
      transition: color 0.3s;
    }

    .foot-lnk a:hover {
      color: #00bfff;
    }

    /* Hide forms by default */
    .form-container {
      display: none;
    }

    /* Show the active form */
    .form-container.active {
      display: block;
    }
  </style>
</head>

<body>
  <!-- Logo Heading with AOS animation at the top center -->
  <h1 class="logo">
    <i class="fas fa-paper-plane"></i> Travel Genie
  </h1>

  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked onclick="showForm()">
      <label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up" onclick="showForm()">
      <label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
        <!-- Sign In Form -->
        <div id="signin" class="form-container active">
          <form method="POST" action="">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="user" type="text" name="login_user" class="input" required>
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="pass" type="password" name="login_password" class="input" required>
            </div>
            <div class="group">
              <input type="submit" name="login" class="button" value="Sign In">
            </div>
            <div class="foot-lnk">
              <a href="#forgot">Forgot Password?</a>
            </div>
          </form>
          <?php if (!empty($loginMessage)) {
            echo "<p>$loginMessage</p>";
          } ?>
        </div>

        <!-- Sign Up Form -->
        <div id="signup" class="form-container">
          <form method="POST" action="">
            <div class="group">
              <label for="signup_user" class="label">Username</label>
              <input id="signup_user" type="text" name="signup_user" class="input" required>
            </div>
            <div class="group">
              <label for="signup_password" class="label">Password</label>
              <input id="signup_password" type="password" name="signup_password" class="input" required>
            </div>
            <div class="group">
              <label for="signup_email" class="label">Email</label>
              <input id="signup_email" type="email" name="signup_email" class="input" required>
            </div>
            <div class="group">
              <input type="submit" name="signup" class="button" value="Sign Up">
            </div>
            <?php if (!empty($signupMessage)) {
              echo "<p>$signupMessage</p>";
            } ?>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function showForm() {
      const signin = document.getElementById("signin");
      const signup = document.getElementById("signup");
      const isSignIn = document.querySelector('input[name="tab"]:checked').id === 'tab-1';

      if (isSignIn) {
        signin.classList.add('active');
        signup.classList.remove('active');
      } else {
        signup.classList.add('active');
        signin.classList.remove('active');
      }
    }
  </script>
</body>

</html>