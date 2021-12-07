<?php
 include ('connect.php');
 if (!empty($_POST['email'])){
	$fname =  $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
    $password = $_POST['password'];
	
	$stmt = $db->prepare("INSERT INTO registration (fname, lname, email, password) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $f, $l, $e, $pass);

	// set parameters and execute
	$f = $fname;
	$l = $lname;
    $e =$email;
	$pass = MD5($password);
	
	if(!$stmt->execute()) echo "<span style='color:red'>Error while saving record</span>";
	else 
    $_SESSION['login_user'] = $email;
         header("location: Welcome.php");
	
	
  }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="istant.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   

    <style>
        h1 { 
            text-align: center;
            
        }
        body {font-family: Arial, Helvetica, sans-serif;
            background-image:url("pexels-veeterzy-303383.jpg");
        }
        form {
            font-family: sans-serif;
            align-items: center;
            border: 2px solid #f1f1f1;
            
            background-image:url("pexels-veeterzy-303383.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        
        }
        
        input[type=text], input[type=password] ,input[type=email]{
          width: 25%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid black;
          box-sizing: border-box;
          background: transparent;
          text-align:center;
          }

          .container{
              text-align: center;
              padding: 16px 15px;
          }
  
          form{
              color: white;
              background-color:white;
            
          }
        </style>
    <title>Register</title>
</head>
<body >
    <div class="container">
    <form <?php echo $_SERVER['PHP_SELF'];?> method="post">
        <h1>Register</h1>
        <div class="imgcontainer">
          <img src="icons8-contacts-100.png" alt="avatar" class="Avatar">
        </div>

        <div class="container">
        <label for="fname">First name</label><br>
            <input type="text" required name="fname" class="form form-control" placeholder="Enter Firstname">
            <br>
        <label for="lname">Last name</label><br>
            <input type="text" required name="lname"  class="form form-control" placeholder="Enter Lastname">
            <br>
        <label for="email">Email</label><br>
            <input type="email" required name="email" class="form form-control" placeholder="Enter Email">
            <br>
        <label for="password">Password</label><br>
            <input type="password" required name="password"  class="form form-control" placeholder="Enter password">
            <br>
        <label for="checkbox">Remember me</label><br>
            <input type="checkbox" name="checkbox">
        </div>
        <div class="btncontainer">
        <button class="btn btn-primary" type ="submit">Sign up</button><br>
        Already have an account? <a href="Login.php">Login</a>
       </div>
       <div class="cancel">
           <button  class="btn btn-danger" type="reset">cancel</button>
       </div>
       
       
    </form>
    </div>
    


</body>
</html>