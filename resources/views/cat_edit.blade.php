<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2> FORM</h2>

  <form action="{{route('category.update',$data->id)}}" method="post">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Category Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$data->name}}" >
    </div>
<button type="submit" class="btn btn-primary">update</button>
  </form>

</div>
</body>
</html>

