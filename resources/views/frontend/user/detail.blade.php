@extends('template.base')

@section('judul', 'Edit Admin')

@section('konten')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">

            <form action="/user/update/{{ $user['id'] }}" method="POST">
                @csrf

                <label for="nama" class="form-label">nama</label>
                <input type="text" id="nama" name="nama" value="{{ $user['nama'] }}" class="form-control">

                <label for="username" class="form-label">username</label>
                <input type="text" id="username" name="username" value="{{ $user['username'] }}" class="form-control">

                <div class="row">
                    <div class="col">
                        <label for="email" class="form-label">email</label>
                        <input type="email" id="email" name="email" value="{{ $user['email'] }}"
                            class="form-control">
                    </div>
                    <div class="col">
                        <label for="password" class="form-label">password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Update</button>

            </form>

        </div>
    </div>
@endsection
