<?php 
ob_start();
session_start() ;
$con = mysqli_connect('localhost','root') ; 
mysqli_select_db($con , 'register') ;  

$email = $_POST['email'] ;
$pass = $_POST['password'] ;

$s = "select * from db where email = '$email' && password='$pass' " ; 

$result = mysqli_query($con ,$s ) ;
$num = mysqli_num_rows($result);
if($num==1) {

header ('location:Welcome.php');;;}
else
{ echo  " Please create "  ;}


?>