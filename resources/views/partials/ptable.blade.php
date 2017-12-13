<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Project Name</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
	@foreach($time as $item)

  <tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->project}}</td>
      <td>{{$item->description}}</td>
      <td>{{ Carbon\Carbon::parse($item->date)->formatLocalized('%A %d %B %Y')}}</td>
      
    </tr>
   
  </tbody>

	@endforeach
	</table>