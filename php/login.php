<?php      
    $conn = mysqli_connect("localhost", "root", "root", "blogdb");
    
    if(!$conn){
        echo "Connection error: " . mysqli_connect_error();
    }

    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
      function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $username = validate($_REQUEST['username']);
      $password = validate($_REQUEST['password']);

      if(empty($username)){
        header("Location: login.php?error=Username is required");
        exit();
      }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
      }else{
        $sql = "SELECT * FROM userdata WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
          $row = mysqli_fetch_assoc($result);
          if($row['username'] === $username && $row['password'] === $password){
            echo "Logged in!";
            header("Location: https://www.google.com");
          }else{
            header("Location: login.php?error=Incorrect username or password");
            exit();
          }
        }else{
          header("Location: login.php?error=Incorrect username or password");
        }
      }
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
    <style>
        .error{
            color: red;
            font-size: 14px;
        }
        </style>

    <title>Login | Mindful Moments</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <?php if(isset($_REQUEST['error'])){ ?>
          <p class="error"><?php echo $_REQUEST['error']; ?></p>
        <?php } ?>
        <form method="GET">
          <div class="user-box">
            <input type="text" name="username" id="username" required>
            <label for="username">Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" id="password" required>
            <label for="password">Password</label>
          </div>
          <input class="submit" type="submit" value="Submit" id="submit">
        </form>
        <p class="bth">
            <a href="../index.php" style="text-decoration: none;">
                Back to Home
            </a>
        </p>
      </div>
</body>
</html>