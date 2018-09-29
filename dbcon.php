<?php 
$con = mysqli_connect("localhost","root","","ams") or die("can't connect
to the database");
if(!$con) {
    echo "database is not connected";
} 
?>
