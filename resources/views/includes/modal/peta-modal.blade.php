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

      <form action="{{ route('peta.store') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="row">

            @livewire('kecamatan-desa')
            
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