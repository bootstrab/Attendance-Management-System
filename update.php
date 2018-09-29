<?php
include 'dbcon.php';
?>
<?php
   if(isset($_GET['upd'])) // TAKE URL PARAMETER VALUE 
   {
       $id = $_GET['upd'];
       $query ="SELECT * FROM student WHERE rollno = $id";
       $fire = mysqli_query($con, $query);
       $user = mysqli_fetch_assoc($fire);

   }
?>
<!-- update -->
        <?php 
             if(isset($_POST['update'])) //TAKE VALUE FROM FORM AND UPDATE IN DATABASE
                  {
                     $name = $_POST['name'];
                     $rollno = $_POST['roll'];
                     $branch = $_POST['branch'];
                     $pcontact = $_POST['pcontact'];
                     $query ="UPDATE student SET name = '$name', rollno ='$rollno', branch='$branch', pcontact='$pcontact' WHERE rollno = $id";
                     $fire = mysqli_query($con, $query);

                     if($fire) header("Location:index.php");
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
        a{
            width:100%;
            text-decoration:none;
        }
        </style>
</head>
<body>
        <h1 style="text-align:center">Update Student Detail</h1>
        <div class = "container">
                  <form action = "<?php $_SERVER["PHP_SELF"] ?>" method ="POST">
                     <h2>UPDATE</h2>
                     <hr>
                     <br>

                     <div class="input-container">
                            <!--<i class="fa fa-user icon"></i>-->
                            <input type ="text" name = 'name' class ="input-field" placeholder ="Name" value ='<?php echo $user['name']; ?>'  required>
                     </div><!-- input-container -->

                     <div class="input-container">
                             <!--<i class="fa fa-envelope icon"></i>-->
                             <input type ="text" name ='roll' class ="input-field" placeholder ="Roll Number" value ='<?php echo $user['rollno']; ?>' required>
                     </div><!-- input-container -->

                     <div class="input-container">
                             <!--<i class="fa fa-key icon"></i>-->
                             <input type ="text" name ='branch' class ="input-field" placeholder ="Branch" value ='<?php echo $user['branch']; ?>' required>
                     </div><!-- input-container -->

                     <div class="input-container">
                             <!--<i class="fa fa-key icon"></i>-->
                             <input type ="text" name ='pcontact' class ="input-field" placeholder ="Phone Number " value ='<?php echo $user['pcontact']; ?>' required>
                      </div><!-- input-container -->


                      <input name="update" class="btn" value = "update" type= "submit">
            
                  </form>

                    <a href="cadmin.php"><button class ="btn" >BACK</button></a>

        </div><!-- container -->
</body>
</html>
