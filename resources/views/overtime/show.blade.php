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
        <th scope="col">Hours</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    @foreach($over->user as $item)
    <tbody>
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->project['project']}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->hours}}</td>
        
        @if($item->isAuthorised())
        <td class="success">Authorised</td>
        @else
        <td class="warning">Pending</td>
        @endif
        <td><a href="{{$item->id}}/edit" class="btn btn-warning">Edit</a></td>
      </tr>
      
    </tbody>
    @endforeach
  </table>
  <p>Go back to previous pages</p>
<ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('over/create') }}">Fill</a>
      </li>
       <li class="nav-item"> <a class="nav-link">/</a></li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('over') }}">Home</a>
      </li>
          
    
</ul>
      
    </div>
    @endsection