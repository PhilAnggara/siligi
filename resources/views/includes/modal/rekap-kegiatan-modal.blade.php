{{-- Modal Tambah Data --}}
<div class="modal fade text-left" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title white" id="tambahDataModal">
          Tambah Desa
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('rekap-kegiatan.store') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Mitra</label>
            <div class="col-sm-8">
              <select name="id_dinas" class="form-select form-select-sm" required>
                <option value="" selected disabled>-- Pilih Dinas --</option>
                @foreach ($dinas as $d)
                  <option value="{{ $d->id }}">{{ $d->nama_dinas }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="divider my-4">
            <div class="divider-text font-weight-bold">Jumlah Program</div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RKPD 2021</label>
            <div class="col-sm-8">
              <input name="p_rkpd" type="number" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RANWAL RENJA</label>
            <div class="col-sm-8">
              <input name="p_ranwal_renja" type="number" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RENJA PD</label>
            <div class="col-sm-8">
              <input name="p_renja_pd" type="number" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RKA PD</label>
            <div class="col-sm-8">
              <input name="p_rka_pd" type="number" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">DPA PD</label>
            <div class="col-sm-8">
              <input name="p_dpa_pd" type="number" class="form-control form-control-sm" required>
            </div>
          </div>

          <div class="divider my-4">
            <div class="divider-text font-weight-bold">Jumlah Kegiatan</div>
          </div>
          @livewire('hitung-jumlah')

          <div class="divider my-4">
            <div class="divider-text font-weight-bold">Jumlah Pagu Anggaran</div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RKPD 2021</label>
            <div class="col-sm-8">
              <input name="pa_rkpd" type="number" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RANWAL RENJA</label>
            <div class="col-sm-8">
              <input name="pa_ranwal_renja" type="number" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RENJA PD</label>
            <div class="col-sm-8">
              <input name="pa_renja_pd" type="number" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RKA PD</label>
            <div class="col-sm-8">
              <input name="pa_rka_pd" type="number" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">DPA PD</label>
            <div class="col-sm-8">
              <input name="pa_dpa_pd" type="number" class="form-control form-control-sm" required>
            </div>
          </div>

          <hr>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Keterangan</label>
            <div class="col-sm-8">
              <input name="ket" type="text" class="form-control form-control-sm">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
            Batal
          </button>
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
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title white" id="editModal">
          Edit
        </h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <i data-feather="x"></i>
        </button>
      </div>

      <form action="{{ route('rekap-kegiatan.update', $item->id) }}" method="post">
        @method('put')
        @csrf
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Mitra</label>
            <div class="col-sm-8">
              <select name="id_dinas" class="form-select form-select-sm" required>
                @foreach ($dinas as $d)
                  <option value="{{ $d->id }}" {{ $item->id_dinas == $d->id ? 'selected' : '' }}>{{ $d->nama_dinas }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="divider my-4">
            <div class="divider-text font-weight-bold">Jumlah Program</div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RKPD 2021</label>
            <div class="col-sm-8">
              <input name="p_rkpd" type="number" value="{{ $item->p_rkpd }}" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RANWAL RENJA</label>
            <div class="col-sm-8">
              <input name="p_ranwal_renja" type="number" value="{{ $item->p_ranwal_renja }}" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RENJA PD</label>
            <div class="col-sm-8">
              <input name="p_renja_pd" type="number" value="{{ $item->p_renja_pd }}" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RKA PD</label>
            <div class="col-sm-8">
              <input name="p_rka_pd" type="number" value="{{ $item->p_rka_pd }}" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">DPA PD</label>
            <div class="col-sm-8">
              <input name="p_dpa_pd" type="number" value="{{ $item->p_dpa_pd }}" class="form-control form-control-sm" required>
            </div>
          </div>

          <div class="divider my-4">
            <div class="divider-text font-weight-bold">Jumlah Kegiatan</div>
          </div>
          @livewire('hitung-jumlah', ['item' => $item])

          <div class="divider my-4">
            <div class="divider-text font-weight-bold">Jumlah Pagu Anggaran</div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RKPD 2021</label>
            <div class="col-sm-8">
              <input name="pa_rkpd" type="number" value="{{ $item->pa_rkpd }}" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RANWAL RENJA</label>
            <div class="col-sm-8">
              <input name="pa_ranwal_renja" type="number" value="{{ $item->pa_ranwal_renja }}" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RENJA PD</label>
            <div class="col-sm-8">
              <input name="pa_renja_pd" type="number" value="{{ $item->pa_renja_pd }}" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">RKA PD</label>
            <div class="col-sm-8">
              <input name="pa_rka_pd" type="number" value="{{ $item->pa_rka_pd }}" class="form-control form-control-sm" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">DPA PD</label>
            <div class="col-sm-8">
              <input name="pa_dpa_pd" type="number" value="{{ $item->pa_dpa_pd }}" class="form-control form-control-sm" required>
            </div>
          </div>

          <hr>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label col-form-label-sm">Keterangan</label>
            <div class="col-sm-8">
              <input name="ket" type="text" value="{{ $item->ket }}" class="form-control form-control-sm">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
            Batal
          </button>
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
        <p class="my-3">Yakin ingin menghapus rekap kegiatan {{ $item->dinas->nama_dinas }}?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
          Batal
        </button>
        <form action="{{ route('rekap-kegiatan.destroy', $item->id) }}" method="POST">
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