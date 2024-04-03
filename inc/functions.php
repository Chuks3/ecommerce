<?php
// 1. Create a database connection
	$con = mysqli_connect("localhost", "root", "", "ecommerce");
	
// 2. Get categories
function getCategs(){
	global $con;
	$get_categs = "SELECT * FROM categories";
	$res_cats = mysqli_query($con, $get_categs);
	
	while($row_cats = mysqli_fetch_array($res_cats)){
		$cat_id = $row_cats["categ_id"];
		$cat_tit = $row_cats["categ_title"];
	echo "<li><a href='./?cat=". $cat_id ."'>". $cat_tit ."</a></li>";
	}
}

// 3. Get brands
function getBrands(){
	global $con;
	$get_brands = "SELECT * FROM brands";
	$res_brands = mysqli_query($con, $get_brands);

	while($row_brands = mysqli_fetch_array($res_brands)){
		$brand_id = $row_brands["brand_id"];
		$brand_tit = $row_brands["brand_title"];
	echo "<li><a href='./?brand=". $brand_id."'>". $brand_tit ."</a></li>";
	}
}

// 4. Get products
function getProds(){
	global $con;
	if (isset($_GET['brand'])){
		$get_p = "SELECT * FROM products WHERE brand_id =" .$_GET['brand']. "";
	}else if (isset($_GET['cat'])){
		$get_p = "SELECT * FROM products WHERE categ_id =" .$_GET['cat']. "";
	}else {
		$get_p = "SELECT * FROM products";
	}$sql = $get_p;
	$get_prods = $sql;
	$res_prods = mysqli_query($con, $get_prods);

	while($row_prods = mysqli_fetch_array($res_prods)){
		$p_id = $row_prods["prod_id"];
		$p_categ = $row_prods["categ_id"];
		$p_brand = $row_prods["brand_id"];
		$p_tit = $row_prods["prod_title"];
		$p_price = $row_prods["prod_price"];
		$p_img = $row_prods["prod_img"];
		$p_key = $row_prods['prod_keywords'];

	echo " <div id='single_product'>
		<h3>$p_tit</h3>
		<img src='admin_area/prod_imgs/$p_img' width='180' height='180' />
		<h3>$p_price</h3>
		</div> ";
	}
}
?>