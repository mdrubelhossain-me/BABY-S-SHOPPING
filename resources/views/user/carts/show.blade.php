<!DOCTYPE html>
<html lang="en">

<head>

	<base href="/public">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>BABY'S SHOPPING</title>
	<link rel="icon" href="assets/images/bs.png">

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="assets/css/owl.css">

<style>
	.cartShowTabel{
		margin-top: 70px;
		width: 70%;
		margin: auto;
	}
	.cartShowTabel table th{
		background-color: #015448;
		color: white;
		text-align: center;
	}
	.cartShowTabel table td{
		text-align: center;
	}
	.mycartTitle{
		color:#DB013D; 
		font-size: 30px; 
		text-align: center; 
	}

</style>

</head>

<body>





	<!-- ***** Preloader Start ***** -->
	<div id="preloader">
		<div class="jumper">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>  
	<!-- ***** Preloader End ***** -->

	<!-- Header -->
	<header class="">
		
		@include('user.navbar')


		<br><br>

		<!--Cart Show Table Start -->
		<div class="cartShowTabel">
			<p class="mycartTitle"><b>My Cart</b></p>

			<!--Cart Delete Message START -->
			@if(session('success'))
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>{{session('success')}}</strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@endif
			<!----Cart Delete Message END -->
			<br>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">SI.</th>
						<th scope="col">Product Name</th>
						<th scope="col">Quantity</th>
						<th scope="col">Price</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>


					<form action="{{route('product.order')}}" method="POST">
						@csrf

						@foreach($cart as $carts)
						<tr>
							<th>{{$carts->id}}</th>
							<td>
								<input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">

								{{$carts->product_title}}
							</td>
							<td>
								<input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">

								{{$carts->quantity}}
							</td>
							<td>
								<input type="text" name="price[]" value="{{$carts->price}}" hidden="">

								{{$carts->price}}
							</td>
							<td>
								<a href="{{route('cart.delete', $carts->id)}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				<button class="btn btn-success" style="height:60px; width: 150px;">Confirm Order</button>
			</form>

		</div>
		<!--Cart Show Table End -->

		<br><br><br><br><br>

		@include('user.footer')

	</header>





	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<!-- Additional Scripts -->
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/owl.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/isotope.js"></script>
	<script src="assets/js/accordions.js"></script>


	<script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
        }
      }
    </script>


  </body>

  </html>
