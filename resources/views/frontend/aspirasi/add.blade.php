@extends('template.base')

@section('konten')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('aspirasi.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <h5> Tulis Aspirasi Anda</h5>
            <form action="{{ route('aspirasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="nama" class="form-label">nama</label>
                <input type="text" id="nama" name="nama" class="form-control mb-2" required>

                <div class="row mb-2">
                    <div class="col">
                        <label for="email" class="">email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="nik" class="">nik</label>
                        <input type="text" id="nik" name="nik" class="form-control" required>
                    </div>
                </div>

                <label for="judul" class="form-label">judul</label>
                <input type="judul" id="judul" name="judul" class="form-control mb-2" required>

                <label for="cerita" class="form-label">cerita</label>
                <textarea name="cerita" id="cerita" class="form-control mb-2" required></textarea>

                <label for="foto" class="form-label">foto</label>
                <input type="file" id="foto" name="foto" accept="image/*" class="form-control mb-2" required>

                <button type="submit" class="btn btn-success btn-sm">Add</button>

            </form>
        </div>
    </div>
@endsection
