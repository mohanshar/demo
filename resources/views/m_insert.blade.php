<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
    div.container {
        width: 500px;
    }

    div.container h2 {
        text-align: center;
    }
</style>

</head>
<body>

<div class="container">
  <h2>Insert Members Data</h2>
  <form action="{{ route('m.submit') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="email">Member Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Member name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Member Address:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Member Address" name="address">
    </div>
    <div class="form-group">
        <label for="pwd">Member Age:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Member Age" name="age">
      </div>
      <div class="form-group">
        <label for="pwd">Member Contact:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Member Contact" name="contact">
      </div>

      <div class="form-group">
        <label for="pwd">Member Email:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter Member Email" name="email">
      </div>
    <button type="submit" class="btn btn-default">Add New Data</button>
  </form>
</div>

</body>
</html>
