{{-- Modal View --}}
@foreach ($items1 as $item)
  @for ($i = 1; $i <= 4; $i++)
  <div class="modal fade text-left" id="viewModalTr{{ $i }}-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="viewModalTr{{ $i }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h5 class="modal-title white" id="viewModalTr{{ $i }}">
            Data Upload
          </h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <div class="modal-body py-4">

          <ul class="list-group">
            @forelse ($item->{'tr'.$i} as ${'tr'.$i})
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="text-secondary" href="{{ Storage::url(${'tr'.$i}->path) }}" target="_blank">
                  {{ ${'tr'.$i}->path }}
                </a>
                <div class="btn-group">
                  <a class="btn btn-sm icon" href="{{ Storage::url(${'tr'.$i}->path) }}" download>
                    <i class="far fa-arrow-to-bottom" data-toggle="tooltip" title="Download"></i>
                  </a>
                  <button type="button" class="btn btn-sm icon" data-bs-toggle="modal" data-bs-target="#hapusModal-{{ ${'tr'.$i}->id }}">
                    <i class="far fa-trash" data-toggle="tooltip" title="Hapus"></i>
                  </button>
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
  @endfor
@endforeach

{{-- Modal Upload --}}
@foreach ($items1 as $item)
  @for ($i = 1; $i <= 4; $i++)
  <div class="modal fade text-left" id="uploadModalTr{{ $i }}-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="uploadModalTr{{ $i }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title white" id="uploadModalTr{{ $i }}">
            Kirim File
          </h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <div class="modal-body py-4">

          <form action="{{ route('monev.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
            <input type="hidden" name="id_monev" value="{{ $item->id }}">
            <input type="hidden" name="triwulan" value="{{ $i }}">
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
  @endfor
@endforeach

{{-- Modal Hapus --}}
@foreach ($files as $file)
<div class="modal fade text-left" id="hapusModal-{{ $file->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
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
        <p class="my-3">Yakin ingin menghapus file ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <form action="{{ route('monev.destroy', $file->id) }}" method="POST">
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