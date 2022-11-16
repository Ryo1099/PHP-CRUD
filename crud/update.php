<?php
include("../dbcon.php");

    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];

        $sql = "UPDATE users SET username='$username',password='$pass',name='$name' WHERE id='$id'"; 

        $result = mysqli_query($con, $sql);

        if ($result == true) {
            header("Location:../home.php?message=Successfully Updated!");
        }else{
            header("Location:../home.php?message=Something went wrong.");

        }

    } 

    if (isset($_GET['id'])) {

        $id = $_GET['id']; 

        $sql = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);  

    if ($count > 0) {        

        while ($row = mysqli_fetch_assoc($result)) {

            $username = $row['username'];
            $pass = $row['password'];
            $name = $row['name'];
            $id = $row['id'];

} 

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <div class="mx-auto my-auto w-50">
        <h2>User Update Form</h2>

        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $id?>" >
            <div class="row">
                <div class="form-group mt-3 col">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter Name" value="<?php echo $name?>" required>  
                </div>
                <div class="form-group mt-3 col">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username" value="<?php echo $username?>" required>  
                </div>
            </div>
        
            <div class="form-group mt-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" value="<?php echo $pass?>" required>
            </div>
        
            <input type="submit" value="submit" name="update" class="btn btn-primary mt-3">

        </form> 
    <div>

</body>

</html> 

<?php

    } else{ 

        header('Location: ../home.php');

    } 

    }

?> 