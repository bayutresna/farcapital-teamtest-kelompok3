<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
</head>
<body>

    <form action="/aspirasi/add" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nama">nama</label>
    <input type="text" id="nama" name="nama" ><br>

    <label for="cerita">cerita</label>
    <input type="text" id="cerita" name="cerita" ><br>

    <label for="foto">foto</label>
    <input type="file" id="foto" name="foto" accept="image/*" ><br>

    <label for="judul">judul</label>
    <input type="judul" id="judul" name="judul" ><br>

    <label for="email">email</label>
    <input type="email" id="email" name="email" ><br>

    <label for="nik">nik</label>
    <input type="text" id="nik" name="nik" ><br>

    <button type="submit">Add</button>

    </form>

</body>
</html>
