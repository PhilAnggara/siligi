@extends('layouts.app')
@section('title', 'SILIGI - RENSTRA')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>RENSTRA</h3>
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
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Status Upload</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">Progress</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($items as $item)
                      @php
                        if ($item->uploads->count() <= 2) {
                          $color = 'danger';
                        } elseif ($item->uploads->count() <=5) {
                          $color = 'warning';
                        } else {
                          $color = 'success';
                        }
                        $percent = number_format($item->uploads->count() / 7 * 100, 0);
                      @endphp
                      <tr>
                        <td>{{ $item->name }}</td>
                        <td class="button-for-upload">
                          @if ($item->uploads->count() != 7)
                            @for ($i = 1; $i <= 7; $i++)
                            <button class="btn btn-sm btn-{{ $item->uploads->count() >= $i ? $color : 'outline-secondary' }}" data-bs-toggle="modal" data-bs-target="#uploadModal-{{ $item->id }}">
                              {{ $i }}
                            </button>
                            @endfor
                          @else
                            <span class="badge bg-success">Completed</span>
                          @endif
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>
                          @if ($item->uploads->count())
                            {{ Carbon\Carbon::parse($item->latestUpload->tanggal_upload)->isoFormat('D MMM YYYY') }}
                          @else
                            -
                          @endif
                        </td>
                        <td width="300px">
                          <div class="progress progress-{{ $color }}">
                            <div class="progress-bar progress-label" style="width: {{ $percent }}%" aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100">
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
@include('includes.modal.renstra-modal')
@endsection