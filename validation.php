<?php
if(isset($_POST['login']))
{

	$user=$_POST['user'];
    $password=$_POST['password'];




session_start();


$con = mysqli_connect('localhost','root','','userregistration');


$name= $_POST['user'];
$password= $_POST['password'];


$s = " SELECT * from usertable WHERE name ='$name' && password='$password'";
$result= mysqli_query($con,$s);

$num= mysqli_num_rows($result);


if($num == 1){

    $_SESSION['username']= $name;
	header('location:home.php');
}
else {

    header('location:login.php');

 }
}


else{
	header('Location:login.php');
}
?>