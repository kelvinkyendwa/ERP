@extends ('layouts.app')

@section('content')
<br><br>
<div class="container">
	
<h3>Timesheets Application</h3>
<hr>

	<form action="/time" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="projects">Select Project</label>
			<select name="projects" id="" class="form-control">
				<option value="">Option</option>
				<option value="">Option</option>
				<option value="">Option</option>
			</select>
			
		</div>
		<div class="form-group">
			<label for="date">Date</label>
			<input type="date" name="hours" placeholder="Select Date" class="form-control">
		</div>
		<div class="form-group">
			<label for="hours">Hours worked on project</label>
			<input type="text" name="hours" placeholder="key in hours" class="form-control">
		</div>
		<div class="form-group">
			<label for="desc">Description</label>
			<textarea class="form-control" name="desc"></textarea>
		</div>

		<button type="Submit" class="btn btn-info">Submit</button>
		<button class="btn btn-warning" type="Reset">Reset</button>

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