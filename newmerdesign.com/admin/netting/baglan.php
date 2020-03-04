<?php
 	ob_start();
 	session_start();
 ?>

<?php 

$username="root";
$password="sorceym3";
$sunucu="localhost";
$database="keremsite";


$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF-8");


if(!$baglan)
{
	echo "Baglanti hatasi:".mysql_errno();
	exit();
}

$db=mysql_select_db($database);
if(!$db)
{
	echo "Veritabani hatasi:".mysql_error();
	echo "<br>";
	
	exit();
}

 ?>