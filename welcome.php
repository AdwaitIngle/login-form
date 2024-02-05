<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/welcome.css">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
      <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="index.css">
     <title>Admin Dashboard</title>

 </head>
 <body>
     <!-- Sidebar -->
     <div class="sidebar">
         <h1>Admin Dashboard</h1>
         <ul>
             <li><a href="#">Dashboard</a></li>
             <li><a href="#">Posts</a></li>
             <li><a href="#">Category</a></li>
             <li><a href="#">Media</a></li>
             <li><a href="#">Users</a></li>
             <li><a href="#">Settings</a></li>
         </ul>
         <button id="btn-logout"><a href="/php%20files/form/logout.php">Logout</a></button>
     </div>
 
     <div class="container">
    <div class="card">
        <div class="card-header">
            Card 1
        </div>
        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" alt="Image 1" class="card-image">
        <div class="card-content">
            <p>Card 1 content goes here.</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Card 2
        </div>
        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" alt="Image 2" class="card-image">
        <div class="card-content">
            <p>Card 2 content goes here.</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Card 2
        </div>
        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" alt="Image 2" class="card-image">
        <div class="card-content">
            <p>Card 2 content goes here.</p>
        </div>
    </div><div class="card">
        <div class="card-header">
            Card 2
        </div>
        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" alt="Image 2" class="card-image">
        <div class="card-content">
            <p>Card 2 content goes here.</p>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            Card 2
        </div>
        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" alt="Image 2" class="card-image">
        <div class="card-content">
            <p>Card 2 content goes here.</p>
        </div>
    </div><div class="card">
        <div class="card-header">
            Card 2
        </div>
        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" alt="Image 2" class="card-image">
        <div class="card-content">
            <p>Card 2 content goes here.</p>
        </div>
    </div><div class="card">
        <div class="card-header">
            Card 2
        </div>
        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" alt="Image 2" class="card-image">
        <div class="card-content">
            <p>Card 2 content goes here.</p>
        </div>
    </div><div class="card">
        <div class="card-header">
            Card 2
        </div>
        <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8M3x8fGVufDB8fHx8fA%3D%3D&w=1000&q=80" alt="Image 2" class="card-image">
        <div class="card-content">
            <p>Card 2 content goes here.</p>
        </div>
    </div>
    </div>
      

 </body>
 </html>
  
  </body>
</html>