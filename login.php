<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: welcome.php");
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="./css/login.css">

    <title>Login</title>
  </head>
  <body>
    <?php
    if($login){
    echo ' <div class="alert-success" role="alert">
        <strong id="success">Success!</strong> You are logged in
    </div> ';
    }
    if($showError){
    echo ' <div class="alert-error" role="alert">
        <strong id="failed">Error!</strong> Invalid Credentials
    </div> ';
    }
    ?>

    <div class="form-container">
     <h1 class="text-center">Sign In</h1>
     <form action="/php%20files/form/login.php" method="post">
        <div class="form-group">
            <input id="username"type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Email or phone number">
            
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        
        <button id="btn-submit" type="submit">Sign In</button>
            <p id="protect">This page is protected by Google reCAPTCHA to ensure you're not a bot. <a id="learn" href="">Learn more.</a></p>
            
        </span>
        </form>
    </div>

  </body>
</html>