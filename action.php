<?php
include "db.php";
//category call here
if (isset($_POST["category"])) {
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query);
	echo "
			 <div class='nav nav-pills nav-stacked'>
              <li class='active'><a href='#'><h4>categories</h4></a></li>
	";

	if(mysqli_num_rows ($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
			echo "
			<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";

		}
		echo "</div>";
	}
}
//brand call here
if (isset($_POST["brand"])) {
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($con,$brand_query);
	echo "
			 <div class='nav nav-pills nav-stacked'>
              <li class='active'><a href='#'><h4>brands</h4></a></li>
	";

	if(mysqli_num_rows ($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["brand_id"];
			$brand_name = $row["brand_title"];
			echo "
			
			<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>

			";

		}
		echo "</div>";
	}
}

//product call here
if(isset($_POST['get_mensproduct'])){
	//var_dump($_POST['get_mensproduct']);
	$product_query = "SELECT * FROM mens_products ORDER BY RAND() LIMIT 0,9";
	//var_dump($product_query);
	$run_query = mysqli_query($con, $product_query);
	//var_dump($run_query);
	if(mysqli_num_rows($run_query) > 0 ){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id = $row['product_id'];
			$pro_cat = $row['product_cat'];
			$pro_image = $row['product_image'];	
			$pro_price = $row['product_price'];
			$pro_title = $row['product_title'];	
			echo "
			<div class='col-md-4'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$pro_title</div>
                        <div class='panel-body'>
                          <img src='image/mens img/$pro_image' height='200px'>
                        </div>
                        <div class='panel-heading'>RS.$pro_price.00
                          <button pid='pro_id' style='float: right;'' class='btn btn-danger btn-xs'>AddToCart</button>
                        </div>
                    </div>
           
              </div>
			";
		}
	}
}

//product click here
if(isset($_POST ["get_selected_category"])){
	$cid = $_POST["cat_id"];
	$sql = "SELECT * FROM mens_products WHERE product_cat ='$cid'";
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id = $row['product_id'];
			$pro_cat = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_image = $row['product_image'];	
			$pro_price = $row['product_price'];
			$pro_title = $row['product_title'];	
			echo "
			<div class='col-md-4'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$pro_title</div>
                        <div class='panel-body'>
                          <img src='image/mens img/$pro_image' height='200px'>
                        </div>
                        <div class='panel-heading'>RS.$pro_price.00
                          <button pid='pro_id' style='float: right;'' class='btn btn-danger btn-xs'>AddToCart</button>
                        </div>
                    </div>
           
              </div>
			";
		}

	}

	if(isset($_POST ["selectBrand"])){
	$bid = $_POST["brand_id"];
	$sql = "SELECT * FROM mens_products WHERE product_brand ='$bid'";
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id = $row['product_id'];
			$pro_cat = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_image = $row['product_image'];	
			$pro_price = $row['product_price'];
			$pro_title = $row['product_title'];	
			echo "
			<div class='col-md-4'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$pro_title</div>
                        <div class='panel-body'>
                          <img src='image/mens img/$pro_image' height='200px'>
                        </div>
                        <div class='panel-heading'>RS.$pro_price.00
                          <button pid='pro_id' style='float: right;'' class='btn btn-danger btn-xs'>AddToCart</button>
                        </div>
                    </div>
           
              </div>
			";
		}

	}


	if(isset($_POST ["search"])){
	$keyword = $_POST["keyword"];
	$sql = "SELECT * FROM mens_products WHERE product_keywords LIKE '%$keyword%'";
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id = $row['product_id'];
			$pro_cat = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_image = $row['product_image'];	
			$pro_price = $row['product_price'];
			$pro_title = $row['product_title'];	
			echo "
			<div class='col-md-4'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$pro_title</div>
                        <div class='panel-body'>
                          <img src='image/mens img/$pro_image' height='200px'>
                        </div>
                        <div class='panel-heading'>RS.$pro_price.00
                          <button pid='pro_id' style='float: right;'' class='btn btn-danger btn-xs'>AddToCart</button>
                        </div>
                    </div>
           
              </div>
			";
		}

	}


?>