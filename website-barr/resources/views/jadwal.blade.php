@extends('layouts.main')

@section('container')
    <div class="container">
        <head>
            <title>Jadwal Film</title>
            <style>
                table, th, td {
                      border: 1px solid black;
                      border-collapse: collapse;
                      padding: 5px;
                      text-align: center;
                      margin: 20px auto;
                }
            </style>
        </head>
        <body>
            <h1>Jadwal Film Hari Ini</h1>
            <table>
                <tr>
                    <th>Jam Tayang</th>
                    <th>Judul Film</th>
                    <th>Studio</th>
                </tr>
                <tr>
                    <td>10.00</td>
                    <td>Joker</td>
                    <td>Studio 1</td>
                </tr>
                <tr>
                    <td>12.30</td>
                    <td>Avengers: Endgame</td>
                    <td>Studio 2</td>
                </tr>
                <tr>
                    <td>15.00</td>
                    <td>Spider-Man: Far From Home</td>
                    <td>Studio 1</td>
                </tr>
                <tr>
                    <td>17.30</td>
                    <td>Toy Story 4</td>
                    <td>Studio 2</td>
                </tr>
            </table>
        </body>
    </div>
@endsection