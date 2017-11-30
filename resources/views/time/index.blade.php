@extends ('layouts.app')

@section('content')
<br><br>
<div class="container">
	
<h3>Timesheets Application</h3>
<hr>	
<article>
	<h4>Welcome, {{ Auth::user()->name }}</h4>
	<p>This is where you can fill in your timesheets for project that you are working on</p>

</article>

<a href="{{ url ('time/create')}}" class="btn btn-lg btn-info"> Fill Timesheet</a>
	
</div>

@endsection`