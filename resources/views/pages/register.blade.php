@extends('layouts.login.content')

@section('content')
<section class="vh-100 py-5">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{ $route }}" method="POST">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <h1>{{ $title }}</h1>
            </div>
            <hr/>
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Full Name</label>
              <input type="text" id="name" name="name" class="form-control form-control-lg"
              />
                @error('name')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
              <input type="email" id="email" name="email" class="form-control form-control-lg"
                 />
                 @error('email')
                    <div class="text-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>  
            <div class="form-outline mb-3">
                <label class="form-label" for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg"
                 />
                 @error('password')
                 <div class="text-danger mt-2">
                     {{ $message }}
                 </div>
             @enderror
            </div>
            <div class="form-outline mb-3">
                <label class="form-label" for="confirm_password">Confirm Password</label>
              <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg"
                 />
                 @error('confirm_password')
                 <div class="text-danger mt-2">
                     {{ $message }}
                 </div>
             @enderror
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                </div>
              <p class="small fw-bold mt-2 pt-1 mb-0">Sudah punya akun? <a href="/"
                  class="link-primary">Login Disini</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@stop