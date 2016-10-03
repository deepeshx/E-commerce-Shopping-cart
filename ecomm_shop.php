<!DOCTYPE html>
<html>
<head>
	<title>Product list</title>
	<style type="text/css">
		body { background-image: url("images/10.jpg"); }
		td{vertical-align: top;}
		th{background-color: #eee;}
		.odd_row {background-color: #eee;}
		.even_row{background-color: #fff;}
	</style>
</head>
<body >
<h1>STORE</h1>
<p><a href="ecomm_view_cart.php">View Cart</a></p>
<p>Thanks for visiting our site! <strong>Please see our list of cool products</strong></p>
<table style="width:75%;">
<?php  
require 'db.inc.php';

$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
    die ('Unable to connect. Check your connection parameters.');
mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

$query = 'SELECT 
	product_code, name , price 
FROM 
	ecomm_products 
ORDER BY 
	product_code ASC';
$result = mysql_query($query,$db)or die(mysql_error($db));

$odd = true;
while ($row = mysql_fetch_array($result)){
	echo ($odd==true) ? '<tr class="odd_row">' : '<tr class="even_row">';
	$odd = !$odd;
	extract($row);
/*
	echo '<td style="text-align: center; width:100px;"><a href="' .
        'ecomm_view_product.php?product_code=' . $product_code .
        '"><img src="images/ '. $product_code . ' " alt="' . $name .
        '"/></a></td>';
        */
    echo '<td><a href="ecomm_view_product.php?product_code=' . $product_code .
        '">' . $name . '</a></td>';
    echo '<td style="text-align: right;"><a href="ecomm_view_product.php?' . 
        'product_code=' . $product_code . '">' . $price . '</a></td>';
    echo '</tr>';
}
/*'<td style="text-align: center; width:100px;"><a href="'
        'ecomm_view_product.php?product_code=' . $product_code .
        '"><img src="images/'. $product_code .'_tjpg" alt="' . $name .
        '"/></a></td>';*/
?>
  </table>
 </body>
 <!-- 
<img src="images/' . $product_code .'_t.jpg" alt="' . $name .
        '"/>
  -->
 </html>

 