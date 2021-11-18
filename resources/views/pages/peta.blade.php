@extends('layouts.app')
@section('title', 'SILIGI - Data Kecamatan')

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
            <div class="table-responsive mt-4">
              <table class="table table-bordered table-striped table-hover border text-center text-nowrap" id="dataTable">
                <thead class="thead-light">
                  <tr>
                    <th rowspan="2" width="100px">No</th>
                    <th rowspan="2">Desa/Kelurahan</th>
                    <th rowspan="2">Kecamatan</th>
                    <th class="text-wrap">Ranwal Renja</th>
                    <th class="text-wrap">Renja</th>
                    <th class="text-wrap">DPA-PD</th>
                    <th rowspan="2" class="bg-ylw">Anggaran</th>
                  </tr>
                  <tr>
                    <th class="text-wrap">Jumlah Kegiatan</th>
                    <th class="text-wrap">Jumlah Kegiatan</th>
                    <th class="text-wrap">Jumlah Kegiatan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->desa->nama_desa }}</td>
                      <td>{{ $item->desa->kecamatan->nama_kecamatan }}</td>
                      <td>Rp {{ number_format($item->ranwal_renja, 0, ',', '.') }}</td>
                      <td>Rp {{ number_format($item->renja, 0, ',', '.') }}</td>
                      <td>Rp {{ number_format($item->dpa_pd, 0, ',', '.') }}</td>
                      <td class="bg-ylw">Rp {{ number_format($item->anggaran, 0, ',', '.') }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
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