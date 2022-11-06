@extends('layouts.app')

@section('title')
  login
@endsection

@section('content')
  <div class="page-content page-auth">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login">
            <div class="col-lg-6 text-center">
              <img
                src="/images/login-placeholder.png"
                alt=""
                class="w-50 mb-4 mb-lg-none"
              />
            </div>
            <div class="col-lg-5">
               @if(session('error'))
                                    <div class="alert alert-danger">
                                        <b>Yeah!</b> {{session('error')}}
                                    </div>
                                    @endif
                                    @if(session('username'))
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> {{session('username')}}
                                    </div>
                                    @endif
              <h2>
                Belanja kebutuhan utama, <br />
                menjadi lebih mudah
              </h2>
              <form action="{{ url('/action-login')}}" method="POST" class="mt-3">
                @csrf
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" class="form-control w-75" name="email"/>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control w-75" name="password"/>
                </div>
                
                <button type="submit" class="btn btn-success btn-block w-75 mt-4">Sign In to My Account</button>
            
                <a
                  href="{{ route('register') }}"
                  class="btn btn-signup btn-block w-75 mt-4"
                  >Sign Up</a
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     
@endsection