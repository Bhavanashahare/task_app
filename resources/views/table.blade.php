<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">
    @if(session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> {{ session()->get('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

@endif
  <h2> TABLE </h2>
  <a href="{{route('create.form')}}"><button type="button" class="btn btn-info">ADD</button></a>


  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone</th>
        
        <th>Address</th>
    <th>Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
<tr>
    <td>{{$d->id}}</td>
    <td>{{$d->fname}}</td>
    <td>{{$d->lname}}</td>
    <td>{{$d->email}}</td>
    <td>{{$d->password}}</td>
    <td>{{$d->phone}}</td>
    <td>{{$d->address}}</td>
    <td><a href="{{url('create/edit',$d->id)}}"><button type="button" class="btn btn-warning">edit</button></a>
    <a href="{{url('create/delete',$d->id)}}"><button type="button" class="btn btn-danger">delete</button></a></td>
</tr>
@endforeach
    </tbody>
  </table>
  {{$data->links()}}
</div>

</body>
</html>
