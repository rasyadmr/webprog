@extends('layout')

@section('content')
@if (@session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> New book has been created
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    <div class="row">
        <div class="col-4">
            <img src="{{ asset($book->photo) }}" alt="" style="max-height: 300px">
        </div>
        <div class="col-8">
            <h4>{{ $book->name }}</h4>
            <h5>{{ $book->genre->name }}</h5>
            <h6><i>{{ $book->publish_date->format('d F Y') }}</i></h6>
            <p>{{ $book->description }}</p>

            <form action="{{ route('book.drop', ['book' => $book]) }}" method = "post">
                @csrf
                <button type="submit" class="btn btn-danger my-2">Delete</button>
            </form>
        </div>

        
    </div>
@endsection