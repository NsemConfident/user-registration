<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
    include 'db.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    // $sql = "INSERT INTO registration (username, password)
    // VALUES ('$username', '$password')";


    // if (mysqli_query($conn, $sql)) {
    //     echo "  and New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
    
    // mysqli_close($conn);


    $sql = "SELECT * FROM registration WHERE username='$username'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {

  echo " and user already exist";

} else {
    $sql = "INSERT INTO registration (username, password)
    VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "  and New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
$conn->close();

}
?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>

        <h1 class="text-center mt-2">signup form</h1>
        <div class="container mt-5">
        
            <form action="sign.php" method="post">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter user name" name="username">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>