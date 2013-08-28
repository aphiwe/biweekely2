<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test user</title>
</head>

<body>
<?php
 include ("user.class.php");
 $test = new User_Management();
 echo $test->display_user_info($username, $email_address);
 echo $test->save();
 ?>
<?php
 include("dbconn.class.php");
 $test1 = new DatabaseConnetion();
 //$test1->establish_Connetion();
 $test1->execute($results);
 
?>

</body>
</html>