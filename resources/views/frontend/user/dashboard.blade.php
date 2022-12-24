@extends('template.base')

@section('judul', 'Dashboard Admin')

@section('konten')
    <div class="card">
        <div class="card-header">Edit Admin</div>
        <div class="card-body">

            <h1>Selamat Datang Admin</h1>
            <a href="/aspirasi"><button>Melihat Daftar Aspirasi</button></a>
            <a href="/user"><button>Menambah Admin</button></a>

        </div>
    </div>
@endsection
