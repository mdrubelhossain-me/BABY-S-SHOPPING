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
		table th{
			color: yellow !important;
			text-align: center;
			background-color: #514A49;
		}
		table td{
			color: white;
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
			<h1 class="title">Show All Order</h1>
			<hr style="border-color:white;">

			<br>

			<!-- ALERT MESSAGE START -->
			@if(session('success'))
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>{{session('success')}}</strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@endif
			<!-- ALERT MESSAGE END -->


			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">SI.</th>
						<th scope="col">Customer Name</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">Product Title</th>
						<th scope="col">Price</th>
						<th scope="col">Quantity</th>
						<th scope="col">Status</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@if(count($order) > 0)
					@foreach($order as $row)
					<tr>
						<th scope="row">{{$row->id}}</th>
						<td>{{$row->name}}</td>
						<td>{{$row->phone}}</td>
						<td>{{$row->address}}</td>
						<td>{{$row->product_name}}</td>
						<td>{{$row->price}}</td>
						<td>{{$row->quantity}}</td>
						<td>{{$row->status}}</td>
						<td>
							<a href="{{route('order.status.update', $row->id)}}" class="btn btn-primary">Delivered</a>
						</td>
					</tr>
					@endforeach
					@endif

				</tbody>
			</table>




		</div>

	</div>


	<!-- partial -->

	@include('admin.script')


</body>
</html>