<?php
	$conn=mysqli_connect('localhost','root','','onlineshop_db');
	if(!$conn)
	{
		echo mysqli_error();
	}
?>