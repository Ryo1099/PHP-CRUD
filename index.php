<html>
<head>
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="w-25 mx-auto my-auto">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control mt-3"  name="pass" id="pass" placeholder="Password" required>
            </div>
            <input type="submit" value="submit" class="btn btn-primary mt-3">
        </form>
    </div>
    
 
</body>

</html>