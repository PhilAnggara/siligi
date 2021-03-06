<?php

namespace App\Http\Livewire;

use App\Models\Desa;
use App\Models\Kecamatan;
use Livewire\Component;

class KecamatanDesa extends Component
{
    public $kecamatan;
    public $desa;
    public $selectedKecamatan = "";
    public $item;

    public function mount()
    {
        $this->kecamatan = Kecamatan::all();
        $this->desa = collect();
        if ($this->item) {
            $this->selectedKecamatan = $this->item->desa->kecamatan->id;
            $this->updatedSelectedKecamatan($this->selectedKecamatan);
        }
    }

    public function render()
    {
        return view('livewire.kecamatan-desa');
    }

    public function updatedSelectedKecamatan($kecamatan)
    {
        $this->desa = Desa::where('id_kecamatan', $kecamatan)->get();
    }
}
