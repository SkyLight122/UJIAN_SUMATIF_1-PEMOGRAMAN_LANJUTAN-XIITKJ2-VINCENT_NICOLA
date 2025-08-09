<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('layouts.app')
    <style>
    body{
        background: linear-gradient(135deg, #e0f7fa 0%, #b3e5fc 100%);
    }
</style>
</head>
<body>
    @section('content')

    <div style="display: flex; flex-wrap: wrap;">
        @foreach ($students as $student)
        <x-card id="{{ $student['id'] }}"
            foto="{{ $student['foto'] }}"
            username="{{ $student['username'] }}"
            nama="{{ $student['nama'] }}"
            deskripsi="{{ $student['deskripsi'] }}">
        </x-card>
        @endforeach
    </div>
    @endsection


</body>
</html>


