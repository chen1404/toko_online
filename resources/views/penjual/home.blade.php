@extends('layouts.app')

@section('title')
  Penjual Homepage
@endsection

@section('content')
  <div class="page-content page-home">
      <section class="container">
        <div class="row">
          <div class="col-6">
            <h2>Buy and sell your textbooks for the best price</h2>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aliquid vero repudiandae minus error earum?</h4>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/backgound/ps5-sticks.webp') }}" alt="" style="height: 400px;">
          </div>
        </div>
      </section>

      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="{{ asset('/images/people-team-svgrepo-com.svg') }}"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Member</p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="{{ asset('/images/categories-furniture.svg') }}"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Furniture</p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="{{ asset('/images/categories-makeup.svg') }}"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Make Up</p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-sneaker.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Sneaker</p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-tools.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Tools</p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/categories-baby.svg" alt="" class="w-100" />
                </div>
                <p class="categories-text">Baby</p>
              </a>
            </div>
          </div>
        </div>
      </section>
      
      <div class="price-container mode-bg" id="pricelist">
        <h3 class="mode-text">Price List</h3>
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
              <tr class="row-create text-center" onclick="window.location='{{ route('penjual.create', $product->penjual_id) }}';">
                <td colspan="5">
                  <a class="text-white btn"><i class="fa-solid fa-plus"></i> Create New List</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection

