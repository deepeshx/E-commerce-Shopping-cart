<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout step 1 of 3</title>
	<style>
		th{background-color: #999;}
		td{vertical-align: top;}
		.odd_row {background-color: #eee;}
		.even_row {background-color: #fff;}
 	</style>
 	<script type="text/javascript">
 		window.onload = function(){
 			//assign toggle shipping visibiltiy to same_info checkbox
 			var c = document.getElementById('same_info');
 			c.onchange = toggle_shipping_visibility; 
 		}
 		function toggle_shipping_visibility(){
 			var c = document.getElementById('same_info');
 			var t = document.getElementById('shipping_table');

 			// update shipping table's visibility
 			t.style.display = (c.checked) ? 'none' : '';
 		}
 	</script>
</head>
<body>
<h1>Store</h1>
<h2>Order checkout</h2>
<ol>
	<li><strong>Enter billing and shipping information</strong></li>
	<li>Verify accuracy of order info and send order</li>
	<li>Order confirmation and receipt</li>
</ol>
<form method="post" action="ecomm_checkout2.php">
	<table>
		<tr>
			<th colspan="2">Billing info</th>
		</tr><tr>
			<td><label for="first_name">First_name:</label></td><td>
				<input type="text" name="first_name" id="first_name" size="20" maxlength="20" />
			</td></tr>
			<tr>
				<td><label for="last_name">Last name:</label></td>
				<td><input type="text" name="last_name" id="last_name" size="20" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="address_1">Billing address:</label></td>
				<td><input type="text" name="address_1" id="address_1" size="30" maxlength="50" /></td>
			</tr>
			<tr>
				<td> </td>
				<td><input type="text" name="address_2" id="address_2" size="30" maxlength="50" /></td>
			</tr>
			<tr>
				<td><label for="city">City:</label></td>
				<td><input type="text" id="city" name="city" size="20" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="state">State:</label></td>
				<td><input type="text" id="state" name="state" size="20" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="zip_code">Zipcode:</label></td>
				<td><input type="text" id="zip_code" name="zip_code" size="6" maxlength="6" /></td>
			</tr>
			<tr>
				<td><label for="phone">Phone number:</label></td>
				<td><input type="text" id="phone" name="phone" size="10" maxlength="10" /></td>
			</tr>
			<tr>
				<td><label for="email">Email:</label></td>
				<td><input type="text" id="email" name="email" size="30" maxlength="100" /></td>
			</tr>
			<td colspan="2" style="text-align: center;">
				<input type="checkbox" name="same_info" id="same_info" checked="checked" />
				<label for="same_info">Shipping info is same as billing</label>
			</td>
		</tr>
	</table>
	<td>
		<table id="shipping_table" style="display:none;">
			<tr>
				<th colspan="2">Shipping info</th>
			</tr><tr>
				<td><label for="shipping_first_name">First name:</label></td>
				<td><input type="text" name="shipping_first_name" id="shipping_first_name" size="20" maxlength="20" />
			</td>
			</tr>
			<tr>
				<td><label for="shipping_last_name">Last name:</label></td>
				<td><input type="text" name="shipping_last_name" id="shipping_last_name" size="20" maxlength="20" />
			</td>
			</tr>
			<tr>
				<td><label for="shipping_address_1">Shipping address:</label></td>
				<td>
				<input type="text" name="shipping_address_1" id="shipping_address_1" size="30" maxlength="50" /> </td>
				<td>
				<input type="text" name="shipping_address_2" id="shipping_address_2" size="30" maxlength="50" /> </td>
			</tr>
			<tr>
				<td><label for="shipping_city">City:</label></td>
				<td><input type="text" name="shipping_city" id="shipping_city" size="20" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="shipping_state">State:</label></td>
				<td><input type="text" name="shipping_state" id="shipping_state" size="20" maxlength="20" /></td>
			</tr>
			<tr>
				<td><label for="shipping_zip_code">Zipcode:</label></td>
				<td><input type="text" name="shipping_zip_code" id="shipping_zip_code" size="6" maxlength="6" /></td>
			</tr>
			<tr>
				<td><label for="shipping_phone">Phone:</label></td>
				<td><input type="text" name="shipping_phone" id="shipping_phone" size="10" maxlength="10" /></td>
			</tr>
			<tr>
				<td><label for="shipping_email">Email:</label></td>
				<td><input type="text" name="shipping_email" id="shipping_email" size="30" maxlength="100" /></td>
			</tr>
		</table>
	</td>
	<tr>
		<td colspan="2">
			<input type="submit" value="Proceed to next step" />
		</td>
	</tr>
</form>
</body>
</html>