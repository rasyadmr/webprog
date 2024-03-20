<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="font.css">

    <title>Main Home</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }

        .raleway-bold {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: 800;
            font-style: normal;
        }

        .raleway-light {
            font-family: "Raleway", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }
    </style>

    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand text-primary raleway-bold" href="#">LET'S COOK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Sarapan">Sarapan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Makan Siang">Makan Siang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Makan Malam">Makan Malam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Dessert">Dessert</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row my-3">
            <h3>Resep Terbaru</h3>
        </div>

        
        <div class="card text-white p-0" style="height: 60vh;">
            <div style="background: url('./images/bubur.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; filter: brightness(40%); height: 100%"></div>
            <div class="card-img-overlay card-body d-flex flex-column">
                <h4 class="card-title raleway-bold fs-1">Dr. Guillermo Leffler Jr. Food</h4>
                <p class="card-text">2024-03-20 15:20:00 | By: Rasyad MR</p>
                <p class="card-text bg-primary text-wrap raleway-light rounded px-2" style="width: fit-content;">Sarapan</p>
                <div class="text-end mt-auto">
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <h3>Semua Resep</h3>
        </div>

        @foreach ($foods as $food)
        <div class="card mb-3" id="{{ $food["type"] }}">
            <div class="row g-0">
                <div class="col-md-4 d-flex flex-column" style="background: url('{{ $food["image_url"] }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <p class="card-text bg-primary text-white raleway-light rounded px-2 text-end mt-auto ms-auto m-3" style="width: fit-content;">{{ $food["type"] }}</p>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title">{{ $food["title"] }}</h4>
                        <p class="card-text text-muted">{{ $food["time"] }}</p>
                        <p class="card-text">{{ $food["description"] }}
                        </p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <footer class="bg-secondary bg-gradient d-flex justify-content-center align-items-center" style="height: 10vh">
        <p class="text-center text-white raleway-light m-0 p-0">Copyright &#169; 2022 Rasyad Muhammad Ramdhanazuri. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>