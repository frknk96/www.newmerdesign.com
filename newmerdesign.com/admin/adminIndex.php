<?php 

include 'header.php';
include 'sidebar.php';

if(!isset($_SESSION['admin_kadi']))
{
	header('Location:login.php');
}

 ?>


 