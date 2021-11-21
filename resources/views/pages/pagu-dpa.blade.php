@extends('layouts.app')
@section('title', 'SILIGI - Pagu DPA')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Pagu DPA</h3>
    <button class="btn icon icon-left btn-success round" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
      <i class="fal fa-upload"></i>
      Upload File
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
              <table class="table table-striped table-hover border text-nowrap" id="dataTable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" width="100px">No</th>
                    <th scope="col">Nama Dinas</th>
                    <th scope="col">Nama Data Upload</th>
                    <th scope="col" width="100px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($items as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->dinas->nama_dinas }}</td>
                      <td>{{ basename($item->path) }}</td>
                      <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                          {{-- <button type="button" class="btn icon btn-info" data-bs-toggle="modal" data-bs-target="#viewModal-{{ $item->id }}">
                            <i class="fal fa-eye" data-toggle="tooltip" title="View"></i>
                          </button> --}}
                          <a href="{{ Storage::url($item->path) }}" target="_blank" class="btn icon btn-info">
                            <i class="fal fa-eye" data-toggle="tooltip" title="View"></i>
                          </a>
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
@include('includes.modal.pagu-dpa-modal')
@endsection

@push('addon-script')
<script>
  let tableSatu = document.querySelector('#dataTable');
  let dataTable = new simpleDatatables.DataTable(tableSatu);
</script> 
@endpush