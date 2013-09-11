<?php

$searchTerm = trim($_GET['prod_id']);

if($searchTerm == "")
{
	echo "Enter id please.";
	exit();
}

$host = "localhost";
$db = "product"; 
$user = "root"; 
$pwd = ""; 

$link = mysqli_connect($host, $user, $pwd, $db);
$query = "SELECT * FROM products WHERE id LIKE '%$searchTerm%'";

$results = mysqli_query($link, $query);

if(mysqli_num_rows($results) >= 1)
{
	$output = "";
	echo "<left><table border=1>";
	while($row = mysqli_fetch_array($results))
	{
		 echo"<tr>";
echo '<td align= left><img src ="'.$row['picture'].'"</td>';
echo"<td align= left>".$row['name']."</td>";
echo"<td align= left>".$row['description']."</td>";
echo"<td align= left>".$row['price']."</td>";
echo '</div>';
echo"</tr>";

	}
	echo "</table>";
	echo $output;
}
else
	echo "There was no matching record for the id " . $searchTerm;
?>
