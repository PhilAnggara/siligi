@extends('layouts.app')
@section('title', 'SILIGI')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Beranda</h3>
  </div>
  <section class="section mt-5">
    <div class="row mb-2">

      <div class="card">
        <div class="card-content">
          <div class="row no-gutters">
            <div class="col-md-12 col-lg-6">
              @if (auth()->user()->profile_pic)
                <img src="{{ Storage::url(auth()->user()->profile_pic) }}" class="h-100 w-100 rounded-left">
              @else
                <img src="https://ui-avatars.com/api/?background=37adf7&color=ffffff&bold=true&name={{ auth()->user()->name }}" class="h-100 w-100 rounded-left">
              @endif
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="card-body">
                <div class="d-flex justify-content-end mb-1 mb-md-5">
                  <a href="{{ route('profile') }}" class="btn icon icon-left btn-outline-primary round">
                    <i class="fal fa-user-edit" data-toggle="tooltip" title="View"></i>
                    Edit Profil
                  </a>
                </div>
                <h2 class="text-dark">{{ auth()->user()->name }}</h2>
                <h4>{{ auth()->user()->email }}</h4>
                <p class="card-text">{{ auth()->user()->username }}</p>
                <hr>
                <h4 class="card-title">{{ auth()->user()->dinas->nama_dinas }}</h4>
                <p class="card-text text-ellipsis">{{ auth()->user()->jabatan }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>    
@endsection