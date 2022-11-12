@extends('layouts.app')

@section('title')
  Store Homepage
@endsection

@section('content')
  <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#storeCarousel"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="/images/banner.png"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/Banner1.jpg"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.jpg"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Kategori</h5>
            </div>
          </div>
          <div class="row">
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/people-team-svgrepo-com.svg"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Elektronik</p>
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
                    src="/images/healthcare.png"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Perawatan</p>
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
                    src="/images/handphone.png"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Handphone</p>
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
                    src="/images/furniture.png"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Perabotan</p>
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
                    src="/images/watch.png"
                    alt=""
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Jam</p>
              </a>
            </div>
            <div
              class="col-6 col-md col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/otomotif.png" alt="" class="w-100" />
                </div>
                <p class="categories-text">Otomotif</p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Produk Baru</h5>
            </div>
          </div>
          <div class="row">
            @foreach($products as $product)
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a href="/show/{{ $product->id }}" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      background-image: url('/img/products/{{ $product->gambar }}');
                    "
                  ></div>
                </div>
                <div class="products-text">{{ $product->nama }}</div>
                <div class="products-price">Rp.{{ $product->harga }}</div>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </div>
@endsection