<?php
//session_start();
	class Cart
	{
		
		public function add_to_cart($item){
			$_SESSION['item'][] = $item;
		}
		public function getItem(){
			return $_SESSION['item'];
		}
		
		function remove_product($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['productid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	   }
		
		
		
		
		
		
		
		
		
		
		
	}
	
?>