<div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label col-form-label-sm">RKPD 2021</label>
		<div class="col-sm-8">
			@if ($this->item)
				<input name="k_rkpd" type="number" class="form-control form-control-sm" value="{{ $this->item->k_rkpd }}" required>
			@else
				<input name="k_rkpd" type="number" class="form-control form-control-sm" required>
			@endif
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label col-form-label-sm">RANWAL RENJA</label>
		<div class="col-sm-8">
			@if ($this->item)
				<input name="k_ranwal_renja" type="number" class="form-control form-control-sm" value="{{ $this->item->k_ranwal_renja }}" wire:model="rrpd" required>
			@else
				<input name="k_ranwal_renja" type="number" class="form-control form-control-sm" wire:model="rrpd" required>
			@endif
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label col-form-label-sm">RENJA PD</label>
		<div class="col-sm-8">
			@if ($this->item)
				<input name="k_renja_pd" type="number" class="form-control form-control-sm" value="{{ $this->item->k_renja_pd }}" required>
			@else
				<input name="k_renja_pd" type="number" class="form-control form-control-sm" required>
			@endif
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label col-form-label-sm">RKA PD</label>
		<div class="col-sm-8">
			@if ($this->item)
				<input name="k_rka_pd" type="number" class="form-control form-control-sm" value="{{ $this->item->k_rka_pd }}" required>
			@else
				<input name="k_rka_pd" type="number" class="form-control form-control-sm" required>
			@endif
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label col-form-label-sm">DPA PD</label>
		<div class="col-sm-8">
			@if ($this->item)
				<input name="k_dpa_pd" type="number" class="form-control form-control-sm" value="{{ $this->item->k_dpa_pd }}" wire:model="dpapd" required>
			@else
				<input name="k_dpa_pd" type="number" class="form-control form-control-sm" wire:model="dpapd" required>
			@endif
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label col-form-label-sm">Jumlah</label>
		<div class="col-sm-8">
			<input name="k_jumlah" type="text" class="form-control form-control-sm" wire:model="jumlah" readonly required>
		</div>
	</div>
</div>
