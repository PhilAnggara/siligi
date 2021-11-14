@extends('layouts.app')
@section('title', 'SILIGI - MONEV')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Monitoring dan Evaluasi</h3>
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
            
            <ul class="nav nav-tabs nav-justified text-nowrap" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#dinas1" aria-selected="true">Dinas TPHP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#dinas2" aria-selected="false">Dinas Nakkeswan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#dinas3" aria-selected="false">Dinas Ketahanan Pangan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#dinas4" aria-selected="false">Dinas Perikanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#dinas5" aria-selected="false">Dinas Lingkungan Hidup</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="dinas1">
                <div class="table-responsive mt-4">
                  <table class="table table-hover border text-center text-nowrap" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Triwulan 1</th>
                        <th scope="col">Triwulan 2</th>
                        <th scope="col">Triwulan 3</th>
                        <th scope="col">Triwulan 4</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($items1 as $item)
                      <tr>
                        <td>
                          <div class="d-flex justify-content-between">
                            {{ $item->nama }}
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                              <button type="button" class="btn icon btn-info" data-bs-toggle="modal" data-bs-target="#viewModalTr1-{{ $item->id }}">
                                <i class="fal fa-eye" data-toggle="tooltip" title="View"></i>
                              </button>
                              <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModalTr1-{{ $item->id }}">
                                <i class="fal fa-paperclip" data-toggle="tooltip" title="Upload"></i>
                              </button>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex justify-content-between">
                            {{ $item->nama }}
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                              <button type="button" class="btn icon btn-info" data-bs-toggle="modal" data-bs-target="#viewModalTr2-{{ $item->id }}">
                                <i class="fal fa-eye" data-toggle="tooltip" title="View"></i>
                              </button>
                              <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModalTr2-{{ $item->id }}">
                                <i class="fal fa-paperclip" data-toggle="tooltip" title="Upload"></i>
                              </button>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex justify-content-between">
                            {{ $item->nama }}
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                              <button type="button" class="btn icon btn-info" data-bs-toggle="modal" data-bs-target="#viewModalTr3-{{ $item->id }}">
                                <i class="fal fa-eye" data-toggle="tooltip" title="View"></i>
                              </button>
                              <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModalTr3-{{ $item->id }}">
                                <i class="fal fa-paperclip" data-toggle="tooltip" title="Upload"></i>
                              </button>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex justify-content-between">
                            {{ $item->nama }}
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                              <button type="button" class="btn icon btn-info" data-bs-toggle="modal" data-bs-target="#viewModalTr4-{{ $item->id }}">
                                <i class="fal fa-eye" data-toggle="tooltip" title="View"></i>
                              </button>
                              <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModalTr4-{{ $item->id }}">
                                <i class="fal fa-paperclip" data-toggle="tooltip" title="Upload"></i>
                              </button>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="dinas2">
                2
              </div>
              <div class="tab-pane fade" id="dinas3">
                3
              </div>
              <div class="tab-pane fade" id="dinas4">
                4
              </div>
              <div class="tab-pane fade" id="dinas5">
                5
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
@include('includes.modal.monev-modal')
@endsection