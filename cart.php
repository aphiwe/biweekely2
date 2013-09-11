<?php
	session_start();
	require 'db.php';
	include 'cart.class.php';
	$cart = new Cart;
	$items = $cart->getItem();
	$count = 1;
	foreach($items as $item){
		$query = "SELECT * FROM product WHERE id='$item'";
			$run_query = mysql_query($query);
		while($row = mysql_fetch_assoc($run_query)){
		if($row['name'] == $row['name']){
			$count++;
		}else{
			
		}
			
		}
		
	}
	
	echo $count;
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	
	
?>
	
	
	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<p>&nbsp;</p>
<form name="form1" method="post">
  <table width="200" border="0" align="center">
    <tr>
      <td><a href="products.php">product </a></td>
      <td><div align="center"><a href="cart.php">mycart </a></div></td>
    </tr>
  </table>
  <p>&nbsp;  </p>
  <p>
    <input type="hidden" name="pid" />
    <input type="hidden" name="command" />
  </p>
</form>
    
</body>
</html>
