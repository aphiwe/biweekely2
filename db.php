<?php
	mysql_connect("localhost","root","") or die("Sorry, fail to connect database, please try again later");
	mysql_select_db("product") or die("Sorry, fail to select database, please try again later");
	session_start();
?>