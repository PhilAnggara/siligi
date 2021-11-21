{{-- Modal Tambah Data --}}
<div class="modal fade text-left" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="tambahDataModal">
          Upload data Pagu DPA
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('dpa.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label for="id_dinas">Nama Dinas</label>
                <select class="form-select" id="id_dinas" name="id_dinas" required>
                  <option value="" selected disabled>-- Pilih Dinas --</option>
                  @foreach ($dinas as $d)
                  <option value="{{ $d->id }}">{{ $d->nama_dinas }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label for="path">File</label>
                <input type="file" id="path" class="form-control @error('path') is-invalid @enderror" name="path" accept="application/pdf" required>
                @error('path')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn icon icon-left btn-success">
            <i class="fal fa-upload"></i>
            Upload
          </button>
        </div>
      </form>

    </div>
  </div>
</div>

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
        <p class="my-3">Yakin ingin menghapus {{ $item->nama_desa }}?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <form action="{{ route('dpa.destroy', $item->id) }}" method="POST">
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