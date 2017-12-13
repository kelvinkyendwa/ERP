@extends ('layouts.app')

@section('content')
<br><br>
<div class="container">
	
<h3 style="color: teal; ">Timesheets Application</h3>
<hr>	
<article>
	<h4>Welcome, {{ Auth::user()->name }}</h4>
	<p>This is where you can fill in your timesheets for project that you are working on</p>

</article>

<a href="{{ url ('time/create')}}" class="btn btn-lg btn-info"> Fill Timesheet</a>
<a href="{{ url ('time/show')}}" class="btn btn-lg btn-success"> View Timesheets</a>
<br><br>
<hr>

	<h3>Recent Posts</h3>
			@include('partials.ptable')
</div>
@endsection