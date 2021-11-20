@extends('layouts.app')
@section('title', 'SILIGI - Data Kecamatan')

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
              <a href="#" class="btn icon icon-left btn-outline-success">
                <i class="fal fa-file-excel"></i>
                Export
              </a>
            </div>

            <div class="table-responsive">
              <table class="table table-light table-bordered border text-center">
                <thead class="thead-light">
                  <tr>
                    <th rowspan="2" width="100px">No</th>
                    <th rowspan="2">Mitra Perangkat Daerah</th>
                    <th colspan="5">Jumlah Program</th>
                    <th colspan="6">Jumlah Kegiatan</th>
                    <th colspan="5">Jumlah Pagu Anggaran</th>
                    <th rowspan="2">KET.</th>
                  </tr>
                  <tr>
                    <th>RKPD 2021 (tahun n)</th>
                    <th>Ranwal Renja PD (tahun n)</th>
                    <th>Renja PD (tahun n)</th>
                    <th>RKA-PD (tahun n)</th>
                    <th>DPA-PD (tahun n)</th>
                    <th>RKPD 2021 (tahun n)</th>
                    <th>Ranwal Renja PD (tahun n)</th>
                    <th>Renja PD (tahun n)</th>
                    <th>RKA-PD (tahun n)</th>
                    <th>DPA-PD (tahun n)</th>
                    <th>Jumlah</th>
                    <th>RKPD 2021 (tahun n)</th>
                    <th>Ranwal Renja PD (tahun n)</th>
                    <th>Renja PD (tahun n)</th>
                    <th>RKA-PD (tahun n)</th>
                    <th>DPA-PD (tahun n)</th>
                  </tr>
                  <tr class="table-secondary">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->dinas->nama_dinas }}</td>
                      <td>{{ $item->p_rkpd }}</td>
                      <td>{{ $item->p_ranwal_renja }}</td>
                      <td>{{ $item->p_renja_pd }}</td>
                      <td>{{ $item->p_rka_pd }}</td>
                      <td>{{ $item->p_dpa_pd }}</td>
                      <td>{{ $item->k_rkpd }}</td>
                      <td>{{ $item->k_ranwal_renja }}</td>
                      <td>{{ $item->k_renja_pd }}</td>
                      <td>{{ $item->k_rka_pd }}</td>
                      <td>{{ $item->k_dpa_pd }}</td>
                      <td>{{ $item->k_jumlah }}</td>
                      <td>{{ $item->pa_rkpd }}</td>
                      <td>{{ $item->pa_ranwal_renja }}</td>
                      <td>{{ $item->pa_renja_pd }}</td>
                      <td>{{ $item->pa_rka_pd }}</td>
                      <td>{{ $item->pa_dpa_pd }}</td>
                      <td>{{ $item->ket }}</td>
                      {{-- <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                          <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{ $item->id }}">
                            <i class="fal fa-edit" data-toggle="tooltip" title="Edit"></i>
                          </button>
                          <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal-{{ $item->id }}">
                            <i class="fal fa-trash-alt" data-toggle="tooltip" title="Hapus"></i>
                          </button>
                        </div>
                      </td> --}}
                    </tr>
                  @empty
                    <tr>
                      <td colspan="100" height="100px" class="text-muted">Tidak ada data</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
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