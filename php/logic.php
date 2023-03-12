<?php
 $conn = mysqli_connect("localhost", "root", "root", "blogdb");

 if(!$conn){
    echo "Connection error: " . mysqli_connect_error();
 }

 if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];
    $image = $_REQUEST['image'];

    $sql = "INSERT INTO data(name, email, comment, image) VALUES('$name', '$email', '$comment', '$image')";

    mysqli_query($conn, $sql);
    header("Location: create.php");
    exit();
 }
?>