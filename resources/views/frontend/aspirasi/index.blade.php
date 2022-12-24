@extends('template.base')

@section('konten')
    <div class="card">

        <div class="card-header">
            <a href="{{ route('admin') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        {{-- <th>Foto</th> --}}
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Email</th>
                        <th>NIK</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Opsi</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($aspirasis as $aspirasi)
                        <tr>
                            {{-- <td>
                                <img style="width: 200px; height:200px;" src="{{ $aspirasi['foto'] }}" alt="">
                            </td> --}}
                            <td>{{ $aspirasi['nama'] }}</td>
                            <td>{{ $aspirasi['judul'] }}</td>
                            <td>{{ $aspirasi['email'] }}</td>
                            <td>{{ $aspirasi['nik'] }}</td>
                            <td>
                                @switch($aspirasi['is_read'])
                                    @case(1)
                                        Sudah Dibaca
                                    @break

                                    @case(0)
                                        Belum Dibaca
                                    @break

                                    @default
                                        Belum Dibaca
                                @endswitch
                            </td>
                            <td>{{ $aspirasi['created_at'] }}</td>
                            <td>
                                <a href="{{ route('aspirasi.detail', ['id' => $aspirasi['id']]) }}"
                                    class="btn btn-primary btn-sm">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
