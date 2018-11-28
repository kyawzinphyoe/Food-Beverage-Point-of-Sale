<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/main.js"></script>
	
</head>
<body>
<!--Navbar-->
<?php include_once('./templates/header.php') ?>
<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top mx-auto" style="border-radius: 100%;width: 60%" src="./images/user.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Profile Info</h5>
						<p class="card-text"><i class="fa fa-user">&nbsp;</i>Kyaw Zin</p>
						<p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
						<p class="card-text">Last login : xxxx-xx-xx </p>
						<a href="#" class="btn btn-primary"><i class="fa fa-pencil">&nbsp;</i>Edit Profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width: 100%;height: 100%">
					<h1>Welcome Admin</h1>
					<div class="row">
						<div class="col-md-6">
						<!--<iframe src="http://free.timeanddate.com/clock/i6iqt7a9/n208/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>-->
					</div>
					<div class="col-md-6">
						<div class="card">
					      <div class="card-body">
					        <h5 class="card-title">New Order</h5>
					        <p class="card-text">Here you can make invoice and create new order</p>
					        <a href="#" class="btn btn-primary">New Order</a>
					      </div>
					    </div>
					</div>
					</div>					
				</div>
			</div>
		</div>	
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Categories</h5>
						<p class="card-text">Here you can manage and create add parent and sub category</p>
						<a href="#" data-toggle="modal" data-target="#category" class="btn btn-primary">Add</a>
						<a href="#" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Brands</h5>
						<p class="card-text">Here you can manage and create add new brands</p>
						<a href="#" data-toggle="modal" data-target="#brand" class="btn btn-primary">Add</a>
						<a href="#" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Products</h5>
						<p class="card-text">Here you can manage and create add new product</p>
						<a href="#" data-toggle="modal" data-target="#product" class="btn btn-primary">Add</a>
						<a href="#" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		#category_form
		include_once('./templates/category.php'); 
		#brand_form
		include_once('./templates/brand.php');
		#product_form
		include_once('./templates/product.php');
	?>
</body>
</html>