<div class="form-group">
			<label for="project">Select Project</label>
			<select name="project" id="project" class="form-control">
				@foreach ($list as $lis)
						<option value="{{$lis->project}}">{{$lis->project}}</option>
				@endforeach
			</select>
			
</div>

		<div class="form-group">
			<label for="date">Date</label>
			<input type="date" name="date" placeholder="Select Date" class="form-control">
		</div>
		<div class="form-group">
			<label for="hours">Extra Hours worked on project</label>
			<input type="text" name="hours" placeholder="key in hours" class="form-control">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>

		<button type="Submit" class="btn btn-info">Submit</button>
		<button class="btn btn-warning" type="Reset">Reset</button>