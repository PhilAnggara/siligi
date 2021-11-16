@extends('layouts.app')
@section('title', 'SILIGI - Data Kecamatan')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Data Desa</h3>
    <button class="btn icon icon-left btn-success round" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
      <i class="fal fa-file-plus"></i>
      Tambah Data
    </button>
  </div>
  <section class="section mt-4">
    <div class="row mb-2">

      <div class="col-12">
        <div class="card">
          <div class="card-body">

            @if($errors->any())
              <div class="alert alert-danger">
                <p><strong>Ups ada yang tidak beres</strong></p>
                @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
              </div>
            @endif
            
            <div class="table-responsive mt-4">
              <table class="table table-striped table-hover border text-center text-nowrap" id="dataTable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" width="100px">No</th>
                    <th scope="col">Nama Desa</th>
                    <th scope="col">Nama Kecamatan</th>
                    <th scope="col" width="100px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->nama_desa }}</td>
                      <td>{{ $item->kecamatan->nama_kecamatan }}</td>
                      <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                          <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{ $item->id }}">
                            <i class="fal fa-edit" data-toggle="tooltip" title="Edit"></i>
                          </button>
                          <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal-{{ $item->id }}">
                            <i class="fal fa-trash-alt" data-toggle="tooltip" title="Hapus"></i>
                          </button>
                        </div>
                      </td>
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
@include('includes.modal.desa-modal')
@endsection

@push('addon-script')
<script>
  let tableSatu = document.querySelector('#dataTable');
  let dataTable = new simpleDatatables.DataTable(tableSatu);
</script> 
@endpush