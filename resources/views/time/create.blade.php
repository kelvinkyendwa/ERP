@extends ('layouts.app')

@section('content')
<br><br>
<div class="container">

<h3>Timesheets Application</h3>
<hr>

	{!! Form::open(['url' => 'time/']) !!}

		{{ csrf_field() }}

		@include('partials.timeform')

{!! Form::close() !!}

	<hr>

</div>

@endsection
