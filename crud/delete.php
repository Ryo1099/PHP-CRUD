<?php 
include("../dbcon.php");

    if(isset($_GET['id'])&& !empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        if($result == true){
            header("Location:../home.php?message=Successfully Deleted!");
        } else {
            header("Location:../home.php?message=Something went wrong.");
        }
    }
?>