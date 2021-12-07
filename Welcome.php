<?php
   include('connect.php');
   session_start();
   if (empty($_SESSION['login_user'])) header("location:login.php");
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($db,"select email from registration where email = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['email'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Welcome</title>
    <style>
      .alert{
          margin: 200px;
      }
      body{
          background: url("pexels-karolina-grabowska-4968380.jpg");
          background-repeat:no-repeat ;
          background-size: cover;
          background-attachment: fixed;
      }
    </style>
</head>
<body>
    <div class="container">

<div class="alert alert-primary" role="alert">
    <strong>Welcome <?php echo $login_session;?>  </strong>
    <p>Do yo wish to apply for a loan?</p>
    <a href="Validation.php" class=" btn btn-success">Yes</a>
    <a href="logout.php" class="btn btn-danger">Log out</a>
   
</div>
    </div>
    
</body>
</html>