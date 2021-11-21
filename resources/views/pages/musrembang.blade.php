@extends('layouts.app')
@section('title', 'SILIGI - Musrembang')

@section('content')
<div class="main-content container-fluid">
  <div class="page-title d-flex align-items-center justify-content-between">
    <h3>Musrembang</h3>
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
                  <table class="table table-hover border text-center text-nowrap" id="dataTable1">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Status Upload</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Files</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($items1 as $item)
                      @php
                        if ($item->musrembang->count() <= 2) {
                          $color = 'danger';
                        } elseif ($item->musrembang->count() <=5) {
                          $color = 'warning';
                        } else {
                          $color = 'success';
                        }
                        $percent = number_format($item->musrembang->count() / 7 * 100, 0);
                      @endphp
                      <tr>
                        <td>{{ $item->name }}</td>
                        <td class="button-for-upload">
                          @if ($item->musrembang->count() != 7)
                            @for ($i = 1; $i <= 7; $i++)
                            <button class="btn btn-sm btn-{{ $item->musrembang->count() >= $i ? $color : 'outline-secondary' }}" data-bs-toggle="modal" data-bs-target="#uploadModal-{{ $item->id }}">
                              {{ $i }}
                            </button>
                            @endfor
                          @else
                            <span class="badge bg-success">Completed</span>
                          @endif
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>
                          @if ($item->musrembang->count())
                            {{ Carbon\Carbon::parse($item->latestMusrembang->created_at)->isoFormat('D MMM YYYY') }}
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
                        <td>
                          <button type="button" class="btn btn-sm icon icon-left btn-outline-info"  data-bs-toggle="modal" data-bs-target="#viewModal-{{ $item->id }}">
                            <i class="fal fa-eye"></i> Lihat File
                          </button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="dinas2">
                <div class="table-responsive mt-4">
                  <table class="table table-hover border text-center text-nowrap" id="dataTable2">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Status Upload</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Files</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($items2 as $item)
                      @php
                        if ($item->musrembang->count() <= 2) {
                          $color = 'danger';
                        } elseif ($item->musrembang->count() <=5) {
                          $color = 'warning';
                        } else {
                          $color = 'success';
                        }
                        $percent = number_format($item->musrembang->count() / 7 * 100, 0);
                      @endphp
                      <tr>
                        <td>{{ $item->name }}</td>
                        <td class="button-for-upload">
                          @if ($item->musrembang->count() != 7)
                            @for ($i = 1; $i <= 7; $i++)
                            <button class="btn btn-sm btn-{{ $item->musrembang->count() >= $i ? $color : 'outline-secondary' }}" data-bs-toggle="modal" data-bs-target="#uploadModal-{{ $item->id }}">
                              {{ $i }}
                            </button>
                            @endfor
                          @else
                            <span class="badge bg-success">Completed</span>
                          @endif
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>
                          @if ($item->musrembang->count())
                            {{ Carbon\Carbon::parse($item->latestMusrembang->created_at)->isoFormat('D MMM YYYY') }}
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
                        <td>
                          <button type="button" class="btn btn-sm icon icon-left btn-outline-info"  data-bs-toggle="modal" data-bs-target="#viewModal-{{ $item->id }}">
                            <i class="fal fa-eye"></i> Lihat File
                          </button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="dinas3">
                <div class="table-responsive mt-4">
                  <table class="table table-hover border text-center text-nowrap" id="dataTable3">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Status Upload</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Files</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($items3 as $item)
                      @php
                        if ($item->musrembang->count() <= 2) {
                          $color = 'danger';
                        } elseif ($item->musrembang->count() <=5) {
                          $color = 'warning';
                        } else {
                          $color = 'success';
                        }
                        $percent = number_format($item->musrembang->count() / 7 * 100, 0);
                      @endphp
                      <tr>
                        <td>{{ $item->name }}</td>
                        <td class="button-for-upload">
                          @if ($item->musrembang->count() != 7)
                            @for ($i = 1; $i <= 7; $i++)
                            <button class="btn btn-sm btn-{{ $item->musrembang->count() >= $i ? $color : 'outline-secondary' }}" data-bs-toggle="modal" data-bs-target="#uploadModal-{{ $item->id }}">
                              {{ $i }}
                            </button>
                            @endfor
                          @else
                            <span class="badge bg-success">Completed</span>
                          @endif
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>
                          @if ($item->musrembang->count())
                            {{ Carbon\Carbon::parse($item->latestMusrembang->created_at)->isoFormat('D MMM YYYY') }}
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
                        <td>
                          <button type="button" class="btn btn-sm icon icon-left btn-outline-info"  data-bs-toggle="modal" data-bs-target="#viewModal-{{ $item->id }}">
                            <i class="fal fa-eye"></i> Lihat File
                          </button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="dinas4">
                <div class="table-responsive mt-4">
                  <table class="table table-hover border text-center text-nowrap" id="dataTable4">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Status Upload</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Files</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($items4 as $item)
                      @php
                        if ($item->musrembang->count() <= 2) {
                          $color = 'danger';
                        } elseif ($item->musrembang->count() <=5) {
                          $color = 'warning';
                        } else {
                          $color = 'success';
                        }
                        $percent = number_format($item->musrembang->count() / 7 * 100, 0);
                      @endphp
                      <tr>
                        <td>{{ $item->name }}</td>
                        <td class="button-for-upload">
                          @if ($item->musrembang->count() != 7)
                            @for ($i = 1; $i <= 7; $i++)
                            <button class="btn btn-sm btn-{{ $item->musrembang->count() >= $i ? $color : 'outline-secondary' }}" data-bs-toggle="modal" data-bs-target="#uploadModal-{{ $item->id }}">
                              {{ $i }}
                            </button>
                            @endfor
                          @else
                            <span class="badge bg-success">Completed</span>
                          @endif
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>
                          @if ($item->musrembang->count())
                            {{ Carbon\Carbon::parse($item->latestMusrembang->created_at)->isoFormat('D MMM YYYY') }}
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
                        <td>
                          <button type="button" class="btn btn-sm icon icon-left btn-outline-info"  data-bs-toggle="modal" data-bs-target="#viewModal-{{ $item->id }}">
                            <i class="fal fa-eye"></i> Lihat File
                          </button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="dinas5">
                <div class="table-responsive mt-4">
                  <table class="table table-hover border text-center text-nowrap" id="dataTable5">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nama Pegawai</th>
                        <th scope="col">Status Upload</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tanggal Upload</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Files</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($items5 as $item)
                      @php
                        if ($item->musrembang->count() <= 2) {
                          $color = 'danger';
                        } elseif ($item->musrembang->count() <=5) {
                          $color = 'warning';
                        } else {
                          $color = 'success';
                        }
                        $percent = number_format($item->musrembang->count() / 7 * 100, 0);
                      @endphp
                      <tr>
                        <td>{{ $item->name }}</td>
                        <td class="button-for-upload">
                          @if ($item->musrembang->count() != 7)
                            @for ($i = 1; $i <= 7; $i++)
                            <button class="btn btn-sm btn-{{ $item->musrembang->count() >= $i ? $color : 'outline-secondary' }}" data-bs-toggle="modal" data-bs-target="#uploadModal-{{ $item->id }}">
                              {{ $i }}
                            </button>
                            @endfor
                          @else
                            <span class="badge bg-success">Completed</span>
                          @endif
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>
                          @if ($item->musrembang->count())
                            {{ Carbon\Carbon::parse($item->latestMusrembang->created_at)->isoFormat('D MMM YYYY') }}
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
                        <td>
                          <button type="button" class="btn btn-sm icon icon-left btn-outline-info"  data-bs-toggle="modal" data-bs-target="#viewModal-{{ $item->id }}">
                            <i class="fal fa-eye"></i> Lihat File
                          </button>
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
      </div>

    </div>
  </section>
</div>
@include('includes.modal.musrembang-modal')
@endsection

@push('addon-script')
<script>
  let tableSatu = document.querySelector('#dataTable1');
  let dataTable1 = new simpleDatatables.DataTable(tableSatu);
  let tableDua = document.querySelector('#dataTable2');
  let dataTable2 = new simpleDatatables.DataTable(tableDua);
  let tableTiga = document.querySelector('#dataTable3');
  let dataTable3 = new simpleDatatables.DataTable(tableTiga);
  let tableEmpat = document.querySelector('#dataTable4');
  let dataTable4 = new simpleDatatables.DataTable(tableEmpat);
  let tableLima = document.querySelector('#dataTable5');
  let dataTable5 = new simpleDatatables.DataTable(tableLima);
</script> 
@endpush