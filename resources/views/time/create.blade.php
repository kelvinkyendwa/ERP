@extends ('layouts.app')

@section('content')
<br><br>
<div class="container">
	
<h3>Timesheets Application</h3>
<hr>

	<form action="/time" method="POST">
		{{ csrf_field() }}
		
		@include('partials.timeform')

	</form>

	<hr>
	<h3>Recent Posts</h3>
	<table class="table">
		<tr>
		<th>id</th>
		<th>Date</th>
		<th>Project</th>
		<th>Description</th>
		<th>Action</th>	

		</tr>
		<tr>
			<td>1</td> 
			<td>22/7/1254</td>
			<td>Project 1</td>
			<td>What you did</td>
			<td><button>Delete</button></td>
		</tr>
	</table>
</div>

@endsection