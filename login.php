<?php 
 session_start();
 if(isset($_SESSION['uid'])) {
    header("Location:cadmin.php");
 } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
         }
        body{
            font-family:Arial;
            background:#17a2b8;
            }
        .container{
            background:#120b1F;
            max-width:350px;
            margin:auto;
            padding:20px;
            text-align:center;
            margin-top:50px;
            color:#fff;
            border-radius:15px;
        }
        .input-container{
            display:flex;
            display:-ms-flexbox;
            width:100%;
            margin-bottom:20px;
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
            padding:10px;
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
    </style>
</head>
<body>
             <div class = "container">
                  <form action="login.php" method="POST">
                     <h2>Login Page</h2>
                     <hr>
                     <br>

                     <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input type ="text" class ="input-field" name="uname" placeholder ="Username" required>
                     </div><!-- input-container -->

                    <!--  <div class="input-container">
                         <i class="fa fa-envelope icon"></i>
                         <input type ="email" class ="input-field"  placeholder ="Email" required>
                    </div>< input-container --> 

                     <div class="input-container">
                          <i class="fa fa-key icon"></i>
                          <input type ="password" class ="input-field" name="password" placeholder ="Password" required>
                     </div><!-- input-container -->

                     <button class ="btn" type="submit" name="login">Login</button>

                 </form>

            </div><!-- container -->
    
</body>
</html>
<?php
// check user from database
include 'dbcon.php';
       if(isset($_POST['login'])) {
              $username = $_POST['uname'];
              $pwd = $_POST['password'];
                // sql for take data from admin database 
                  $sql = "SELECT * FROM admin WHERE username='$username' AND pwd='$pwd';";
                  $result = mysqli_query($con,$sql);
                  $row = mysqli_num_rows($result); // $row = 1 for every match  

                        if(!$row>0) {
                                      ?>
                            <script>
                                  alert('Enter Correct Username And Password');
                                 // window.open('login.php','_self');
                            </script>
                  <?php

                       } else {
                                   $data = mysqli_fetch_assoc($result);
                                   $id = $data['id'];
                                   session_start();
                                   $_SESSION['uid'] = $id;
                                   header("Location:cadmin.php");
                              }

                                    }                
                 ?>
