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

{{-- Modal Edit --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="editModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title white" id="editModal">
          Edit
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('peta.update', $item->id) }}" method="post">
        @method('put')
        @csrf
        <div class="modal-body">
          <div class="row">

            @livewire('kecamatan-desa', ['item' => $item])
            
            <div class="col-12">
              <div class="form-group">
                <label for="ranwal_renja">Ranwal Renja</label>
                <input type="number" id="ranwal_renja" class="form-control" name="ranwal_renja" placeholder="Ranwal Renja" value="{{ $item->ranwal_renja }}" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="renja">Renja</label>
                <input type="number" id="renja" class="form-control" name="renja" placeholder="Renja" value="{{ $item->renja }}" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="dpa_pd">DPA-PD</label>
                <input type="number" id="dpa_pd" class="form-control" name="dpa_pd" placeholder="DPA-PD" value="{{ $item->dpa_pd }}" autocomplete="off" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="anggaran">Anggaran</label>
                <input type="number" id="anggaran" class="form-control" name="anggaran" placeholder="Anggaran" value="{{ $item->anggaran }}" autocomplete="off" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn icon icon-left btn-primary">
            <i class="fal fa-save"></i>
            Simpan Perubahan
          </button>
        </div>
      </form>

    </div>
  </div>
</div>
@endforeach

{{-- Modal Hapus --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="hapusModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title white" id="hapusModal">
          Hapus
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <p class="my-3">Yakin ingin menghapus data peta {{ $item->desa->nama_desa }}?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <form action="{{ route('peta.destroy', $item->id) }}" method="POST">
          @method('delete')
          @csrf
          <button type="submit" class="btn icon icon-left btn-danger ml-1">
            <i class="fal fa-trash-alt"></i>
            Hapus
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach