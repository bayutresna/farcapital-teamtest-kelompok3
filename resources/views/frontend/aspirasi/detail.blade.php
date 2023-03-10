@extends('template.base')

@section('judul', 'Detail Aspirasi')

@section('konten')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('aspirasi.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col">
                    <img class="img-fluid" style="width:500px; height:450px;" src="{{ $aspirasi['foto'] }}"
                        alt="{{ $aspirasi['nama'] }}">
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
                        <tr>
                            <td>tanggal</td>
                            <td> : </td>
                            {{-- carbon untuk mengubah format tanggal --}}
                            <td>{{ \Carbon\Carbon::parse($aspirasi['created_at'])->translatedFormat('d F Y H:i:s') }}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
