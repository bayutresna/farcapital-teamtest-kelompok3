@extends('template.base')

@section('konten')
    <div class="card">
        <div class="card-header">
            <a href="/aspirasi/show" class="btn btn-secondary btn-sm">Add</a>
        </div>
        <div class="card-body">

            <label for="nama">nama</label>
            <input type="text" id="nama" name="nama" value="{{ $aspirasi['nama'] }}"><br>

            <label for="cerita">cerita</label>
            <input type="text" id="cerita" name="cerita" value="{{ $aspirasi['cerita'] }}"><br>

            <img style="width:200px; height:200px;" src="{{ $aspirasi['foto'] }}" alt=""><br>
            <label for="foto">foto</label>
            <input type="file" id="foto" name="foto" accept="image/*"><br>

            <label for="judul">judul</label>
            <input type="text" id="judul" name="judul" value="{{ $aspirasi['judul'] }}"><br>

            <label for="email">email</label>
            <input type="email" id="email" name="email" value="{{ $aspirasi['email'] }}"><br>

            <label for="nik">nik</label>
            <input type="text" id="nik" name="nik" value="{{ $aspirasi['nik'] }}"><br>

            </body>

            </html>
        </div>
    </div>
@endsection
