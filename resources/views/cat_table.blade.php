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
<h2> TABLE </h2>
  <a href="{{route('category.create')}}"><button type="button" class="btn btn-info">Add</button></a>


  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th> Name</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
<tr>
    <td>{{$d->id}}</td>
    <td>{{$d->name}}</td>
<td><a href="{{route('category.edit',$d->id)}}"><button type="button" class="btn btn-warning">edit</button></a>
<a href="{{route('category.delete',$d->id)}}"><button type="button" class="btn btn-danger">delete</button></a>
</td>
</tr>
@endforeach
    </tbody>
  </table>

</div>

</body>
</html>
