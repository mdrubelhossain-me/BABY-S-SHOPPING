 
<style>
  .sitename{
    color: red !important;
    border-style: solid;
    border-color: white;
  }
  .sitename2{
    color: #FEFB08 !important;
    border-style: none !important;
  }
</style>







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
              <a class="nav-link" href="{{route('cart.show')}}"><i class="fa fa-cart-plus"></i><b style="color:red;"> [{{$count}}]</b></a>
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