<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/signup.css">
    <link rel="icon" href="./assets/icon2.png">
    <title>SignUp</title>
  </head>
  <body>
  
    <?php
    if($showAlert){
    echo ' <div class="alert-success" role="alert">
        <strong id="correct">Success!</strong> Your account is created
    </div> ';
    }
    if($showError){
    echo ' <div class="alert-error" role="alert">
        <strong id ="failed">Error!</strong> Passwords do not match
    </div> ';
    }
    ?>
    <!-- <nav id="header">
    <img id="netflix-logo" src="./assets/Netflix-Logo.png" alt="">
    <button id="btn-signin">Sign in</button>
    </nav> -->
    <div class="form-container">
     <h1 class="text-center">Signup</h1>
     <form action="/php%20files/form/signup.php" method="post">
        <div class="form-group">
            <input id="username" type="text" maxlength="25" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username">
            
        </div>
        <div class="form-group">
            <input id="password" type="password" maxlength="23" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input id="cpass" type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
            <!-- <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small> -->
        </div>
         
        <button id="btn-submit" type="submit" class="btn btn-primary">SignUp</button>
        <span><p id="protect">This page is protected by Google reCAPTCHA to ensure you're not a bot. <a id="learn" href="">Learn more.</a></p></span>
        
     </form>
    </div>

   
  </body>
</html>