{{-- Modal Upload --}}
<div class="modal fade text-left" id="uploadFotoModal" tabindex="-1" role="dialog" aria-labelledby="uploadFotoModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title white" id="uploadFotoModal">
          {{ auth()->user()->profile_pic ? 'Ganti Foto Profil' : 'Upload Foto Profile' }}
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body py-4">

        <form action="{{ route('profile-upload') }}" method="post" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="profile_pic">Upload Foto</label>
            <div class="input-group mb-3">
              <input type="file" id="profile_pic" class="form-control @error('profile_pic') is-invalid @enderror" name="profile_pic" required>
              <button class="btn icon icon-left btn-primary" type="submit">
                <i class="fal fa-upload"></i>
                Kirim
              </button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

{{-- Modal Hapus --}}
<div class="modal fade text-left" id="hapusFotoModal" tabindex="-1" role="dialog" aria-labelledby="hapusFotoModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title white" id="hapusFotoModal">
          Hapus Foto Profil
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
        <p class="my-3">Yakin ingin menghapus foto profil?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <form action="{{ route('profile-hapus') }}" method="POST">
          @method('put')
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