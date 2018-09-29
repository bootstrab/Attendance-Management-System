<?php 
include 'dbcon.php';
?>
<?php
   if(isset($_GET['del']))
   {
       $id = $_GET['del'];
       $query = "DELETE FROM student WHERE id = $id";
       $fire = mysqli_query($con, $query);
       if($fire) 
       { header('Location:attendence.php');?>
           <script>
           alert("Data is delete:");
           window.open("attendence.php");
           </script>

     <?php  }
   }
?>
