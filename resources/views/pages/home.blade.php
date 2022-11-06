@extends('layouts.app')

@section('title')
  Store Homepage
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
            <img src="img/backgound/ps5-sticks.webp" alt="" style="height: 400px;">
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
                    src="/images/people-team-svgrepo-com.svg"
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
                    src="/images/categories-furniture.svg"
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
                    src="/images/categories-makeup.svg"
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

      <section class="container">
        <div class="d-flex justify-content-center">
          <div class="card shadow" style="width: 18rem; margin-right: 15px;" onclick="window.location='{{ route('login') }}'">
            <img src="img/logo/pembeli.png" class="card-img-top" alt="..." a href="{{ route('login') }}"></a>>
            
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card shadow" style="width: 18rem;">
            <img src="img/logo/penjual.png" class="card-img-top" alt="...">
            <a href=""></a>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection