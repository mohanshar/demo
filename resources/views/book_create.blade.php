@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    div.container {
        width: 500px;
        color: #111;
    }

    div.container h2 {
        text-align: center;
    }

    div.container button.btn {
        border: 1px dashed #111;
        color: #111;
    }

    div.container button.btn:hover, div.container button.btn:focus {
        background-color: lightskyblue;
    }
</style>

</head>
<body>

<div class="container">
  <h2>Insert Books</h2>
  <form action="{{ route('book.submit') }}" method="POST" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" placeholder="Enter book name" name="name">
    </div>

    <div class="form-group">
      <label for="pwd">Author:</label>
      <input type="text" class="form-control" placeholder="Enter Author name" name="author">
    </div>

    <div class="form-group">
        <label for="pwd">Price:</label>
        <input type="text" class="form-control" placeholder="Enter Price" name="price">
      </div>

      <div class="form-group">
        <label for="pwd">Publications:</label>
        <input type="text" class="form-control" placeholder="Enter Publications" name="publications">
      </div>

      <div class="form-group">
        <label for="file">Cover:</label>
        <input type="file" class="form-control" name="cover">
      </div>

    <button type="submit" class="btn">Insert</button>
  </form>
</div>

</body>
</html>


@endsection
