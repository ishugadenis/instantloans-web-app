<?php
require ("connect.php");
if(!empty($_POST['email'])){
    $email =$_POST['email'];
    $id =$_POST['id'];
    $salary =$_POST['salary'];
    $indebt =$_POST['indebt'];

$query="insert into loans(email,id,salary,indebt) values('$email','$id','$salary','$indebt')";
 $stmt = $db->prepare("INSERT INTO loans (email, id, salary, indebt) VALUES (?, ?, ?, ?)");
 $stmt->bind_param("ssss", $e, $i, $s, $ind);
mysqli_query($db,$query);
$e =$email;
$i= $id;
$s = $salary;
$ind = $indebt;


if(!$stmt->execute()) echo "<span style='color:red'>Error while saving record</span>";
	else {
        $_SESSION['log_user'] = $email;
        header("location: issue.php");
   
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="istant.css">
    <title>Validation</title>
</head>
<style>
       
    body{
        background-image:url("pexels-juan-pablo-serrano-arenas-1242348.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    .form_control{
        border:none;
        outline:none;
        border-bottom:1px solid black;
        margin-bottom: 16px;
        background-color: transparent;
    }
    h1{
        color: beige;
    }
    .btn{
        margin-left: 20px;
        
    }
</style>

<body>
    <div class="container border border-primary">
<form class=" row col-md-4 col-md-offset-4 p-8 align-items-center container" <?php echo $_SERVER['PHP_SELF'];?> method="post">
    <h1><b>Instant Loans</b></h1>
    <label>Enter First name</label><br>
    <input type="text" placeholder="Firstname" required name="fname" class="form_control"><br>
    <label>Enter Last name</label><br>
    <input type="text" placeholder="Lastname" required  name="lname " class="form_control"><br>
    <label>Personal Email</label></br>
        <input  type="email" name="email" class="form_control" required></br>
    <label>Enter National ID Number</label><br>
    <input type="ID" placeholder="ID Number" name="id" class="form_control"><br>
    <label>Please select your date of birth</label><br>
    <input type="date" placeholder="Date of birth" required name="dob" class="form_control"><br>
    <label>Please select your education level</label><br>
    <select class="form_control" id="sel1">
    <option>Primary school and below</option>
    <option>High school</option>
    <option>Certificate</option>
    <option>Graduate</option>
    <option>Diploma</option>
    <option>Post Graduate/Proffesional</option>
    </select>
    <label>Please select your monthly income</label><br>
    <select class="form_control" name="salary" id="sel2">
        <option>Less than 5,000</option>
        <option>5,001 ~ 10,000</option>
        <option>10,001 ~ 15,000</option>
        <option>15,000 ~ 25,000</option>
        <option>above 25,000</option>
    </select>
    <label>Do you have any outstanding loan</label><br>
    <select class="form_control" name="indebt" id="sel3">
        <option>Yes</option>
        <option>No</option>
    </select>
    <div class="d-flex justify-content-center" >
    <a href="Welcome.php" class="btn btn-success  btn-lg">Back</a>
    <Button class="btn btn-success  btn-lg" type="submit">Next</a>
    
    
    </div>
</div>

</form>

    
</body>
</html>