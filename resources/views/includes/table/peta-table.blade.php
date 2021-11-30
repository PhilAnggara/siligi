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
      <th rowspan="2"></th>
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
        <td>{{ $item->ranwal_renja }}</td>
        <td>{{ $item->renja }}</td>
        <td>{{ $item->dpa_pd }}</td>
        <td class="bg-ylw">Rp {{ number_format($item->anggaran, 0, ',', '.') }}</td>
        <td>
          <div class="btn-group">
            <button type="button" class="btn btn-sm icon" data-bs-toggle="modal" data-bs-target="#editModal-{{ $item->id }}">
              <i class="far fa-edit" data-toggle="tooltip" title="Edit"></i>
            </button>
            <button type="button" class="btn btn-sm icon" data-bs-toggle="modal" data-bs-target="#hapusModal-{{ $item->id }}">
              <i class="far fa-trash" data-toggle="tooltip" title="Hapus"></i>
            </button>
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>