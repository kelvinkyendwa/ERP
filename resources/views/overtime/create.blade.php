@extends ('layouts.app')

@section('content')
<br><br>
<div class="container">
	
<h3>Overtime Application</h3>
<hr>

	<form action="/over" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="projects">Select Project</label>
			<select name="projects" id="projects" class="form-control">
				@foreach ($list as $lis)
						<option value="">{{$lis->project}}</option>
				@endforeach
			</select>
			
		</div>
		<div class="form-group">
			<label for="date">Date</label>
			<input type="date" name="hours" placeholder="Select Date" class="form-control">
		</div>
		<div class="form-group">
			<label for="hours">Extra Hours worked on project</label>
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
	
</div>

@endsection