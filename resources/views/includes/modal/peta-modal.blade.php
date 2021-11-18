{{-- Modal Tambah Data --}}
<div class="modal fade text-left" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="tambahDataModal">
          Tambah Data
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('data-kecamatan.store') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="id_kecamatan">Nama Kecamatan</label>
                <select class="form-select" id="id_kecamatan" name="id_kecamatan" required>
                  <option value="" selected disabled>-- Pilih Kecamatan --</option>
                  @foreach ($kecamatan as $kec)
                  <option value="{{ $kec->id }}">{{ $kec->nama_kecamatan }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="id_desa">Nama Desa</label>
                <select class="form-select" id="id_desa" name="id_desa" required>
                  <option value="" selected disabled>-- Pilih Desa --</option>
                  @foreach ($kecamatan as $kec)
                  <option value="{{ $kec->id }}">{{ $kec->nama_kecamatan }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="ranwal_renja">Ranwal Renja</label>
                <input type="number" id="ranwal_renja" class="form-control" name="ranwal_renja" placeholder="Ranwal Renja" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="renja">Renja</label>
                <input type="number" id="renja" class="form-control" name="renja" placeholder="Renja" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="dpa_pd">DPA-PD</label>
                <input type="number" id="dpa_pd" class="form-control" name="dpa_pd" placeholder="DPA-PD" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="anggaran">Anggaran</label>
                <input type="number" id="anggaran" class="form-control" name="anggaran" placeholder="Anggaran" autocomplete="off" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn icon icon-left btn-success">
            <i class="fal fa-plus"></i>
            Tambah
          </button>
        </div>
      </form>

    </div>
  </div>
</div>