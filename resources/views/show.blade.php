
@include('layouts.header')



<table class="table">
  <thead>
    <tr>
      <th scope="col">registeration id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">UPDATE</th>
      <th scope="col">EDIT</th>
      <th scope="col">ACTION</th>
      <th scope="col">VIEW</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach( $records as $person)
    <tr>
      <td >{{$person->id}}</td>
      <td>{{$person->name}}</td>
      <td>{{$person->email}}</td>
      <td><a class='btn btn-danger' href="{{url('/delete' )}}/{{$person->id}}">Delete</a></td>
      <!-- <td><a class='btn btn-danger' href="{{url('/update' )}}/{{$person->id}}">Update</a></td> -->
      <td><a class='btn btn-danger' href="{{url('/edit' )}}/{{$person->id}}">Edit</a></td>
      <!-- <td><a class='btn btn-danger' href="{{url('/view' )}}/{{$person->id}}">View</a></td> -->
      
    </tr>
    @endforeach
  </tbody>
</table>

@include('layouts.footer')