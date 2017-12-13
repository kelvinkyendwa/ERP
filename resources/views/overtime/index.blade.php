@extends ('layouts.app')

@section('content')
<br><br>
<div class="container">
	
<h3>Overtime Application</h3>
<hr>
<article>
	<h4 class="blue">Welcome, {{ Auth::user()->name }}</h4>
	<p>This is where you can request and view past overime requests</p>

</article>

<a href="{{ url ('over/create')}}" class="btn btn-lg btn-info"> Apply for Overtime</a>|
<a href="{{ url ('over/show')}}" class="btn btn-lg btn-info"> View Overtime</a>
	
<hr>
			<h3>Recent Posts</h3>
			@include('partials.ptable')
</div>

@endsection