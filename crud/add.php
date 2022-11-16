<?php 
include("../dbcon.php");

    $username = $_POST['username'];
    $password = $_POST['pass'];
    $name = $_POST['name'];

    if(!empty($username) && !empty($password) && !empty($name) ){
        $sql = "INSERT INTO users(username,password,name) VAlUES ('$username', '$password', '$name')";
        $result = mysqli_query($con, $sql);
        if($result == true){
            header("Location:../home.php?message=Successfully added!");
        } else {
            header("Location:../home.php?message=Something went wrong.W");
        }
    }
?>