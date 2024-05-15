<?php
session_start();
$conn=mysqli_connect("localhost","root","","threads");
if(!$conn)
{
    echo"Connection failed!!!!!!!!!!1" .mysqli_connect_error();
    die();
}
?>