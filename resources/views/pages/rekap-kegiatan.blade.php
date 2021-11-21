@extends('layouts.app')
@section('title', 'SILIGI - Rekap Kegiatan')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Rekap Kegiatan</h3>
    <button class="btn icon icon-left btn-success round" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
      <i class="fal fa-file-plus"></i>
      Masukan Data
    </button>
  </div>
  <section class="section mt-4">
    <div class="row mb-2">

      <div class="col-12">
        <div class="card">
          {{-- <div class="card-body"> --}}

            @if($errors->any())
              <div class="alert alert-danger">
                <p><strong>Ups ada yang tidak beres</strong></p>
                @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
              </div>
            @endif

            <div class="card-body">
              <a href="{{ route('export-rekap-kegiatan') }}" class="btn icon icon-left btn-outline-success">
                <i class="fal fa-file-excel"></i>
                Export
              </a>
            </div>

            <div class="table-responsive">
              @include('includes.table.rekap-kegiatan-table')
            </div>

          {{-- </div> --}}
        </div>
      </div>

    </div>
  </section>
</div>
@include('includes.modal.rekap-kegiatan-modal')
@endsection

@push('addon-script')
<script>
  let tableSatu = document.querySelector('#dataTable');
  let dataTable = new simpleDatatables.DataTable(tableSatu);
</script> 
@endpush