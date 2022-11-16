<html>
<head>
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="w-25  mx-auto my-auto">
      <h2>HOME</h2>  
      <div>
        <h5>Add</h5>
        <form action="crud/add.php" method="POST">
            <div class="row">
                <div class="form-group mt-3 col">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Enter Name" required>  
                </div>
                <div class="form-group mt-3 col">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username" required>  
                </div>
            </div>
        
            <div class="form-group mt-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control"  name="pass" id="pass" placeholder="Password" required>
            </div>
        
            <input type="submit" value="submit"  class="btn btn-primary mt-3">

        </form>
      </div>
    </div> 
      <div class="w-50 my-auto mx-auto">
          <table class="table table-bordered table-dark table-hover">
          
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
          
                <?php 
                    include ("dbcon.php");
                    
                    $sql = "SELECT id, username, name FROM users";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$row['id']. "</td>";
                        echo "<td>".$row['username']. "</td>";
                        echo "<td>".$row['name']. "</td>";
                        echo '<td><a class="btn btn-success "href="crud/update.php?id='. $row['id'] .'"> update</a> <a class="btn btn-danger" href="crud/delete.php?id='.$row['id'].'"> delete</a></td>';
                        echo "</tr>";
                    }
                    
                
                ?>
                
          </table>
      </div>
    
</body>
</html>