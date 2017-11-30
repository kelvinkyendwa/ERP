@extends ('layouts.app')

@section('content')
<div class="container">
	<h3>Edit an Entry</h3>
	<form action="/overtime" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="projects">Select Project</label>
			<select name="projects" id="" class="form-control">
				<option value="{{old('projects')}}">Option</option>
				
			</select>
			
		</div>
		<div class="form-group">
			<label for="date">Date</label>
			<input type="date" name="hours" placeholder="Select Date" class="form-control" value="{{old('date')}}">
		</div>
		<div class="form-group">
			<label for="hours">Extra Hours worked on project</label>
			<input type="text" name="hours" placeholder="key in hours" class="form-control" value="{{old('hours')}}">
		</div>
		<div class="form-group">
			<label for="desc">Description</label>
			<textarea class="form-control" name="desc" value="{{old('desc')}}"></textarea>
		</div>

		<button type="Submit" class="btn btn-info">Submit</button>
		<button class="btn btn-warning" type="Reset">Reset</button>

	</form>
	</form>

</div>


@endsection