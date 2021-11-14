@extends('layouts.app')
@section('title', 'SILIGI - Data Kecamatan')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Peta</h3>
  </div>
  <section class="section mt-4">
    <div class="row mb-2">

      <div class="col-12 col-md-6">
        <div class="card">
          <div class="card-body">            
            <div class="table-responsive mt-4">
              <table class="table table-bordered table-striped table-hover border text-center text-nowrap" id="dataTable">
                <thead class="thead-light">
                  <tr>
                    <th rowspan="2" width="100px">No</th>
                    <th rowspan="2">Kecamatan</th>
                    <th rowspan="2">Desa/Kelurahan</th>
                    <th class="text-wrap">Ranwal Renja</th>
                    <th class="text-wrap">Renja</th>
                    <th class="text-wrap">DPA-PD</th>
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
                      <td>{{ $item->kecamatan->nama_kecamatan }}</td>
                      <td>{{ $item->nama_desa }}</td>
                      <td class="text-danger"><i>di isi</i></td>
                      <td class="text-danger"><i>di isi</i></td>
                      <td class="text-danger"><i>di isi</i></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card">
          <div class="card-content">
            <img src="{{ url('frontend/images/peta.jpeg') }}" class="card-img-top img-fluid" alt="singleminded">
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
@endsection