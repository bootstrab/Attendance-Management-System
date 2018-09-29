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
        a{
            text-decoration:none;
        }
        a.hover{
            color:orange;
        }
    </style>
</head>
<body>
<h1 ><center>Select View For More Detail......</center></h1>
<table>
         <tr>
            <th>Serial No.</th>
            <th>Date</th>
            <th>More</th>
           
         </tr>
       <?php
         include 'dbcon.php';
            $sql = "SELECT distinct date FROM attendence;";
            $result = mysqli_query($con,$sql);
                       
            $count=0;
            if(mysqli_num_rows($result) > 0)
            {
            while($data = mysqli_fetch_assoc($result)) {
            $count++;
        ?> 
            <tr>
              <td><?php echo $count; ?></td>              
              <td><?php echo $data['date']; ?></td>
              <td><a href="viewmore.php?d=<?php echo $data['date']; ?>">View</a></td>
            <tr>

            <?php } 
            } ?>
        </table>
</body>
</html>
