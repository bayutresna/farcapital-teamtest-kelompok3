@extends('template.base')

@section('konten')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('user.create') }}" class="btn btn-secondary btn-sm">Tambah Admin</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>

                            <td>{{ $user['nama'] }}</td>
                            <td>{{ $user['username'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>
                                <form action="{{ route('user.destroy', ['id' => $user['id']]) }}" method="post">
                                    <a href="/user/detail/{{ $user['id'] }}" class="btn btn-primary btn-sm">Edit</a>
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
