<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    <title>AMS</title>
    <style>
        .header{
           
            background:mediumseagreen;
            height:160px;
            border:2px solid #000;

        }
        *{
            box-sizing:border-box;
        }
        body{
            font-family:Arial;
            background:lightblue;
        }
        .container{
            margin:80px;
            
            background:#120b1F;
            max-width:350px;
            margin:auto;
            padding:10px;
            text-align:center;
            margin-top:5px;
            color:#fff;
            border-radius:15px;
        }
        .input-container{
            display:flex;
            display:-ms-flexbox;
            padding:10px;
        }
        .icon{
            padding:10px;
            background:dodgerblue;
            color:#fff;
            min-width:50px;
            text-align:center;
        }
        .input-field{
            width:100%;
            outline:none;
            padding:15px;  
        }
        .input-field:focus{
            border:2px sodid dodgerblue;
        }
        .btn{
            background:dodgerblue;
            color:#fff;
            padding : 15px 20px;
            border:none;
            cursor:pointer;
            width:100%;
            margin-bottom:50px;
            border-radius:15px;
        }
        .btn:hover{
            background:orangered;
        }
        .main-button{
    
            position:fixed;
            top:220px;
            right:100px;
            background-color:dodgerblue; /* Green */
            border: none;
            color: white;
            padding:30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 22px;
            cursor: pointer;
        }
        .main-button:hover{
            color:red;
        }
        #main_image{
            position:absolute;
            top:190px;
            margin:auto;

        }

    </style>
</head>
<body>
<div class ="header">
 <h1 style="text-align:center">Attendence Management System</h1>
 <h3 style="text-align:center"><strong >THDC-IHET COLLEGE</strong></h3>
 <h4 style="text-align:center">Attendence Portal</h4>
<div>
    <!-- FORM FOR ENTER STUDENT TO SHOW ITS DETAIL -->

    <div class = "container"> 
        <form action="showdetails.php" method="POST">
               <h2>Enter Student Detail</h2>
                 <hr> <br>

            <div class="input-container">
                 <!-- <i class="fa fa-user icon"></i> -->
                  <input type ="text" class ="input-field" name="name" placeholder ="Student name" required>
            </div><!-- input-container -->

            <div class="input-container">
                   <!-- <i class="fa fa-envelope icon"></i> -->
                    <input type ="text" class ="input-field" name="branch" placeholder ="Day-Month-Year(12-03-2018)" required>
            </div><!-- input-container -->

            <div class="input-container">
                   <!-- <i class="fa fa-key icon"></i> -->
                    <input type ="password" class ="input-field"name="rollno" placeholder ="Roll Number" required>
            </div><!-- input-container -->

           <a href="showdetails.php"> <button class ="btn" type="submit" name="showdetails">Check Detail</button></a>

        </form>

    </div><!-- container -->

     <div id="main_image">
          
          <img src="image/main_image.jpg" alt="College Image" style="width:300px;height:300px;"> 

     </div><!-- main_image -->

    <div class="main-button">
         <a href="login.php"><button type="button" class="main-button">ADMIN LOGIN</button></a>
    </div><!-- Admin Login -->

    <div>
       <marquee> <h5>This website is <strong>copyright</strong> &copy in 2018</h5> </marquee>
    </div>

</body>
</html>
