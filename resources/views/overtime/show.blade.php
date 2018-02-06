@extends ('layouts.app')

@section('content')

<div class="container">
	<h3>All Overtime Entries</h3>
	<hr>
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Project Name</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
	@foreach($over as $item)

  <tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->project}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->date}}</td>
      <td><a href="{{$item->id}}/edit" class="btn btn-warning">Edit</a></td>
    </tr>

  </tbody>

	@endforeach
	</table>
</div>

@endsection
