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
  .searchinputform{
    margin-right: 300px;
  }
  .searchinputform .searchinput{
    width: 650px;
    height: 55px;
    background-color: white;
    border-color: red;
    opacity: 0.8;
  }
  .searchinputform .searchbutton{
    height: 55px;
  }
  .totaluser{
    border-style: solid;
    border-color: #DB013D;
    background-color: #DB013D;
    height: 100px;
    width: 100% cover;
    margin-top: 30px !important;
    margin: auto;
    position: relative;
    border-radius: 50px;
  }
  .usercount{
    margin-top: 30px;
    margin-left: 10px;
    position: absolute;
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


   <!--Add Cart ALERT MESSAGE Start -->
   @if(session('success'))
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  <!--Add Cart ALERT MESSAGE END -->


</header>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
  <div class="owl-banner owl-carousel">
    <div class="banner-item-01">
      <div class="text-content">
        <h4 style="color:yellow;">Best Offer</h4>
        <h2 style="color:yellow;">New Arrivals On Sale</h2>

        <!--Search Product -->
        <form action="{{route('product.search')}}" method="get" class="form-inline searchinputform" style="float:right; padding:10px">
          <input type="search" name="search" class="form-control searchinput">
          <input type="submit" value="Search" class="btn btn-danger searchbutton">
        </form>
        <!--Search Product -->
      </div>
    </div>
    <div class="banner-item-02">
      <div class="text-content">
        <h4 style="color:yellow;">Best Offer</h4>
        <h2 style="color:yellow;">New Arrivals On Sale</h2>

        <!--Search Product -->
        <form action="{{route('product.search')}}" method="get" class="form-inline searchinputform" style="float:right; padding:10px">
          <input type="search" name="search" class="form-control searchinput">
          <input type="submit" value="Search" class="btn btn-danger searchbutton">
        </form>
        <!--Search Product -->
      </div>
    </div>
    <div class="banner-item-03">
      <div class="text-content">
       <h4 style="color:yellow;">Best Offer</h4>
       <h2 style="color:yellow;">New Arrivals On Sale</h2>

       <!--Search Product -->
       <form action="{{route('product.search')}}" method="get" class="form-inline searchinputform" style="float:right; padding:10px">
        <input type="search" name="search" class="form-control searchinput">
        <input type="submit" value="Search" class="btn btn-danger searchbutton">
      </form>
      <!--Search Product -->
    </div>
  </div>
</div>
</div>
<!-- Banner Ends Here -->



@include('user.product')

<div class="best-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 style="color:#DB013D;">ABOUT BABY'S SHOPPING</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="left-content">
          <h4>Looking for the best products?</h4>
          <ul class="featured-list">
            <li><a href="#">Best Quality Products</a></li>
            
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-image">
          <img src="assets/images/slide_02.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Last Images & User Count Start  -->
<div class="best-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 style="color:#DB013D; text-align: center;">BABY'S SHOPPING</h1>
        <br>
        <table style="margin:auto;">
          <tr>
            <td>
              <img src="assets/images/1.jpg" height="150" width="250" alt="">
            </td>
            <td>
              <img src="assets/images/2.jpg" height="150" width="250" alt="">
            </td>
            <td>
              <img src="assets/images/3.jpg" height="150" width="250" alt="">
            </td>
          </tr>
          <tr>
            <td>
              <img src="assets/images/4.jpg" height="150" width="250" alt="">
            </td>
            <td>
              <img src="assets/images/5.jpg" height="150" width="250" alt="">
            </td>
            <td>
              <img src="assets/images/6.jpg" height="150" width="250" alt="">
            </td>
          </tr>
        </table>


        <div class="totaluser">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
            @php
            $totalusers=App\Models\User::all()->count();
            @endphp
            <h3 class="usercount" style="color:white;">Total Users: {{$totalusers}}</h3>
          </div>
        </div> 

      </div>
    </div>
  </div>
</div>
<!-- Last Images & User Count End  -->


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
