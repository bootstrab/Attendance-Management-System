<?php require 'dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
     table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin:auto;
            }
      td, th {
             border: 1px solid #dddddd;
             text-align: left;
             padding: 8px;
             }
      tr:nth-child(even) {
              background-color: #dddddd;
                        }
    </style>
</head>
<body>
<h1><center>Attendence Record</center></h1>
<table>
         <tr>
            <th>Serial No.</th>
            <th>Name</th>
            <th>Roll No.</th>
            <th>Branch</th>
            <th>Attendence</th>
           
           
         </tr>
       <?php
          if($_GET['d']){
               $date = $_GET['d'];
               $sql = "SELECT student.*, attendence.* FROM attendence 
                       inner join student on attendence.rollno = student.rollno 
                       and attendence.date='$date'";
               $result = mysqli_query($con,$sql);
                       
               $count=0;
                       if(mysqli_num_rows($result) > 0)
                           {
                            while($data = mysqli_fetch_assoc($result)) {
                            $count++;
        ?> 
            <tr>
              <td><?php echo $count; ?></td>              
              <td><?php echo $data['name']; ?></td>
              <td><?php echo $data['rollno']?></td>
              <td><?php echo $data['branch'] ?></td>
              <td><?php echo $data['value']; ?></td>
            <tr>

            <?php } 
            }  } ?>
        </table>
</body>
</html>
