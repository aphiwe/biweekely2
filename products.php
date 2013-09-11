<?php
	include("db.php");
	include("cart.class.php");

    if(isset($_GET['add_to_cart'])){
		$item = $_GET['add_to_cart'];
		$cart = new Cart;
		$cart->add_to_cart($item);
	}
	
?>
<td><a href="products.php">product </a></td> |
	    <td><a href="cart.php">mycart </a></td>

<input type="hidden" name="productid" />
	  <input type="hidden" name="command" />
  </p>
	<p>&nbsp;</p>
	
</form>
<h3>Seacrh By id</h3>
<form action="search.php" method="get">
  <label>Name:
  <input type="text" name="prod_id" />
  </label>
  <input type="submit" value="Search" />
</form>

<?php
   include("db.php");


			$result=mysql_query("select * from products");
			while($row=mysql_fetch_array($result)){
		 ?>
             <p><img src="<?php echo $row['picture']?>" /></p>;
             <b><?php echo $row['name']?></b><br />
              <?php echo $row['description']?><br />
              Price:
              R<?php echo $row['price']?></big><br /><br />
              <!--input type="button" value="Add to Cart" onclick="addtocart(<!--?php echo $row['serial']?>)" /-->
              <a href="products.php" onclick="add_to_cart(<?php echo $row['id']?>)">add to cart</a>
		
        <?php } ?>