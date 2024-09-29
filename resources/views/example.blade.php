<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Data</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>nim</th>
                    <th>address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d) 
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $d->name}}</td>
                        <td>{{ $d->nim}}</td>
                        <td>{{ $d->address}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/">kembali</a>
    </div>
    <div>
        <form action="{{ url('example/create') }}" method="POST">
            @csrf
            <label for="nim">NIM</label>
            <input type="text" name='nim' id='nim'>
            <label for="name">Nama</label>
            <input type="text" name='name' id='name'>
            <label for="address">address</label>
            <input type="text" name='address' id='address'>
            <button type="submit">Simpan</button>
        </form>
    </div>
    @include('sweetalert::alert')
</body>
</html>