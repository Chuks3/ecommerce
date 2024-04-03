<!DOCTYPE html>
<?php include("inc/functions.php");?>
<html>
<head>
	<title>Inserting Products</title>
</head>
<body bgcolor="skyblue">
<FORM method="post" action="insert_prod.php" enctype="multipart/form-data">
	<table align="center" width="750" border="2" bgcolor="orange">
	<tr align="center">
	<td colspan="2"><h2>Insert New Post Here</h2></td>
</tr><tr>
	<td align="right"><b>Product Title:</b></td>
	<td><input type="text" name="prod_tit" required></td>
		</tr><tr>
		<td align="right"><b>Product Category:</b></td>
<td>
<select name="categ_id" id="categ_id">
<option>Select Category</option>
<?php
	$get_categs = "SELECT * FROM categories";
	$res_cats = mysqli_query($con, $get_categs);
	while($row_cats = mysqli_fetch_array($res_cats)){
	$cat_id = $row_cats["categ_id"];
	$cat_tit = $row_cats["categ_title"];
	echo "<option value='$cat_id'>$cat_tit</option>";
	}
	?>
</select>
</td>
</tr><tr>
<td align="right"><b>Product Brand:</b></td>
<td>
	<select name="brand_id" id="brand_id">
	<option>Select Brand</option>
	<?php
	$get_brands = "SELECT * FROM brands";
	$res_brands = mysqli_query($con, $get_brands);
	while($row_brands = mysqli_fetch_array($res_brands)){
	$brand_id = $row_brands["brand_id"];
	$brand_tit = $row_brands["brand_title"];
	echo "<option value='$brand_id'>$brand_tit</option>";
}
?></select></td>
</tr><tr>
<td align="right"><b>Product Image:</b></td>
<td><input type="file" name="prod_img"></td>
</tr><tr>
<td align="right"><b>Product Price:</b></td>
<td><input type="text" name="prod_price" required></td>
</tr><tr>
<td align="right"><b>Product Description:</b></td>
<td><textarea rows="5" cols="20" name="prod_desc"></textarea></td>
</tr><tr>
	<td align="right"><b>Product Keywords:</b></td>
	<td><input type="text" name="prod_kwds"></td>
</tr><tr>
	<td colspan="2" align="center">
	<input type="submit" name="insert_post" value="Insert Now"/>
	<a href='insert_prod.php'><input type="button" name="reset" value="Reset"/></a>
	</td>
</tr>
</table>
</FORM>
</body>
</html>

<!--create the php file that will be used to insert the products-->
<?php
if(isset($_POST['insert_post']) ){
	$p_tit = $_POST['prod_tit'];
	$p_cat = $_POST['categ_id'];
	$p_brd = $_POST['brand_id'];
	$p_prc = $_POST['prod_price'];
	$p_des = $_POST['prod_desc'];
	$p_kwd = $_POST['prod_kwds'];

$p_img = $_FILES['prod_img']['name'];
$p_img_tmp = $_FILES['prod_img']['tmp_name'];
move_uploaded_file($p_img_tmp,"admin_area/prod_imgs/$p_img");

$insert_prod = mysqli_query ($con, "INSERT into `products` (`categ_id`, `brand_id`,
`prod_title`, `prod_price`, `prod_descript`, `prod_img`,`prod_keywords`) values
('$p_cat','$p_brd','$p_tit','$p_prc','$p_des','$p_img','$p_kwd')");
if(!$insert_prod) {
echo "<font color='red'>Failed to insert product...</font>".mysqli_error($con);
	}else{
echo "<font color='green'><b>PRODUCT SUCCESSFULLY INSERTED...</b></font>";
	}
}
?>