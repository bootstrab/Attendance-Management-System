<?php 
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
       table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }
      td, th {
             border: 1px solid #dddddd;
             text-align: left;
             padding: 8px;
             }
      tr:nth-child(even) {
              background-color: #dddddd;
                        }
    .in{
               
               width:25%;
               background:dodgerblue;
               color:black;
               position:fixed;
               top:20px;
               left:1000px;
               padding:20px;
               font-size:22px;
               font-weight:bold;
         }
   
         .in:hover{
             color:white;
             background:black;
         }
         a{
             text-decoration:none;
             color:black;
             font-weight:bold;
         }
         a:hover{
            color:orange;
         }
         .view{
            text-decoration:none;
             color:black;
             font-weight:bold;
             border: 2px solid black;
             background:#ccc;
             padding:10px;
         }
         .view:hover{
             color:mediumseagreen; 
             background:green;
         }
</style>
<body>
   <h1 style="text-align:center;">Attendence Management System</h1>
   <a  class ="view" href = "view.php">VIEW</a>
   <div>
   <!-- FORM START -->
    <form method="POST">
       <table>
         <tr>
            <th>Rollno</th>
            <th>Name</th>
            <th>Status</th>
            <th>Phone Number</th>
            <th>Update</th>
            <th>Delete</th>
         </tr>
       <?php
         include 'dbcon.php';
            $sql = "SELECT * FROM student ;";
            $result = mysqli_query($con,$sql);
                       
            $count=0;
            while($data = mysqli_fetch_assoc($result)) {
            $count++;
        ?> 
            <tr>
              <td><?php echo $data['rollno'] ?></td>              
              <td><?php echo $data['name']; ?></td>

              <td><input type="radio" name="att[<?php echo $data['rollno']; ?>]" value="present" >Present
                   
              <input type="radio" name="att[<?php echo $data['rollno']; ?>]" value="absent" >Absent</td>

              <td><?php echo $data['pcontact']; ?></td>
              <td><a href="update.php?upd=<?php echo $data['rollno']; ?>">Update</a></td>
              <td><a href="delete.php?del=<?php echo $data['rollno']; ?>">Delete</a></td>
            </tr>
            <?php } ?>
            <input class="in" type="submit" name="submit" value="submit">
            <h1>Total number of students <?php echo $count; ?></h1>
            <h3>Date <?php echo date('d-m-Y') ?></h3>
            </form><!-- FORM END -->
            
         <?php 
                 include 'dbcon.php';
                 if($_SERVER['REQUEST_METHOD']=='POST')
                 {
                     $attendence = $_POST['att'];
                     $date = date('d-m-Y');
                     $query ="SELECT distinct date from attendence";
                     $result = mysqli_query($con, $query);
                     $b = false;
                     
                     if(mysqli_num_rows($result)>0)
                     {
                         while($check = mysqli_fetch_assoc($result))
                         {
                             if($date == $check['date'])
                             {
                                 $b = true;
                                 echo "Attendence already taken today";
                             }
                         }
                     }
                   
                     if(!$b)
                     {
                         foreach($attendence as $key => $value)
                         {
                             if($value == "present")
                             {   
                                 $query ="INSERT INTO attendence(value, rollno, date) VALUES('present', '$key', '$date')";
                                 $fire = mysqli_query($con, $query);
                             }
                             else
                             {  
                                $query ="INSERT INTO attendence(value, rollno, date) VALUES('absent', '$key', '$date')";
                                $fire = mysqli_query($con, $query);
                             }
                         }
                        
                    if($fire)
                         {
                             echo "Attendence taken successfuly";
                         }
                     }
            
                    }
         
         ?> 
       
             
            
        </table> 
        
        
    </div>
    
</body>
</html>
