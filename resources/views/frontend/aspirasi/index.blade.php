<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspirasi</title>
</head>
<body>
    <button> <a href="/aspirasi/show">Add</a> </button>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Cerita</th>
                <th>Foto</th>
                <th>Judul</th>
                <th>Email</th>
                <th>NIK</th>
            </tr>
        </thead>
        <tbody>
            @foreach($aspirasis as $aspirasi)
            <tr>
            <td><img style="width: 300px; height:300px;" src="http://localhost:8000/storage/{{ $aspirasi['foto'] }}" alt=""></td>
                <td>{{ $aspirasi["nama"] }}</td>
                <td>{{ $aspirasi["cerita"] }}</td>
                <td>{{ $aspirasi["judul"] }}</td>
                <td>{{ $aspirasi["email"] }}</td>
                <td>{{ $aspirasi["nik"] }}</td>
                <td><button> <a href="/aspirasi/detail/{{ $aspirasi['id']  }}">Edit</a></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
