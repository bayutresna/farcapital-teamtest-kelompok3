@extends('template.base')

@section('konten')
    <div class="card">
        <div class="card-body">

            <h1>Selamat Datang Admin</h1>
            <a href="/aspirasi"><button>Melihat Daftar Aspirasi</button></a>
            <a href="/user"><button>Menambah Admin</button></a>
            <a href="/logout"><button>Logout</button></a>

        </div>
    </div>
@endsection
