<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMS</title>
<style>
        *{
            box-sizing:border-box;
        }
        body{
            font-family:Arial;
            background:#aaa;
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
         <h1 style="text-align:center">Add New Student</h1>
         <div class = "container">
                <form action="add.php" method="POST">
                     <h2>Add Student</h2>
                     <hr>
                     <br>

                       <div class="input-container">
                           <!--<i class="fa fa-user icon"></i>-->
                           <input type ="text" class ="input-field" name="rollno" placeholder ="Roll Number" required>
                       </div><!-- input-container -->

                       <div class="input-container">
                           <!--<i class="fa fa-envelope icon"></i>-->
                           <input type ="text" class ="input-field" name="name" placeholder ="Name" required>
                       </div><!-- input-container -->

                       <div class="input-container">
                            <!--<i class="fa fa-key icon"></i>-->
                            <input type ="text" class ="input-field" name="branch" placeholder ="Branch" required>
                       </div><!-- input-container -->
                       <div class="input-container">
                            <!--<i class="fa fa-key icon"></i>-->
                            <input type ="text" name ='pcontact' class ="input-field" placeholder ="Phone Number "  required>
                       </div><!-- input-container -->


                       <button class ="btn" type="submit" name="submit">ADD</button>

               </form>
                       <a href="cadmin.php"><button class ="btn" >BACK</button></a>

         </div><!-- container -->
    
</body>
</html>
