<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>EIDIT AND DELETE FORM</h2>
   <form action="{{route('create.update',$data->id)}}" method="post">
    @csrf
    <div class="mb-3 mt-3">
      <label for="fname">First Name</label>
      <input type="fname" class="form-control" id="fname" placeholder="Enter fname" name="fname" value="{{$data->fname}}">
    </div>
    <div class="mb-3">
      <label for="lname">Last Name:</label>
      <input type="lname" class="form-control" id="lname" placeholder="Enter lname" name="lname" value="{{$data->lname}}">
    </div>
    <div class="mb-3">
        <label for="email">EMAIL:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$data->email}}">
      </div>
      <div class="mb-3">
        <label for="password">PASSWORD:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="{{$data->password}}">
      </div>
      <div class="mb-3">
        <label for="phone">PHONE:</label>
        <input type="integer" class="form-control" id="number" placeholder="Enter phone" name="phone" value="{{$data->phone}}">
      </div>

      <div class="mb-3">
        <label for="address">Address:</label>
        <textarea type="text" class="form-control" id="address" placeholder="Enter address" name="address" value = "{{ $data->address }}">{{ $data->address }}</textarea>

    <button type="submit" class="btn btn-primary">update</button>
  </form>
</div>

</body>
</html>

  </form>
</div>

</body>
</html>
