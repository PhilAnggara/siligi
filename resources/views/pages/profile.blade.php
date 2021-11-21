@extends('layouts.app')
@section('title', 'SILIGI - Profil')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Perbarui Informasi Profil Anda</h3>
  </div>
  <section class="section mt-4">
    <div class="row mb-2">

      <div class="col-12">
        <div class="card">
          <div class="card-body">
            
            <div class="row">

              <div class="col-md-6 mb-5 mb-md-0">
                @if (auth()->user()->profile_pic)
                  <img class="rounded mx-auto d-block img-thumbnail" src="{{ Storage::url(auth()->user()->profile_pic) }}" alt="" srcset="">
                @else
                  {{-- <img class="rounded mx-auto d-block img-thumbnail w-100" src="{{ Storage::url('examples/user-1.jpg') }}" alt="" srcset=""> --}}
                  <img class="rounded mx-auto d-block img-thumbnail w-100" src="https://ui-avatars.com/api/?background=37adf7&color=ffffff&bold=true&name={{ auth()->user()->name }}" alt="" srcset="">
                @endif
                <div class="d-flex justify-content-center mt-3">
                  <button class="btn icon icon-left btn-info round me-2" data-bs-toggle="modal" data-bs-target="#uploadFotoModal">
                    <i class="fal fa-paperclip"></i>
                    {{ auth()->user()->profile_pic ? 'Ganti Foto Profil' : 'Upload Foto Profile' }}
                  </button>
                  @if (auth()->user()->profile_pic)
                    <button class="btn icon icon-left btn-outline-danger round" data-bs-toggle="modal" data-bs-target="#hapusFotoModal">
                      <i class="fal fa-trash"></i>
                      Hapus Foto
                    </button>
                  @endif
                </div>
              </div>

              <div class="col-md-6 order-md-first">
                <form action="{{ route('profile-update') }}" method="post">
                  @method('put')
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="Text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', auth()->user()->name) }}">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email', auth()->user()->email) }}">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="Text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username', auth()->user()->username) }}">
                    @error('username')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="id_dinas" class="form-label">Dinas</label>
                    <select class="form-select @error('id_dinas') is-invalid @enderror" name="id_dinas" id="id_dinas">
                      @foreach ($dinas as $d)
                        <option value="{{ $d->id }}">{{ $d->nama_dinas }}</option>
                      @endforeach
                    </select>
                    @error('id_dinas')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="Text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" id="nama" value="{{ old('jabatan', auth()->user()->jabatan) }}">
                    @error('jabatan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mt-4">
                    Simpan Perubahan
                  </button>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>
</div>
@include('includes.modal.profil-modal')
@endsection