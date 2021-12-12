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

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="assets/css/owl.css">

<link rel="icon" href="assets/images/bs.png">

<style>
	.cartShowTabel{
		margin-top: 70px;
		width: 90%;
		margin: auto;
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
		<nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}"><h2 class="sitename">BABY'S <em class="sitename2"> SHOPPING</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}"><i class="fa fa-home"></i> Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 


            <li class="nav-item">
             @if (Route::has('login'))
             @auth


             <li class="nav-item">
              <a class="nav-link" href="{{route('our.products')}}">All Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about.us')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact.us')}}">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('cart.show')}}"><i class="fa fa-cart-plus"></i><b style="color:red;"></b></a>
            </li>

            <x-app-layout>

            </x-app-layout>

            @else
            <li>
              <a class="nav-link" href="{{ route('login') }}" >Log in</a>
            </li class="nav-item">

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}" >Create an Account</a>
            </li>
            @endif
            @endauth
            @endif
          </li>


        </ul>
      </div>
    </div>
  </nav>

<br><br>

  <!--Cart Show Table Start -->
  <div class="productViewDetails">

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




 <section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-23 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="/productimage/{{$data->image}}">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">BABY'S</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$data->title}}</h1>
        <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <span class="text-gray-600 ml-3" style="color:red;">{{$data->id}} Reviews</span>
          </span>
          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
        <p class="leading-relaxed">{{$data->description}}</p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
          <h2 class="title-font font-medium text-2xl text-gray-900">Product Price: <b>${{$data->price}}</b>, <span style="color:#DB013D">{{$data->quantity}}</span></h2>
        </div>

        <div class="flex">
          <!------------  ADD CART START ----------->
          <form action="{{route('product.addcart', $data->id)}}" method="POST">
            @csrf

            <label for="">Enter Quantity:</label>
            <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">

            <br>

            <input class="btn btn-danger" type="submit"  value="Add Cart" style="width:100px;" >
          </form>            
          <!------------  ADD CART START ----------->

        </div>
      </div>
    </div>
  </div>
</section>









</div>
<!--Cart Show Table End -->

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
