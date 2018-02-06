@extends ('layouts.app')

@section('content')
<div class="container">
	<h3>Edit an Entry</h3>
	@include('layouts.errors')
	<form action="/over" method="POST">
		{{ csrf_field() }}
		@include('partials.timeform')

	</form>
	</form>

</div>


@endsection
