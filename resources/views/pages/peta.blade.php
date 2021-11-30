@extends('layouts.app')
@section('title', 'SILIGI - Peta')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Peta</h3>
    <button class="btn icon icon-left btn-success round" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
      <i class="fal fa-file-plus"></i>
      Tambah Data
    </button>
  </div>
  <section class="section mt-4">
    <div class="row mb-2">

      <div class="col-12">
        <div class="card">
          <div class="card-content">
            {{-- <img src="{{ url('frontend/images/peta.jpeg') }}" class="card-img-top img-fluid" alt="singleminded"> --}}
            <div id="map"></div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card">

          <div class="card-body">            
            <a href="{{ route('export-peta') }}" class="btn icon icon-left btn-outline-success">
              <i class="fal fa-file-excel"></i>
              Export
            </a>
          </div>

          <div class="table-responsive">
            @include('includes.table.peta-table')
          </div>

        </div>
      </div>

    </div>
  </section>
</div>
@include('includes.modal.peta-modal')
@endsection

@push('addon-script')
<script>
  let tableSatu = document.querySelector('#dataTable');
  let dataTable = new simpleDatatables.DataTable(tableSatu);
</script> 
<script src="{{ url('frontend/scripts/main.js') }}"></script> 
@endpush