<?php 
 session_start();
    if(isset($_SESSION['uid'])) {
         echo "";
    } else {
         header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
         *{
            box-sizing:border-box;
        }
        body{
            font-family:Arial;
            background:#6c757d;
        }
        .container{
           
            max-width:400px;
            background:darkslateblue;
            padding:50px;
            text-align:center;
            margin-top:200px;
            color:floralwhite;
            border-radius:15px;
            margin:auto;
          
        }
        .input_outer{
           
            display:flex;
            display:-ms-flexbox;
            width:100%;
            margin-bottom:20px;
            padding:10px;
            
        }
        .l{
            color:darkgrey;
            padding:10px;
            width:100%;
            text-decoration:none;
            font-family:Arial;
            font-size:20px;
            border:2px solid #ccc;
        }

        .l:hover{
            color:coral;
        }
        h1:hover{
            color:greenyellow;
        }
    </style>
</head>
<body>
    <div class="container">
            <h1>Admin Dashboard</h1>
    
              <div class="input_outer">
                   <a href="attendence.php" class="l"></i>ATTENDENCE</a>
              </div><!-- input_outer" -->
             
              <div class="input_outer">
                  <a href="addstudent.php" class="l">ADD NEW STUDENT</a>
              </div><!-- input_outer" -->

              <div class="input_outer">
                  <a href="attendence.php" class="l">UPDATE STUDENT</a>
              </div><!-- input_outer" -->

              <div class="input_outer">
                  <a href="logout.php" class="l">LOGOUT</a>
              </div><!-- input_outer" -->
     
             <div class="input_outer">
                  <a href="index.php" class="l">BACK</a>
             </div><!-- input_outer" -->

    </div><!-- container -->
    
</body>
</html>
