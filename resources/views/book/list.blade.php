@extends('layout')

@section('content')
@if (@session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> New book has been deleted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td scope="row">{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td style="width: 20vw">
                        <a href="{{ route('book.detail', ['id' => $book->id]) }}" type="button" class="btn btn-primary m-1">Detail</a>
                        <a href="{{ route('book.update', ['book' => $book]) }}" type="button" class="btn btn-success m-1">Update</a>
                        <a href="{{ route('book.delete', ['book' => $book]) }}" type="button" class="btn btn-danger m-1">Delete</a>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">Data tidak ditemukan</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $books->links() }}
@endsection