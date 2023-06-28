<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Controller & View pada Laravel</title>
    {{-- Masukkan folder yang berisi css atau gambar menggunakan @vite --}}
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Belajar Controller & View pada Laravel</h1>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/laravel.png') }}" alt="image">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                {{-- Mengarahkan button Home ke tampilan My Profile --}}
                <a class="btn btn-dark" href="{{ url('/home') }}">Home</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
