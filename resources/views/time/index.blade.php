@extends ('layouts.app')
@section('content')

<div class="row">
	<div style="z-index: 3; background-color: #2980b9; color: white; padding: 30px; width: 260px; position: absolute; right:  0;" class="animated slideInRight">
		<h4><strong>Timesheets</strong> </h4>
		<p>This is where you handle Timesheets</p>
	</div>
	
	<div class="col-md-5">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title" style=" font-weight: bold;">Fill Timesheet</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="{{ url ('time/create')}}"  class="btn btn-primary">Apply</a>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title" style=" font-weight: bold;">View All Applications</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="{{ url ('time/show')}}" class="btn btn-primary">View</a>
			</div>
		</div>
	</div>
</div>
<br>
<br>

<h4><strong>Approved Timesheets</strong></h4>
<br>
<br>
@include('partials.ptable')
@endsection