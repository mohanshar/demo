@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <a href="{{ route('book.create') }}" class="btn btn-primary">Create New</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Name</th>
                                <th scope="col">Author</th>
                                <th scope="col">Price</th>
                                <th scope="col">Publications</th>
                                <th scope="col">Created On</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
    
                            @forelse ($books as $book)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Auth::user()->name ?? '' }}</td>
                                <td>{{ $book->book_Name ?? '' }}</td>
                                <td>{{ $book->book_AuthorName ?? '' }}</td>
                                <td>{{ $book->book_Price ?? '' }}</td>
                                <td>{{ $book->book_Publications ?? '' }}</td>
                                <td>{{ $book->created_at ?? '' }}</td>
                                <td>
                                    <a href=" {{ route('books.edit', $book->id) }} ">Edit</a>
                                    <a href=" {{ route('books.delete', $book->id) }} ">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" align="center"> No Records!! </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
