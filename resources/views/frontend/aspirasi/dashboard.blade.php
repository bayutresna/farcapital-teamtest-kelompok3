@extends('template.base')

@section('konten')
    <div class="card">
        <div class="card-body">

            {{-- <a href="/login" class="btn btn-secondary btn-sm">Login</a> --}}
            <h1>Selamat Datang!</h1>
            <h1>Kirim Aspirasimu demi kebaikan bersama</h1>
            <h1>Indonesia Maju</h1>
            <a href="/aspirasi/create" class="btn btn-success btn-lg">Buat Aspirasi</a>
        </div>
    </div>
@endsection
