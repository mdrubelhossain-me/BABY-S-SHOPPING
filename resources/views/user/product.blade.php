

<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2 style="color:#DB013D;">Latest Products</h2>
          <a href="{{url('/')}}" style="color:black;">view all products <i class="fa fa-angle-right"></i></a>


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
          <a href="{{route('product.view.details', $row->id)}}"><img src="/productimage/{{$row->image}}" alt="" height="210" width="160"></a>
          <div class="down-content">
            <a href="{{route('product.view.details', $row->id)}}"><p style="font-size: 25px; color: #07094E;"><b>{{$row->title}}</b></p></a>
            <h6>${{$row->price}} <br> <p style="color: #030539;"><b>Quantity: {{$row->quantity}}</b><hr> </p></h6>
            <br>
            <p style="text-align: justify;">{{Str::limit(strip_tags($row->description), 90)}}</p>




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
</div>