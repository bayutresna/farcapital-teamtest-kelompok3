<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspirasi</title>
</head>
<body>

    <label for="nama">nama</label>
    <input type="text" id="nama" name="nama" value="{{ $aspirasi['nama'] }}"><br>

    <label for="cerita">cerita</label>
    <input type="text" id="cerita" name="cerita"  value="{{ $aspirasi['cerita'] }}"><br>

    <img style="width:200px; height:200px;" src="http://localhost:8000/storage/{{ $aspirasi['foto'] }}" alt=""><br>
    <label for="foto">foto</label>
    <input type="file" id="foto" name="foto" accept="image/*" ><br>

    <label for="juduls">juduls</label>
    <input type="juduls" id="juduls" name="juduls" value="{{ $aspirasi['juduls'] }}"><br>

    <label for="email">email</label>
    <input type="email" id="email" name="email" value="{{ $aspirasi['email'] }}"><br>

    <label for="nik">nik</label>
    <input type="text" id="nik" name="nik" value="{{ $aspirasi['nik'] }}"><br>

</body>
</html>
