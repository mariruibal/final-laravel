<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Página nueva</h1>
        <h2>{{asset('assets/css/style.css')}}</h2>
        <ul>
            <li><a href="{{ url('hola') }}">hola</a></li>
            <li><a href="{{ url('adios') }}">adios</a></li>
        </ul>
    </header>