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
			<h1 class="title">Show All Product</h1>
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
						<th scope="col">Id</th>
						<th scope="col"  style="width:20px">Title</th>
						<th scope="col">Description</th>
						<th scope="col"  style="width:20px">Price</th>
						<th scope="col" style="width:20px">Quantity</th>
						<th scope="col">Image</th>
						<th scope="col"  style="width:20px">Created At</th>
						<th scope="col"  style="width:20px">Updated At</th>
						<th scope="col"  style="width:20px">Action</th>
					</tr>
				</thead>
				<tbody>
					@if(count($data) > 0)
						@foreach($data as $row)
							<tr>
						<th scope="row">{{$row->id}}</th>
						<td>{{$row->title}}</td>
						<td>{{Str::limit(strip_tags($row->description), 10)}}</td>
						<td>${{$row->price}}</td>
						<td>{{$row->quantity}}</td>
						<td>
							<img src="/productimage/{{$row->image}}" style="height: 8vh;" alt="product_image">
						</td>
						<td>{{$row->created_at}}</td>
						<td>{{$row->updated_at}}</td>
						<td>
							<a href="{{route('admin.products.edit', $row->id)}}" class="btn btn-primary">Edit</a>
							<a href="{{route('admin.products.delete', $row->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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