<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Page</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <h1>Sign up
  </h1>
  <table width="298">
    <tr>
      <td><label>Username</label>&nbsp;</td>
      <td><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td><label>Email Address</label>&nbsp;</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit" />
  </p>
</form>
<?php
$username = $_POST['username'];
$email = $_POST['email'];

if(!$username || !$email)
    {
	  echo "Values are required";
	}
	
if(isset($_POST['submit']))
    {
	   echo "".$username, "<br/>", $email;
	}
	
?>

</body>
</html>
