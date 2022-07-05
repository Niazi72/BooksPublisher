<?php
include('dbconn.php');
session_start();

session_unset();

session_destroy();
$signoutAlert	=	1;
header("location:welcome.php?signoutAlert='".$signoutAlert."'");
exit;