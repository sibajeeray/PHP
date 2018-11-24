<?php
	$connection = mysqli_connect('localhost','root','root','cms');
	
	if(!$connection){
		echo "<h3 style='color:red'>DataBase connection Failed</h3>";
	}
?>