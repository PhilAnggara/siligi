{{-- Modal Tambah Data --}}
<div class="modal fade text-left" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="tambahDataModal">
          Pilih File
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('musrembang.store') }}" method="post" enctype="multipart/form-data">
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
        <p class="my-3">Yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <form action="{{ route('musrembang.destroy', $item->id) }}" method="POST">
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