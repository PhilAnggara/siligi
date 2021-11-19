@extends('layouts.auth')
@section('title', 'SILIGI - Buat Akun')

@section('content')
<div class="col-md-5 col-sm-12 mx-auto">
  <div class="card pt-1">
    <div class="card-body">
      <div class="text-center mb-1">
        <img src="{{ url('frontend/images/logo.png') }}" height="80" class='mb-4'>
        <h3>SILIGI</h3>
        <p>Sistem Informasi Pengendalian Terintegrasi BAPPEDALITBANG Kabupaten Banggai</p>
        {{-- <p>Buat Akun</p> --}}
      </div>
      <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
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
          <label for="profile_pic">Foto Profil (Optional)</label>
          <div class="position-relative">
            <input id="profile_pic" type="file" class="form-control @error('profile_pic') is-invalid @enderror" name="profile_pic" value="{{ old('profile_pic') }}" autofocus autocomplete="off">
            <div class="form-control-icon @error('profile_pic') invisible @enderror">
              <i data-feather="camera"></i>
            </div>
            @error('profile_pic')
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
          <label for="id_dinas">Dinas</label>
          <div class="position-relative">
            <div class="input-group mb-3">
              <label class="input-group-text" for="id_dinas"><i data-feather="briefcase"></i></label>
              <select class="form-select @error('id_dinas') is-invalid @enderror" id="id_dinas" name="id_dinas" required>
                <option value="" selected disabled>-- Pilih Dinas --</option>
                @foreach ($dinas as $item)
                <option {{ $item->id == old('id_dinas') ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->nama_dinas }}</option>
                @endforeach
              </select>
              @error('id_dinas')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
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