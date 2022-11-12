<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Store - Your Best Marketplace</title>

    <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('stylesheet/style.css') }}" rel="stylesheet" />
  </head>
<body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/logo.svg" alt="" class="my-4" width="180px"/>
          </div>
          <div class="list-group list-group-flush">
            <a
              href="/dashboard.html"
              class="list-group-item list-group-item-action active"
            >
              Dashboard
            </a>
            <a
              href="/dashboard-product.html"
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
              href="/dashboard-account.html"
              class="list-group-item list-group-item-action"
            >
              My Account
            </a>
            <a
              href="/index.html"
              class="list-group-item list-group-item-action"
            >
              Sign Out
            </a>
          </div>
        </div>

        <!-- Page Content  -->
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
                      <img
                        src="/images/icon-user.png"
                        alt=""
                        class="rounded-circle mr-2 profile-picture"
                      />
                      Hi, Rai
                    </a>
                    <div class="dropdown-menu">
                      <a href="/dashboard.html" class="dropdown-item"
                        >Dashboard</a
                      >
                      <a href="/dashboard-account.html" class="dropdown-item"
                        >Settings</a
                      >
                      <div class="dropdown-divider"></div>
                      <a href="/" class="dropdown-item">Logout</a>
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

          <!-- Section Content-->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today!</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">15,209</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Revenue</div>
                        <div class="dashboard-card-subtitle">$931,290</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transaction</div>
                        <div class="dashboard-card-subtitle">22,409,399</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard-icon-product-1.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Shirup Marzzan</div>
                          <div class="col-md-3">Angga Risky</div>
                          <div class="col-md-3">12 Januari, 2020</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard-icon-product-2.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">LeBrone X</div>
                          <div class="col-md-3">Masayoshi</div>
                          <div class="col-md-3">11 January, 2020</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      href="/dashboard-transactions-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard-icon-product-3.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Soffa Lembutte</div>
                          <div class="col-md-3">Shayna</div>
                          <div class="col-md-3">11 January, 2020</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>

                    <div class="price-container mode-bg" id="pricelist">
        <h3 class="mode-text">Products List</h3>
        <div class="price-table">
          <table class="table">
            <thead class="mode-border">
              <tr class="mode-text">
                <th scope='col'>No</th>
                <th scope='col'>Nama</th>
                <th scope='col'>Harga</th>
                <th scope='col'>Gambar</th>
                <th scope='col'>Deskripsi</th>
              </tr>
            </thead>
            <tbody>
              @if(count($products) > 0)
                @foreach($products as $product)
                  <tr onclick="window.location='#';">
                    <td class='mode-text' scope='row'>
                      <a href="#" class="btn-show">{{ $product->id }}</a>
                    </td>
                    <td class='mode-text'>
                      <a href="#" class="btn-show">{{ $product->nama }}</a>
                    </td>
                    <td class='mode-text'>
                      <a href="#" class="btn-show">{{ $product->harga }}</a>
                    </td>
                    <td class='mode-text'>
                      <a href="#" class="btn-show">{{ $product->gambar }}</a>
                    </td>
                    <td class='mode-text'>
                      <a href="#" class="btn-show"><b>{{ $product->deskripsi }}</b></a>
                    </td>
                  </tr>
                @endforeach
              @endif
                <tr class="row-create text-center" onclick="window.location='{{ route('penjual.create', Auth::user()->id) }}';">
                  <td colspan="5">
                    <a class="text-white btn"><i class="fa-solid fa-plus"></i> Create New List</a>
                  </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>



      
      
      



