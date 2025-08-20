<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Selamat Datang {{ $firstName }} {{ $lastName }}</h1>

    <p>Data yang kamu masukkan:</p>
    <ul>
        <li>Nama Depan: {{ $firstName }}</li>
        <li>Nama Belakang: {{ $lastName }}</li>
    </ul>

    <a href="{{ route('home') }}">Kembali ke Home</a>
</body>
</html>
