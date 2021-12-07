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
    <style>
        body{
            background-image: url("pexels-quintin-gellar-313782.jpg");
            background-repeat:no-repeat;
            background-size: cover;
            background-attachment: fixed;

        }
       h1{
           font-size: 80px;
           color: #ff00f2;
           text-align: center;
           background: rgb(0,0,0,0.5);
           margin: 60px;
           
    

       }
       h2{
           font-size: 40px;
           color: burlywood;
           text-align: center;
       }
       .topnav{
           background-color:transparent;
           padding:32px 32px;
           float: center;
           position: absolute;
           top: 5%;
           left: 50%;
           transform: translate(-50%, -50%);
           
       }
       /*change color to links on hoover*/
       .topnav a:hover {
           background-color: #ddd;
           color: black;
           
       }

    
       /*Add clolor to active link*/
       .topnav a.active {
          background-color: #04AA6D;
          color: white;
       }

       /*styled sheets inside the navigation bar */
       
       .topnav a {
           float: left;
           color: #f2f2f2;
           text-align: center;
           padding: 14px 16px;
           text-decoration:none;
           font-size: 17px;
           background-color: lightsteelblue;
      }
       .p{
           font-size: 20px;
           color: cornsilk;
           text-align: center;
          
       }
       p {
    color: cornsilk;
}

       .trasparentimage{
           position:relative;
           top: 10;
           background: rgb(0,0,0);
           background: rgba(0,0,0,0.5);
           padding: 20px;
           text-align: center;
           margin: 0 60px 0 60px;

       }
       .rowbackground {
    position: relative;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5);
}
    .rowbackground{
        margin-bottom: 20px;
    }
     .btn{
         padding: 50px;
         margin:60px 60px 60px 60px;
         font-weight: 400;
         font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         font-size: larger;
     }

    </style>
    <title>Home</title>
</head>
<body>
<img src="https://assets.entrepreneur.com/content/3x2/2000/20200406144106-GettyImages-1023100020.jpeg" width="50px" height="50px">
    <div class="topnav">
        <a class ="active" href ="Home.html">Home</a>
        <a href="Register.php">Register</a>
        <a href="login.php">Log in</a>
        <a href="contactus.php">Contact us</a>
    </div>
    
        <h1>Welcome To Instant Loans</h1><br>

      <div class="trasparentimage">
        <h2>Trending</h2>
        <div class= "p" >
            <p>
           We have changed our location and the and The Instant Loans Organization is now located  at 
           Mungoma street, Cherry house building on the third floor.
           </p>
        </div> 
      </div>  

      <style>
          /*
      <div class="slides">

          <div class="mySlides">
              <div class="numbertext">1/4</div>
              <img src="fevent.jpg" style="width: 100%;">
          </div>

          <div class="mySlides">
            <div class="numbertext">2/4</div>
            <img src="officials.jpg" style="width: 100%;">
        </div>

        <div class="mySlides">
            <div class="numbertext">3/4</div>
            <img src="fevent.jpg" style="width: 100%;">
        </div>
        <div class="mySlides">
            <div class="numbertext">4/4</div>
            <img src="officials.jpg" style="width: 100%;">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption_container">
            <p id="caption"></p>
        </div>

    
         
      </div>
      */
      </style>
    


    <div class="rowbackground">
      <h2><B>A financial partner for the Long term</B></h2>

     <div class="row">
          <div class="col-sm-3">
              <h2>Double your limit in two months</h2>
             <p> Limits grow up to KSh 30,000 to meet your needs. Most customers' limits double in two months and quadruple in six months.</p>
          </div>
          <div class="col-sm-3">
              <h2>Fair, transparent rates as low as 5%</h2>
              <p>We charge one flat fee with every loan. You’ll always know what you owe with instant loans.</p>
          </div>
          <div class="col-sm-3">
              <h2>Always private and secure</h2>
              <p>Your contacts and other information are always private and protected.</p>
          </div>
          <div class="col-sm-3">
              <h2>Customer service that cares</h2>
              <p>We’re always here to help. Our average response time is less than five hours.</p>
           </div>
        </div>
      </div>
          <div class="d-flex justify-content-center" >
      <a href="login.php" class="btn btn-primary btn-lg  " ><b>Get Loan</b></a>
          </div>
     
</body>
</html>