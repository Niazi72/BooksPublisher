<?php
include("dbconn.php");
/*** For Sign up ***/
if(isset($_POST['signup']))
{
	$email			=	$_POST['email'];
	$selectQ		=	mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
	$numOfRowExist	=	mysqli_num_rows($selectQ);
	if($numOfRowExist > 0)
	{
		header('location:welcome.php');
	}
	else
	{
		$inswertQuer	=	mysqli_query($conn,"INSERT INTO `user`(`name`, `email`, `password`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')");
		header('location:welcome.php');
	}
}
/*** For Sign in ***/
if(isset($_POST['signin']))
{
	$email		=	$_POST['email'];
	$password	=	$_POST['password'];
	$getData	=	mysqli_query($conn,"SELECT * FROM user WHERE email='$email' AND password='$password'");
	$name		=	'';
	foreach($getData as $getDatas)
	{
		$name	=	$getDatas['name'];
	}
	$num		=	mysqli_num_rows($getData);
	if($num	==	1) //check for email already exist
	{
		session_start();
		$_SESSION['signin']	=	true;
		$_SESSION['email']	=	$email;
		$_SESSION['name']	=	$name;
		header("location:welcome.php");
	}
}
/*** For Insertion of data ***/
if(isset($_POST['submit']))
{
	$insertQuery	=	mysqli_query($conn,"INSERT INTO books
						(title,description,publishby,image) 
						VALUES (
						'".$_POST['title']."',
						'".$_POST['description']."',
						'".$_POST['publishby']."',
						'".$_POST['image']."')");
	header('location:welcome.php');
}
?>

