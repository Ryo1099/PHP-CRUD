<?php 
include("dbcon.php");

    $username = $_POST['username'];
    $password = $_POST['pass'];

    if(!empty($username) && !empty($password)){
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){  
        header("Location:home.php");
        }  
        else{  
            echo "<h1> Login failed. </h1>";  
        }   

    }
?>