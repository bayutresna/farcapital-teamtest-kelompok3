<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

    <form action="/user/update/{{ $user['id'] }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nama">nama</label>
    <input type="text" id="nama" name="nama" value="{{ $user['nama'] }}"><br>

    <label for="username">username</label>
    <input type="text" id="username" name="username" value="{{ $user['username'] }}"><br>

    <label for="email">email</label>
    <input type="email" id="email" name="email" value="{{ $user['email'] }}"><br>

    <label for="password">password</label>
    <input type="password" id="password" name="password" value="{{ $user['password'] }}"><br>


    <button type="submit">Update</button>

    </form>

</body>
</html>
