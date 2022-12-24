<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <button> <a href="/user/show">Add</a> </button>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <td><img style="width: 300px; height:300px;" src="http://localhost:8000/storage/{{ $author['foto'] }}" alt=""></td>
                <td>{{ $user["nama_depan"] }}</td>
                <td>{{ $user["nama_belakang"] }}</td>
                <td>{{ $user["email"] }}</td>
                <td>{{ $user["alamat"] }}</td>
                <td><button> <a href="/user/detail/{{ $user['id']  }}">Edit</a></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
