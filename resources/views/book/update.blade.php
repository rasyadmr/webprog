@extends('layout')

@section('content')
    <form action="{{ route('book.edit', ['book' => $book]) }}" method = "post">
        @csrf
        <div class="form-group">
            <label for="genre">Genre</label>
            <select class="form-control" name="genre_id" id="">
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}" 
                        @if ($genre->id === $book->genre->id)
                            selected
                        @endif>{{ $genre->name }}</option>
                @endforeach
            </select>

            @error('genre_id')
                <div class="alert alert-danger" role="alert">
                    <strong>ALERT!</strong> {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="" value="{{ $book->name }}"> {{-- Old('name') Untuk menampilkan nama yang pernah diisi --}} 
            @error('name')
                <div class="alert alert-warning" role="alert">
                    <strong>ALERT!</strong> {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="" rows="3">{{ $book->description }}</textarea>
            @error('description')
                <div class="alert alert-warning" role="alert">
                    <strong>ALERT!</strong> {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="publish_date">Publish Date</label>
            <input type="date" class="form-control" name="publish_date" id="" aria-describedby="helpId" placeholder="" value="{{ $book->publish_date->format('Y-m-d') }}">
            
            @error('publish_date')
                <div class="alert alert-warning" role="alert">
                    <strong>ALERT!</strong> {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary my-2">Edit</button>
    </form>
@endsection