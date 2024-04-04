@extends('layout')

@section('content')
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
                    <td><a href="{{ route('book.detail', ['id' => $book->id]) }}" type="button" class="btn btn-primary">Detail</a></td>
                </tr>
            @empty
                <tr><td colspan="3">Data tidak ditemukan</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ $books->links() }}
@endsection