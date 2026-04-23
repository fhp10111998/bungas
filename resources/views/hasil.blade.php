<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>Selamat Datang {{ $data['first'] }}</h1>
    {{ $data['last'] }}
    {{ $data['jeniskelamin'] }}
    {{ $data['negara'] }}
    <ul>
        @foreach ($data['bahasa'] as $b)
            <li>{{ $b }}</li>
        @endforeach
    </ul>
    {{ $data['bio'] }}
    <p>Terimakasih Sudah berbelanja di Shop @Garden. Komunitas Kita Bersama</p>
</body>
</html>