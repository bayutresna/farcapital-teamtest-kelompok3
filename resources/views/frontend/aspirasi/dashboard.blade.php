@extends('template.base')

@section('judul', 'Dashboard User')

@section('konten')


    <div class="card">
        <div class="card-body">

            <h1>Selamat Datang!</h1>
            <h1>Kirim Aspirasimu demi kebaikan bersama</h1>
            <h1>Indonesia Maju</h1>
            <a href="/aspirasi/create" class="btn btn-success btn-lg">Buat Aspirasi</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            {{ $errors->first() }}.
        </div>
    @endif
@endsection
