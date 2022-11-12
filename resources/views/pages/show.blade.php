<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Pixel: Rental Ps</title>
    <link rel="shortcut icon" href={{ asset("img/background/logo-p.png") }}>

    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>

    <!-- CSS -->
    <link rel="stylesheet" href={{ asset('stylesheet/style.css') }}>
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="card w-50">
            <div class="card-body">
                <h3><strong>READ DATA</strong></h3>
                <hr>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <div class="btn-success">
                    <a class="text-dark btn btn-success text-white" href="/"><i class="fa-sharp fa-solid fa-arrow-left"></i> Back</a>
                </div>
                <table class="table table-borderless">
                    <tr>
                        <td>
                            <h4>Nama</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ $products->nama }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Harga</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ $products->harga }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Gambar</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ $products->gambar }}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Deskripsi</h4>
                        </td>
                        <td>
                            <h4>:</h4>
                        </td>
                        <td>
                            <h4>{{ $products->deskripsi }}</h4>
                        </td>
                    </tr>
                </table>
                <div class="action-container d-flex justify-content-center">
                    <div class="btn">
                        <a class="text-dark btn btn-warning" href="/update/{{ $products->id }}" style="margin-right: 9px;"><i class=""></i> Checkout</a>
                    </div>
                    <form action="{{ route('keranjang', $products) }}" method="post">
                        @csrf
                        <button type="submit" class="text-dark btn btn-primary mb-3 text-white"><i class=""></i> + Keranjang</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
</body>
</html>