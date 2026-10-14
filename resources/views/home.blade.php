<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

    <h1>Halaman Home</h1>

    <p>Username: {{ $username }}</p>

    <p>Last Login: {{ $last_login }}</p>

    <h3>Daftar Pendidikan</h3>

    <ul>
        @foreach ($list_pendidikan as $pendidikan)
            <li>{{ $pendidikan }}</li>
        @endforeach
    </ul>

</body>
</html>
