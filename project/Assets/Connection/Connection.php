<?php
$Servername="localhost";
$Username="root";
$password="";
$db="db_mec";

$conn=mysqli_connect($Servername,$Username,$password,$db);
if(!$conn)
{
	echo"not connected";
}

?>