<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Store - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('stylesheet/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
                <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
            </div>
            <div class="list-group list-group-flush">
                <a
                href="{{ route('penjual.home') }}"
                class="list-group-item list-group-item-action"
                >
                Dashboard
                </a>
                <a
                href="{{ route('produk') }}"
                class="list-group-item list-group-item-action"
                >
                My Products
                </a>
                <a
                href="/dashboard-transactions.html"
                class="list-group-item list-group-item-action"
                >
                Transactions
                </a>
                <a
                href="/dashboard-settings.html"
                class="list-group-item list-group-item-action"
                >
                Store Settings
                </a>
                <a
                href="/penjual/user"
                class="list-group-item list-group-item-action active"
                >
                My Account
                </a>
                <a
                href="/logout"
                class="list-group-item list-group-item-action"
                >
                Sign Out
                </a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav
              class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
              data-aos="fade-down"
            >
              <div class="container-fluid">
                <button
                  class="btn btn-secondary d-md-none mr-auto mr2"
                  id="menu-toggle"
                >
                  &laquo; Menu
                </button>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Dekstop Menu -->
                  <ul class="navbar-nav d-none d-lg-flex ml-auto">
                    <li class="nav-item dropdown">
                      <a
                        href="#"
                        class="nav-link"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                      >
                        Hi, {{ Auth::user()->name }}
                        <img
                          src="/images/icon-user.png"
                          alt=""
                          class="rounded-circle mr-2 profile-picture"
                        />
                      </a>
                      <div class="dropdown-menu">
                        <a href="/dashboard.html" class="dropdown-item"
                          >Dashboard</a
                        >
                        <a href="/penjual/user" class="dropdown-item"
                          >Settings</a
                        >
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item">Logout</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link d-inline-block mt-2">
                        <img src="/images/icon-cart-filled.svg" alt="" />
                        <div class="card-badge">3</div>
                      </a>
                    </li>
                  </ul>
  
                  <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                      <a href="#" class="nav-link"> Hi, Rai </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link d-inline-block"> Cart </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

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
                    <div class="container mt-5 pt-5">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <img src="{{ asset('img/profile/'.$user->image) }}" class="rounded-4 w-100 mb-3"
                                                    alt="" style="border-radius: 26px;"
                                                />
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="product-title">Nama</div>
                                                        <div class="product-subtitle">{{ $user->name }}</div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="product-title">Email</div>
                                                        <div class="product-subtitle">
                                                        {{ $user->email }}
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="product-title">
                                                            Alamat
                                                        </div>
                                                        <div class="product-subtitle">
                                                            {{ $user->address }}
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="product-title">No Hp</div>
                                                        <div class="product-subtitle">
                                                            {{ $user->number }}
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="product-title">Total Pengeluaran</div>
                                                        {{-- <div class="product-subtitle">Rp.{{ number_format($total_pengeluaran) }}</div> --}}
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="product-title">Total Barang</div>
                                                        <div class="product-subtitle">
                                                            {{-- {{ $total_barang }} barang --}}
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

                                                    <form action="{{ url('/user/action-pwd') }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Password Sebelumnya</label>
                                                                <input type="password" class="form-control" name="password_old">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Password Baru</label>
                                                                <input type="password" class="form-control" name="password_new">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Konfirmasi Password Baru</label>
                                                                <input type="password" class="form-control" name="password_confirm">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
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

                                                    <form method="post" action="{{ url('/user/action-data') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Nama </label>
                                                                <input type="text" class="form-control" name="name"
                                                                    value="{{ $user->name }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Email</label>
                                                                <input type="text" class="form-control" name="email"
                                                                    value="{{ $user->email }}">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Alamat</label>
                                                                <input type="text" class="form-control" name="address"
                                                                    value="{{ $user->address }}">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">No Hp</label>
                                                                <input type="text" class="form-control" name="mobile"
                                                                    value="{{ $user->number }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Foto Profil</label>
                                                                <input type="file" class="form-control" name="file"
                                                                    value="{{ $user->image }}"
                                                                >
                                                                <p style="font-size: 10px;"><span style="color: red;">*</span> abaikan jika tidak ingin merubah data</p>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="store" value="false" hidden>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
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
        </div>
    </div>

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