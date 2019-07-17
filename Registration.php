<?php
if(isset($_POST['Register']))
{

	$user=$_POST['user'];
	$password=$_POST['password'];



session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con , 'userregistration');


$name= $_POST['user'];
$password= $_POST['password'];


$s = " SELECT * from usertable WHERE name ='$name'";
$result= mysqli_query($con,$s);

$num= mysqli_num_rows($result);


if($num == 1){

	echo "Username Already Taken";
}
else {
	$reg = "insert into usertable(name, password) values ('$name', '$password')";
	mysqli_query($con,$reg);
	echo "Registration successful";
 }
}


else{
	header('Location:login.php');
}
?>