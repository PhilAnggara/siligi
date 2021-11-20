@extends('layouts.app')
@section('title', 'SILIGI')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Beranda</h3>
  </div>
  <section class="section mt-5">
    <div class="row mb-2">

      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            @if (auth()->user()->profile_pic)
              <img class="card-img" src="{{ Storage::url(auth()->user()->profile_pic) }}" alt="" srcset="">
            @else
              <img class="card-img" src="https://ui-avatars.com/api/?background=37adf7&color=ffffff&bold=true&name={{ auth()->user()->name }}" alt="" srcset="">
            @endif
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3>{{ auth()->user()->name }}</h3>
              <h5 class="card-title text-muted">{{ auth()->user()->email }}</h5>
              <p class="card-text"><small class="text-muted">{{ auth()->user()->username }}</small></p>
              <p class="card-text">{{ auth()->user()->jabatan }}</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>    
@endsection