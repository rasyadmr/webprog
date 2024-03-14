@extends('..layout')

@section('content')
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student['NIM'] }}</td>
            <td>{{ $student['Name'] }}</td>
            <td>{{ $student['Prodi'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection