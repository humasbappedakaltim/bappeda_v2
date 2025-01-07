<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survei Kepuasan Masyarakat (SKM) | Bappeda Provinsi Kalimantan Timur</title>
    <script src="{{ asset('jquery-3.7.1/jquery-3.7.1.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('storage/settings/September2020/akBHm4gYEq4pgdfOLIHQ.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
        }

        .card-header-color {
            background-color: #0084db;
        }

        .btn-primary {
            background-color: #0084db;
            border-color: #0084db;
        }

        .btn-primary:hover {
            background-color: #016fb9;
            border-color: #016fb9;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-family: "Roboto", sans-serif;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 mb-3">
                <div class="card shadow rounded">
                    <div class="card-header rounded p-0">

                        <img src="{{ asset('assets/images/survei_kepuasan_masyarakat.png') }}" class="img-fluid rounded shadow" alt="">
                    </div>
                    <div class="card-body">
                        <p class="text-center mb-3 fw-semibold">TERIMA KASIH ATAS PARTISIPASI ANDA DALAM</br>SURVEI KEPUASAN MASYARAKAT (SKM)<br>
                            BAPPEDA PROVINSI KALIMANTAN TIMUR👋</p>
                        <p class="text-center">Semoga dengan survei yang telah Sobat Perencana isi dapat memberikan kontribusi dalam merumuskan impian, harapan, dan perbaikan untuk Bappeda Provinsi Kalimantan Timur.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3">
                <a href="{{ url('/beranda') }}" class="btn btn-primary text-white text-center fw-semibold">Kunjungi Website Bappeda</a>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="text-center text-secondary">
                        &copy; Bappeda Provinsi Kalimantan Timur
                    </div>
                    <div class="text-center text-secondary">
                        Dibuat oleh Humas Bappeda
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
