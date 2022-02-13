@extends('layouts.master')
@section('content')

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">

<thead>
    <tr>
        <th scope='col'>id</th>
        <th scope='col'>Name</th>
        <th scope='col'>Author</th>
        <th scope='col'>Price</th>
        <th scope='col'>Publications</th>
        <th scope='col'>Cover</th>
        <th scope='col'>Actions </th>
    </tr>
</thead>

<tbody>
    @if(isset($books))
        @foreach($books as $book)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $book->book_Name }}</td>
        <td>{{ $book->book_AuthorName }}</td>
        <td>{{ $book->book_Price }}</td>
        <td>{{ $book->book_Publications }}</td>
        <td>
            <img src="{{ $book->cover }}" height="50px" width="80px">
        </td>
            <td>
            <a href="{{ route('books.edit', $book->id) }}">Edit</a>
            <a href="{{ route('books.delete', $book->id) }}">Delete</a>
            </td>
    </tr>
        @endforeach
    @endif
</tbody>

</table>


@endsection
