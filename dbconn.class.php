<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DB Connetion</title>
</head>

<body>
<?php
    class DatabaseConnetion
	{
	   public $dbName = "user_management";
	   public $localhost = "localhost";
	   public $username = "root" ;
     
	   function establish_Connetion()
	     {
		  	 $db = mysqli_connect($localhost, $username ,"", $dbName);
			 return $db;
		 }
		 
		 
			 function execute($db)
				{
					$results = mysql_query($db);
					  //$results = ("INSERT INTO user(user_name, email_address, password) VALUES ('".$username."','".$email."','".$password."')");
		  if($rows = mysql_affected_rows()==1){
				return $rows.' " query inserted into user." <br>';
			}
			else
			{
				return 'ERROR<br>';
			}
					 return $results; 
				 }	 
				  
	}
?>
</body>
</html>