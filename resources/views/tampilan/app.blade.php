<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    @section('header')
    <div class="carousel-item active">
        <img src={{ asset('image/metyu.jpg') }} style="width: 100px; height: 250px;" alt="...">
    </div>
    @include('tampilan.header')
    @show
    <!-- <div class="">
        <main class="text-center">
            <div class="big-light p-5 rounded"> -->

    @yield('content')
    <!-- </div> -->
    </main>
    </div>

</body>

</html>