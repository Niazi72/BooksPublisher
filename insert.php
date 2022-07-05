<?php
include("dbconn.php");
/*** For Sign up ***/
if(isset($_POST['signup']))
{
	$signupAlert	=	false;
	$email			=	$_POST['email'];
	$selectQ		=	mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
	$numOfRowExist	=	mysqli_num_rows($selectQ);
	$existAlert		=	false;
	if($numOfRowExist > 0)
	{
		$existAlert		=	true;
		header("location:welcome.php?existAlert='".$existAlert."'");
	}
	else
	{
		$signupAlert	=	true;
		$inswertQuer	=	mysqli_query($conn,"INSERT INTO `user`(`name`, `image`, `email`, `password`) VALUES ('".$_POST['name']."','".$_POST['image']."','".$_POST['email']."','".$_POST['password']."')");
		header("location:welcome.php?signupAlert='".$signupAlert."'");
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
	$signinAlert=	false;
	$showAlert	=	false;
	if($num	==	1)
	{
		session_start();
		$signinAlert		=	true;
		$_SESSION['signin']	=	true;
		$_SESSION['email']	=	$email;
		$_SESSION['name']	=	$name;
		header("location:welcome.php?signinAlert='".$signinAlert."'");
	}
	else
	{
		$showAlert	=	true;
		header("location:welcome.php?showAlert='".$showAlert."'");
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

