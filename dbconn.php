<?php
$conn	=	mysqli_connect("localhost","root","","therightsoftware");
if(!$conn)
{
	echo "Connection error".mysqli_connect_error();
}