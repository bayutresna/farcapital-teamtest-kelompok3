@extends('template.base')

@section('konten')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('aspirasi.index') }}" class="btn btn-secondary btn-sm">Kembali</a> Input Admin
        </div>
        <div class="card-body">

            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="nama" class="form-label">nama</label>
                <input type="text" id="nama" name="nama" class="form-control"><br>

                <label for="username" class="form-label">username</label>
                <input type="text" id="username" name="username" class="form-control"><br>

                <label for="email" class="form-label">email</label>
                <input type="email" id="email" name="email" class="form-control"><br>

                <label for="password" class="form-label">password</label>
                <input type="password" id="password" name="password" class="form-control"><br>

                <button type="submit">Add</button>

            </form>
        </div>
    </div>
@endsection
