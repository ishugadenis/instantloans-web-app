<?php
require("connect.php");//connect to the database
session_start();
   $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form using POST method
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
	  $password = md5($password);      
      $sql = "SELECT user_id FROM registration WHERE email = '".$email."' and password = '".$password."'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {//login successful
         $_SESSION['login_user'] = $email;
         header("location: Welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="istant.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<style>
        h1 { 
            text-align: center;
            
        }
        body {font-family: Arial, Helvetica, sans-serif;
            background-image:url("pexels-veeterzy-303383.jpg");}
        form {border: 3px solid #f1f1f1;
            background-image:url("pexels-veeterzy-303383.jpg");
            background-size: cover;
            color: white;
        
        }
        
        input[type=text], input[type=password] ,input[type=email]{
          width: 25%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid black;
          box-sizing: border-box;
          text-align:center;
          background-color: transparent;
          
        }
        </style>
<title>User Login</title>
</head>

<body>
<div class= "container"> 
  
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<h1>Log in</h1>
        <div class="imgcontainer">
        <img src="icons8-contacts-100.png" alt="avatar" class="Avatar">
        </div>
        <div class="container">
        <span style="color:red"><?php echo $error?></span>
            <label for="Email">Email</label><br>
            <input type="email", class="form form-control" name="email"  required placeholder="Enter email"><br>
            <span></span>
            <label for="password">password</label><br>
            <input type="password", name="password" class="form form-control" required placeholder="password"><br>
            
            <div class="btncontainer">
                <button class="btn btn-primary btn-md" type="submit">Log in</button>
            </div>
           <div id="left"
               > Forgot password?<br>
           </div>
            Dont have an account?
            <a href="Register.php">click here</a>
        </div>
       
</div>
</form>
</div>

</body>
</html>

