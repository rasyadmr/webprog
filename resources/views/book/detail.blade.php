@extends('layout')

@section('content')
    <div class="row">
        <div class="col-4">
            <img src="{{ asset($book->photo) }}" alt="">
        </div>
        <div class="col-8">
            <h4>{{ $book->name }}</h4>
            <h5>{{ $book->genre->name }}</h5>
            <h6><i>{{ $book->publish_date->format('d F Y') }}</i></h6>
            <p>{{ $book->description }}</p>
        </div>
    </div>
@endsection