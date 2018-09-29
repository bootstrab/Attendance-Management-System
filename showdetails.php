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
    </style>
</head>
<body>
            <h1 style="text-align:center;">Attendence Management System</h1>
            <h4>Date :- <?php echo date('d - m - Y'); ?></h4>
            <!-- TABLE OF STUDENT DETAIL -->

            <table>
             <tr>
                <th>Rollno</th>
                <th>Name</th>
                <th>Branch</th>
                <th>More Detail</th>
            
            </tr>
                <?php 
                    if(isset($_POST['showdetails'])) {
                        include 'dbcon.php';
                        $rno = $_POST['rollno'];
                        $name = $_POST['name'];
                        $date = $_POST['branch'];
                    // sql qurey for take data from database when rollno and name match
                        $sql = "SELECT * FROM student WHERE rollno='$rno' AND name='$name' ";
                        $result = mysqli_query($con,$sql);

                        //if(mysqli_num_rows($result)<0)
                        if(mysqli_num_rows($result)==0) 
                          {
                            //echo "<tr><td>No match found</td></tr>";
                            ?>
                                <script> 
                                    alert("Student Not Match. Enter Correct Detail Of Student");
                               </script>
                                <?php
                                 }
                                else  
                                {
                                    while($data = mysqli_fetch_assoc($result)) {
                                 ?>
                                     <tr>
                                         <td><?php echo $data['rollno'] ?></td>
                                         <td><?php echo $data['name'] ?></td>
                                         <td><?php echo $data['branch'] ?></td>
                                         <td><a href = "/ams/viewmore.php?d=<?php echo $date; ?>">More Details</a></td>
                                     </tr>
                          <?php
                               }
                               }
                               }
                             ?>  

                                
                    
            </table>

        </div>
</body>
</html>
