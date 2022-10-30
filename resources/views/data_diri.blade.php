<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="justify-content-center align-items-center">
                    <center>
                        <h2> Biodata</h2>
                        <img src="{{$img}}" style="width: 170px; height: 220px " alt="">
                    </center>
                    <div class="row">
                        <h2>Profil</h2>
                        <x-table header="nama" badan="{{$nama}}" />
                        <x-table header="alamat" badan="{{$alamat}}" />
                        <x-table header="Tempat tanggal lahir" badan="{{$TTL}}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>riwayat_Pendidikan</h2>
                        @foreach ($riwayat_Pendidikan as $data)
                        <li>{{$data}}</li>
                        @endforeach
                    </div>
                    <div class="col">
                        <h2>pengalaman_berorganisasi</h2>
                        @foreach ($pengalaman_berorganisasi as $data)
                        <li>{{$data}}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>