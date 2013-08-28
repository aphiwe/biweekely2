<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<body>
<?php
include("Registration.php");

 class User_Management 
 {
	private $email;
	private $username;
	private $password;

	function _Construct($user_id, $email)
	 {
	  
	   $this->email_address =$email;
	   $this->user_name = $user_name;
	   
	  
	 }
   function set_password($password)
	 {
	   $this->password = md5($password);  
     }
	function display_user_info($username, $email)
	  {
		 $str = "<p>".$username."\t".$email."</p>";
		 
	     return $str;
		 
	  }  
   function save()
	    {
		   @ $db = mysqli_connect("localhost","root","","user_management");
			 
				if(mysqli_connect_errno($db))
				 {
					echo 'Error: Could not connect to database. Please try again later.';
			     }
				  
	      $db = "INSERT INTO user(user_name, email_address, password) VALUES ('".mysql_escape_string($username)."','".mysql_escape_string($email)."','".$password."')";
	
	     echo $db->affected_rows." query inserted into user.";
	
		} 
		
 }
?>
</body>
</html>
