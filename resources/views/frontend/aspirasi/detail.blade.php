@extends('template.base')

@section('konten')
    <div class="card">
        <div class="card-header">
            <a href="/aspirasi/show" class="btn btn-secondary btn-sm">Add</a>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="{{ $aspirasi['foto'] }}" alt="{{ $aspirasi['nama'] }}">
                </div>
                <div class="col">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td>{{ $aspirasi['nama'] }}</td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td> : </td>
                            <td>{{ $aspirasi['email'] }}</td>
                        </tr>
                        <tr>
                            <td>nik</td>
                            <td> : </td>
                            <td>{{ $aspirasi['nik'] }}</td>
                        </tr>
                        <tr>
                            <td>judul</td>
                            <td> : </td>
                            <td>{{ $aspirasi['judul'] }}</td>
                        </tr>
                        <tr>
                            <td>aspirasi</td>
                            <td> : </td>
                            <td>{{ $aspirasi['cerita'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
