{{-- Modal Upload --}}
@foreach ($items as $item)
<div class="modal fade text-left" id="uploadModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="uploadModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title white" id="uploadModal">
          Pilih File
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body py-4">

        <form action="{{ route('renstra.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id_user" value="{{ $item->id }}">
          <div class="form-group">
            <label for="path">Upload File</label>
            <div class="input-group mb-3">
              <input type="file" id="path" class="form-control" name="path" required>
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
@endforeach