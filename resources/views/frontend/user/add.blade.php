@extends('template.base')

@section('konten')
    <div class="card">
        <div class="card-header">
            <h5>Tulis Aspirasi Anda</h5>
        </div>
        <div class="card-body">

            <form action="/user/add" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="nama">nama</label>
                <input type="text" id="nama" name="nama"><br>

                <label for="username">username</label>
                <input type="text" id="username" name="username"><br>

                <label for="email">email</label>
                <input type="email" id="email" name="email"><br>

                <label for="password">password</label>
                <input type="password" id="password" name="password"><br>

                <button type="submit">Add</button>

            </form>
        </div>
    </div>
@endsection
