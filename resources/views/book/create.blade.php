@extends('layout')

@section('content')
    <form action="{{ route('book.store') }}" method = "post">
        @csrf
        <div class="form-group">
            <label for="genre">Genre</label>
            <select class="form-control" name="genre_id" id="">
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
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
            <input type="text" class="form-control" name="name" id="" value="{{ old('name') }}"> {{-- Old('name') Untuk menampilkan nama yang pernah diisi --}} 
            @error('name')
                <div class="alert alert-warning" role="alert">
                    <strong>ALERT!</strong> {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="" rows="3"></textarea>
            @error('description')
                <div class="alert alert-warning" role="alert">
                    <strong>ALERT!</strong> {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="publish_date"></label>
            <input type="date" class="form-control" name="publish_date" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
            @error('publish_date')
                <div class="alert alert-warning" role="alert">
                    <strong>ALERT!</strong> {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection