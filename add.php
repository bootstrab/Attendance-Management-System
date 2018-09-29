<?php 
include 'dbcon.php';
    if(isset($_POST['submit'])) {
         $rno = $_POST['rollno'];
         $name = $_POST['name'];
         $branch = $_POST['branch'];
         $pcontact = $_POST['pcontact'];

           // inset data into database 

             $sql = "INSERT INTO student (rollno,name,branch, pcontact)
                       VALUES ('$rno','$name','$branch', '$pcontact')" ;
             $result = mysqli_query($con,$sql);
    
         if($result) {
           ?>
                 <script>
                     alert('data inserted successfully');                
                 </script>

           <?php
               header("Location:cadmin.php?sucess");
       } else {
               echo "data is not submitted";
              }
                                   }

?>
