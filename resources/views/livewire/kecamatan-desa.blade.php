<div>
	<div class="col-12">
		<div class="form-group">
			<label for="id_kecamatan">Nama Kecamatan</label>
			<select wire:model="selectedKecamatan" class="form-select" id="id_kecamatan" name="id_kecamatan" required>
				@if ($this->item)
					@foreach ($kecamatan as $kec)
					<option value="{{ $kec->id }}" {{ $this->item->desa->kecamatan->id == $kec->id ? 'selected' : '' }}>{{ $kec->nama_kecamatan }}</option>
					@endforeach
				@else
					<option value="" selected disabled>-- Pilih Kecamatan --</option>
					@foreach ($kecamatan as $kec)
						<option value="{{ $kec->id }}">{{ $kec->nama_kecamatan }}</option>
					@endforeach
				@endif
			</select>
		</div>
	</div>

	@if (!$selectedKecamatan)
	<div class="col-12">
		<div class="form-group">
			<label for="id_desa">Nama Desa</label>
			<select class="form-select" id="id_desa" name="id_desa" disabled>
				<option value="" selected disabled>* Masukan Kecamatan</option>
			</select>
		</div>
	</div>
	@else
	<div class="col-12">
		<div class="form-group">
			<label for="id_desa">Nama Desa</label>
			<select class="form-select" id="id_desa" name="id_desa" required>
				@if ($desa->isNotEmpty())
					@if ($this->item)
						@foreach ($desa as $des)
						<option value="{{ $des->id }}" {{ $this->item->desa->id == $des->id ? 'selected' : '' }}>{{ $des->nama_desa }}</option>
						@endforeach
					@else
						<option value="" selected disabled>-- Pilih Desa --</option>
						@foreach ($desa as $des)
							<option value="{{ $des->id }}">{{ $des->nama_desa }}</option>
						@endforeach
					@endif
				@else
					<option value="" selected disabled>Tidak Ada Desa</option>
				@endif
			</select>
		</div>
	</div>
	@endif
</div>
