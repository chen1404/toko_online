<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Weesia - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('stylesheet/style.css') }}" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
        <div class="container">
            <a href="{{ route(Auth::user() == 'penjual' ? 'penjual.home' : 'pembeli.home') }}" class="navbar-brand">
                <img src="{{ asset('images/logo.svg') }}" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a href="{{ route(Auth::user() == 'penjual' ? 'penjual.home' : 'pembeli.home') }}"
                            class="nav-link">Home</a>
                    </li>


                    @if (Auth::user())
                        @if (Auth::user()->role == 'pembeli')
                            <li class="nav-item">
                                <a href="{{ route('user.transaksi') }}" class="nav-link" aria-current="page">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pembeli.keranjang') }}" class="nav-link"
                                    aria-current="page">Keranjang
                                    &nbsp;&nbsp;
                                    <img src="/images/icon-cart-filled.svg" alt="" />
                                    <div class="card-badge">1</div>
                                </a>


                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        @php $stat = Auth::user() ? 'logout' : 'login' @endphp
                        <a class="btn btn-primary" href="{{ "/$stat" }}" class="nav-link " aria-current="page">
                            {{ ucfirst($stat) }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="page-content page-cart">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a
                                        href="{{ route(Auth::user() == 'penjual' ? 'penjual.home' : 'pembeli.home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Profil</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-cart">
            <div class="container mt-1 pt-1">
                <div class="row">
                    <div class="col-12">
                        <h1>Profil Saya</h1>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <img src="/images/product-details-dashboard.png" class="w-100 mb-3"
                                            alt="" />
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Nama</div>
                                                <div class="product-subtitle">Rai</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Email</div>
                                                <div class="product-subtitle">
                                                    satria@gmail.com
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">
                                                    Alamat
                                                </div>
                                                <div class="product-subtitle">
                                                    jl. keliling kota
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">No Hp</div>
                                                <div class="product-subtitle">
                                                    +62 545415245
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Total Amount</div>
                                                <div class="product-subtitle">$280,409</div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="product-title">Mobile</div>
                                                <div class="product-subtitle">
                                                    +628 2020 11111
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <button data-toggle="modal" data-target="#modaleditpass"
                                                    class="btn btn-secondary btn mt-4">
                                                    Lupa Password
                                                </button>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <button data-toggle="modal" data-target="#modaledit"
                                                    class="btn btn-info btn mt-4">
                                                    Edit Akun
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Ubah Password -->
                                <div class="modal fade" id="modaleditpass" tabindex="-1" role="dialog"
                                    aria-labelledby="modaleditpassLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form method="" action="">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Password Sebelumnya</label>
                                                        <input type="text" class="form-control" name=""
                                                            value="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Password Baru</label>
                                                        <input type="text" class="form-control" name=""
                                                            value="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Konfirmasi Password Baru</label>
                                                        <input type="text" class="form-control" name=""
                                                            value="">
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                    <button type="button" class="btn btn-primary">Simpan</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Modal Password  -->

                                <!-- Modal Ubah -->
                                <div class="modal fade" id="modaledit" tabindex="-1" role="dialog"
                                    aria-labelledby="modaleditLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form method="" action="">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama </label>
                                                        <input type="text" class="form-control" name=""
                                                            value="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" class="form-control" name=""
                                                            value="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Alamat</label>
                                                        <input type="text" class="form-control" name=""
                                                            value="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">No Hp</label>
                                                        <input type="text" class="form-control" name=""
                                                            value="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Foto Profil</label>
                                                        <input type="file" class="form-control" name=""
                                                            value="">
                                                    </div>



                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                    <button type="button" class="btn btn-primary">Simpan</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Akhir Modal Ubah -->








                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <h5>Riwayat Pesanan</h5>
                                    </div>
                                    <div class="container  ">
                                        <table class="table">
                                            <thead>
                                                <tr class="text-center">
                                                    <th scope="col">No</th>
                                                    <th scope="col">Gambar</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Total Harga</th>
                                                    <th scope="col">Jumlah Barang</th>
                                                    <th scope="col">Penjual</th>
                                                    <th scope="col">Alamat tujuan</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @php $no = 1 @endphp
                                                @foreach ($transactions as $transaction)
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>
                                                            <img src="/img/products/{{ $transaction->produk->gambar }}"
                                                                alt="" class="cart-image "
                                                                style="width: 75%" />
                                                        </td>
                                                        <td>{{ $transaction->produk->nama }}</td>
                                                        <td>{{ $transaction->total_harga }}</td>
                                                        <td><b>{{ $transaction->jumlah_barang }}x</b></td>
                                                        <td>{{ $transaction->user->name }}</td>
                                                        <td>{{ $transaction->alamat }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{-- <a href="{{ route('user.transaksi', Auth::user()->id) }}" class="btn btn-warning">Checkout</a> --}}
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="store-cart">

        </section>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="pt-4 pb-2">2022 Copyright Weesia. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
</body>

</html>
