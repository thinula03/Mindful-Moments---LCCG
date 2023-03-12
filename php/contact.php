<?php
    $conn = mysqli_connect("localhost", "root", "root", "contactdb");

    if(!$conn){
        echo "Connection error: " . mysqli_connect_error();
    }

    if(isset($_REQUEST['submit'])){
        $uname = $_REQUEST['uname'];
        $uemail = $_REQUEST['uemail'];
        $ucomment = $_REQUEST['ucomment'];

        $sql = "INSERT INTO contact(uname, uemail, ucomment) VALUES('$uname', '$uemail', '$ucomment')";

        mysqli_query($conn, $sql);
        header("Location: index.php");
        exit();
    }
?>