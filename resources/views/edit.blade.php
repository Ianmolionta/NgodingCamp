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
        <form action="{{ route('EditData', $data->id) }}" method="POST">
            @csrf
            <label for="nim">NIM</label>
            <input type="text" name='nim' id='nim' value="{{$data->nim}}">
            <label for="name">Nama</label>
            <input type="text" name='name' id='name' value="{{$data->name}}">
            <label for="address">address</label>
            <input type="text" name='address' id='address' value="{{$data->address}}">
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>