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
	
</div>

@endsection