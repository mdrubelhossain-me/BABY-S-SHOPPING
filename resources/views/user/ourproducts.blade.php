<!DOCTYPE html>
<html lang="en">

<head>

  <base href="/public">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
  </header>

  <!-- Page Content -->
  <div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4 style="color: yellow;">BEST OFFER</h4>
            <h2 style="color:yellow;">NEW ARRIVALS ON SALE</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="filters">

            <ul>
              <li class="active" data-filter="*">All Products</li>
              <li data-filter=".des">Featured</li>
              <li data-filter=".dev">Flash Deals</li>
              <li data-filter=".gra">Last Minute</li>
            </ul>

            <!--Search Product -->
            <form action="{{route('product.search')}}" method="get" class="form-inline" style="float:right; padding:10px">
              <input type="search" name="search" class="form-control">
              <input type="submit" value="Search" class="btn btn-danger">
            </form>
            <!--Search Product -->

          </div>
        </div>


        @if(count($data) >0)
        @foreach($data as $row)
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="/productimage/{{$row->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$row->title}}</h4></a>
              <h6>${{$row->price}} <br> <p style="color: #030539;"><b>Quantity: {{$row->quantity}}</b><hr> </p></h6><br>
              <p>{{Str::limit(strip_tags($row->description), 90)}}</p>




              <a href="{{route('product.view.details', $row->id)}}" class="btn btn-danger">View Details</a>


              <span>Reviews ({{$row->id}})</span>

            </div>
          </div>
        </div>
        @endforeach
        @endif
        

        @if(method_exists($data, 'links'))
        <div class="d-flex justify-content-center">
          <b class="btn btn-danger" style="margin-left:20px;">{!! $data->links() !!}</b>
        </div>
        @endif



      </div>
    </div>
  </div><br><br><br><br><br>


  @include('user.footer')


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
