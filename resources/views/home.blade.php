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


                        <div class="row align-items-md-stretch">
                            <div class="col-md-6">
                                <div class="h-70 p-5 text-white bg-primary rounded-3">
                                    <h2>Books</h2>
                                    <p>Create, edit, update and delete books.</p>
                                    <a class="btn btn-outline-light" type="button" href="{{ route('books.index') }}">Books list</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="h-70 p-5 bg-light border rounded-3">
                                    <h2>Weather</h2>
                                    <p>he alignment and sizing of both column's content for equal-height.</p>

                                    <form method="post" action="{{ route('weather.post') }}">
                                        <div class="form-group">
                                            @csrf
                                            <label for="city">City:</label>
                                            <input type="text" class="form-control" name="city"/>
                                        </div>

                                        <button type="submit" class="btn btn-outline-secondary">Search</button>
                                    </form>


                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
