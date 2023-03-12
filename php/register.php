<?php
  $conn = mysqli_connect("localhost", "root", "root", "blogdb");

  if(!$conn){
    echo "Connection error: " . mysqli_connect_error();
  }

  if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "INSERT INTO userdata(username, email, password) VALUES('$username', '$email', '$password')";

    mysqli_query($conn, $sql);
    header("Location: login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="iinfinityAI Developers | Thinula Damsith">
    <meta name="description" content="Impact of social media on mental health - Project under the research and development category by Leo Club of Colombo Griffins">
    <meta name="keywords" content="Leo Club of Colombo Griffins, Research and Development, Mental Health, Support">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="shortcut icon" href="../assets/imgs/favicon.ico" type="image/x-icon">


    <title>Register | Mindful Moments</title>
</head>
<body>
    <div class="login-box">
        <h2>Register</h2>
        <form method="GET">
          <div class="user-box">
            <input type="text" name="username" id="username" required>
            <label for="username">Username</label>
          </div>
          <div class="user-box">
            <input type="email" name="email" id="email" required>
            <label for="email">E mail</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password" required>
            <label for="password">Password</label>
          </div>
          <input name="submit" class="submit" type="submit" value="Submit" id="submit">
        </form>
        <p class="bth">
            <a href="../index.php" style="text-decoration: none;">
                Back to Home
            </a>
        </p>
      </div>
</body>
</html>