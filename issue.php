<?php 
include("connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
$email = mysqli_real_escape_string($db,$_POST['email']);
$id = mysqli_real_escape_string($db,$_POST['id']);
$salary = mysqli_real_escape_string($db,$_POST['salary']);
$indebt = mysqli_real_escape_string($db,$_POST['indebt']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>welcome<h1>
    <?php 
   
   $sql = "SELECT salary FROM loans WHERE email = '".$email."' ";
   $result = mysqli_query($db,$sql);

   if($result=="Less than 5,000"){
       echo "You quaify for a loan of 1000 and below";
   }
   elseif($result =="5,001 ~ 10,000"){
       echo "You qualify for a loan of 4000 and below";
   }
   elseif($result == "10,001 ~ 15,000"){
    echo "You qualify for a loan of 10000 and below";
   }
   elseif($result== "15,000 ~ 25,000"){
    echo "You qualify for a loan of 14,000 and below";
    }
    elseif($result== "above 25,000"){
        echo "You qualify for a loan of 14,000 and below";
        }
     



     ?>
    
</body>
</html>