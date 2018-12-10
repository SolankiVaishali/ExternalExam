<?php 
echo "This is Add to Cart Page";
?>
<?php
if(isset($_POST['addtocart']))
{
if($_POST['uname']=="" || $_POST['mno']=="")
{
	echo "Please enter your name and Mobile number";
}
?>
<form method=""POST>
<table>
<tr>
<td>Product Name:</td>
<td><input type="textbox" name="pname">
</tr>
<tr>
<td>Quantity:</td>
<td><input type="number" name="qty">
</tr>
<tr>
<td></td>
<td><input type="submit" name="addtocart" value="Add To Cart">
</tr>
</table>
</form>
