@extends('layouts.app')

@section('title')
  Register
@endsection

@section('content')
  <div class="page-content page-auth" id="register">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center justify-content-center row-login">
            <div class="col-lg-4">
              @if(session('success'))
              <div class="alert alert-success">
                <b>Yeah!</b> {{session('success')}}
              </div>
              @endif
              @if(session('error'))
              <div class="alert alert-danger">
                  <b>Opps!</b> {{session('error')}}
              </div>
              @endif
              <h2>
                Memulai untuk jual beli <br />
                dengan cara terbaru
              </h2>
              <form action="{{url('/action-register')}}" method="POST" class="mt-3" >
                @csrf
                <div class="form-group">
                  <label>Nama</label>
                  <input
                    type="text"
                    class="form-control "
                    placeholder="masukkan nama"
                    v-model="name"
                    name="name" required
                  />
                </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input
                    type="email"
                    class="form-control "
                    placeholder="masukkan email"
                    v-model="email"
                    name="email" required
                  />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input 
                  type="password" 
                  class="form-control" 
                  placeholder="masukkan password" 
                  name="password" required
                  />
                </div>
                <div class="form-group">
                  <label>Confirmation Password</label>
                  <input 
                  type="password" 
                  class="form-control" 
                  placeholder="masukkan password" 
                  name="confirm_password" required
                  />
                </div>
                
              
                <button type="submit" class="btn btn-success btn-block mt-4"
                  >Sign Up Now</button>
                
                <a href="{{ route('login') }}" class="btn btn-signup btn-block mt-4"
                  >Back to Sign In</a
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     
@endsection