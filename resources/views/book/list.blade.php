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
    <a href="/book_form" type="button" class="btn btn-success my-3"><i class="bi bi-plus-circle"></i> Create a new book</a>

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
                    <td style="width: 22vw">
                        <a href="{{ route('book.detail', ['id' => $book->id]) }}" type="button" class="btn btn-primary m-1"><i class="bi bi-info-circle"></i> Detail</a>
                        <a href="{{ route('book.update', ['book' => $book]) }}" type="button" class="btn btn-secondary m-1"><i class="bi bi-pencil"></i> Update</a>

                        {{-- Method 1 --}}
                        {{-- <a href="{{ route('book.delete', ['book' => $book]) }}" type="button" class="btn btn-danger m-1"><i class="bi bi-trash"></i> Delete</a> --}}

                        {{-- Method 2 (Recommended)--}}
                        <form action="{{ route('book.delete', ['book' => $book]) }}" method="post">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger m-1">
                            @method("DELETE")
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">Data tidak ditemukan</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $books->links() }}
@endsection