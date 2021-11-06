@extends('layouts.auth')
@section('title', 'SILIGI - Buat Akun')

@section('content')
<div class="col-md-5 col-sm-12 mx-auto">
  <div class="card pt-1">
    <div class="card-body">
      <div class="text-center mb-1">
        {{-- <img src="{{ url('frontend/images/logo.png') }}" height="48" class='mb-4'> --}}
        LOGO
        <h3>SILIGI</h3>
        <p>Buat Akun</p>
      </div>
      <form action="" method="POST">
        @csrf

        <div class="form-group position-relative has-icon-left">
          <label for="name">Nama</label>
          <div class="position-relative">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus autocomplete="off">
            <div class="form-control-icon @error('name') invisible @enderror">
              <i data-feather="user"></i>
            </div>
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group position-relative has-icon-left">
          <label for="username">Username</label>
          <div class="position-relative">
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus autocomplete="off">
            <div class="form-control-icon @error('username') invisible @enderror">
              <i data-feather="user-check"></i>
            </div>
            @error('username')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group position-relative has-icon-left">
          <label for="email">Email</label>
          <div class="position-relative">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
            <div class="form-control-icon @error('email') invisible @enderror">
              <i data-feather="mail"></i>
            </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group position-relative has-icon-left">
          <label for="jabatan">Jabatan</label>
          <div class="position-relative">
            <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" required autofocus autocomplete="off">
            <div class="form-control-icon @error('jabatan') invisible @enderror">
              <i data-feather="pocket"></i>
            </div>
            @error('jabatan')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group position-relative has-icon-left">
          <div class="clearfix">
            <label for="password">Kata Sandi</label>
          </div>
          <div class="position-relative">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
            <div class="form-control-icon @error('password') invisible @enderror">
              <i data-feather="lock"></i>
            </div>
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group position-relative has-icon-left">
          <div class="clearfix">
            <label for="password-confirm">Konfirmasi Kata Sandi</label>
          </div>
          <div class="position-relative">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off">
            <div class="form-control-icon">
              <i data-feather="lock"></i>
            </div>
          </div>
        </div>

        <div class="clearfix mt-4">
          <a href="{{ route('login') }}">Sudah punya akun? masuk</a>
          <button type="submit" class="btn btn-primary float-end">Daftar</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection