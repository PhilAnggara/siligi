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

        <form action="{{ route('rkpd.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id_user" value="{{ $item->id }}">
          <div class="form-group">
            <label for="path">Upload File</label>
            <div class="input-group mb-3">
              <input type="file" id="path" class="form-control @error('path') is-invalid @enderror" name="path" accept="application/pdf" required>
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

{{-- Modal View --}}
@foreach ($items as $item)
  <div class="modal fade text-left" id="viewModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="viewModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h5 class="modal-title white" id="viewModal">
            Data Upload
          </h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <div class="modal-body py-4">

          <ul class="list-group">
            @forelse ($item->rkpd as $upload)
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="text-secondary" href="{{ Storage::url($upload->path) }}" target="_blank">
                  {{ $item->name }} - {{ Carbon\Carbon::parse($upload->created_at)->isoFormat('D MMM YYYY') }}.pdf
                </a>
                <div class="btn-group">
                  <a class="btn btn-sm icon" href="{{ Storage::url($upload->path) }}" download="{{ $item->name }} - {{ Carbon\Carbon::parse($upload->created_at)->isoFormat('D MMM YYYY') }}">
                    <i class="far fa-arrow-to-bottom" data-toggle="tooltip" title="Download"></i>
                  </a>
                </div>
              </li>
            @empty
              <div class="text-center my-5">
                Tidak ada file
              </div>
            @endforelse
          </ul>

        </div>
      </div>
    </div>
  </div>
@endforeach