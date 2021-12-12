<!DOCTYPE html>
<html lang="en">
<head>
	<base href="/public">
	@include('admin.css')

	<style type="text/css">
		.title{
			color: white;
			padding:25px; 
			font-size: 25px;
		}
		.addproductform{
			width: 300px;
		}
		.addproductform label{
			margin-top: 15px;
		}
		.addproductform .protitle{
			margin-right: 200px;
		}
		.addproductform .description{
			margin-right: 240px;
		}
		.addproductform .price{
			margin-right: 260px;
		}
		.addproductform .quantity{
			margin-right: 260px;
		}
		.addproductform .proimage{
			margin-right: 190px;
		}
		.addproductform input{
			color: black;
		}
		.addproductform .ProductSubmitButton{
			width: 170px;
			height: 50px;
			margin-left: 110px;
		}
	</style>
</head>
<body>
	
	<!-- partial -->

	@include('admin.sidebar')

	@include('admin.navbar')


	


	<!-- partial -->
	<div class="container-fluid page-body-wrapper">
		<div class="container" align="center">
			<hr style="border-color:white;">
			<h1 class="title">Add New Product</h1>
			<hr style="border-color:white;">

       

        <!-- ALERT MESSAGE START -->
			@if(session('success'))
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>{{session('success')}}</strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@endif
		<!--  ALERT MESSAGE END -->



			<form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">

				@csrf

				<div  class="addproductform">
					<div>
						<label for="title" class="protitle"><h4>Product Title</h4></label>

						<input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
					</div>
					<div>
						<label for="price" class="price"><h4>Price</h4></label>
						<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
					</div>
					<div>
						<label for="description" class="description"><h4>Description</h4></label>
						<input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">
					</div>
					<div>
						<label for="quantity" class="quantity"><h4>Quantity</h4></label>
						<input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity">
					</div>
					<div>
						<label for="image" class="proimage"><h4>Product Image</h4></label>
						<input type="file" class="form-control @error('file') is-invalid @enderror" id="image" name="file">
					</div>
					<input type="submit" name="submit" value="Add Product" class="btn btn-primary mt-5 ProductSubmitButton">
				</div>
			</form>


		</div>

	</div>




	<!-- partial -->

	@include('admin.script')
</body>
</html>