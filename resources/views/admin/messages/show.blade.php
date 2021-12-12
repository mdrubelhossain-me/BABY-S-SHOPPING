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
			<h1 class="title">Show All Messages</h1>
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
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Subject</th>
						<th scope="col">Message</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				@if(count($msg)>0)
				@foreach($msg as $mssg)
				<tbody>
					<tr>
						<th scope="row">{{$mssg->id}}</th>
						<td>{{$mssg->name}}</td>
						<td>{{$mssg->email}}</td>
						<td>{{$mssg->subject}}</td>
						<td>{{$mssg->message}}</td>
						<td>
							<a href="{{route('admin.message.delete', $mssg->id)}}"  class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
						</td>
					</tr>
				</tbody>
				@endforeach
				@endif
			</table>
			
			




		</div>

	</div>


	<!-- partial -->

	@include('admin.script')


</body>
</html>