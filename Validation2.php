<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="istant.css">
    <title>Document</title>

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
    <div class="container border border-success">
    <Form class="row col-md-4 col-md-offset-4 align-items-center container"<?php echo $_SERVER['PHP_SELF'];?> method="post" >
    <h1><b>Instant Loans</b></h1>
        <label>Please select your marital status</label>
        <div class="checkbox" required >
        <label class="checkbox-inline"> <input type="checkbox" value="" > Single </label>
        </div>
        <div class="checkbox">
        <label class="checkbox-inline"> <input type="checkbox"  value=""> Married </label>
        </div>
        <label>Please select employment details</label></br>
        <select class="form_control" id="sel4">
            <option>Employed</option>
            <option>Self -Employed</option>
            <option>Unemployed</option>
        </select>
        
        <label>Please select residental status</label></br>
        <select class="form_control" id="sel5">
            <option>Rented</option>
            <option>Owned</option>
            <option>Living with parents</option>
            <option>Mortgaged</option>
            <option>Employer provided</option>
            <option>other</option>
        </select>
        <label>Personal Email</label></br>
        <input  type="email" name="email" class="form_control" required></br>
        <label>Please select your pay day</label></br>
        <input type="number" min="1" max="31" name="payday" class="form_control"></br>
        <div class="d-flex justify-content-center" >
        <a href="Validation.php" class="btn btn-primary btn-lg" >Back</a>
        <Button class="btn btn-primary btn-lg" type= "submit">Next</a>
        </div>
        
    </Form>
    </div>
    
</body>
</html>