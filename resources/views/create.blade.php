@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Books Data') }}</div>

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif
                            <form method="post" action="{{ route('books.store') }}">
                                <div class="form-group">
                                    @csrf
                                    <label for="title">Book Title:</label>
                                    <input type="text" class="form-control" name="title"/>
                                </div>

                                <div class="form-group">
                                    <label for="author">Book Author:</label>
                                    <input type="text" class="form-control" name="author"/>
                                </div>

                                <div class="form-group">
                                    <label for="description">Book Description:</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="pages">Number of Pages:</label>
                                    <input type="text" class="form-control" name="pages"/>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Book</button>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection

