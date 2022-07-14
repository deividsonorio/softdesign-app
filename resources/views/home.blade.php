@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                    @endif

                    {{ __('You are logged in!') }}

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Book Title</td>
                                <td>Book Author</td>
                                <td>Book Description</td>
                                <td>Book Number of Pages</td>
                                <td colspan="2">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->description}}</td>
                                    <td>{{$book->pages}}</td>
                                    <td><a href="{{ route('books.edit', $book->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="{{ route('books.destroy', $book->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
