<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HitungJumlah extends Component
{
    public $rrpd;
    public $rpd;
    public $dpapd;
    public $jumlah_1;
    public $jumlah_2;
    public $item;

    protected $listeners = ['dimasukan' => 'tentukanJumlah'];

    public function mount()
    {
        if ($this->item) {
            $this->rrpd = $this->item->k_ranwal_renja;
            $this->rpd = $this->item->k_renja_pd;
            $this->dpapd = $this->item->k_dpa_pd;
            $this->tentukanJumlah();
        }
    }
 
    // Jumlah 1 = DPA-PD / Ranwal_Renja * 100
    // Jumlah 2 = DPA-PD / Renja * 100

    public function tentukanJumlah()
    {
        if ($this->rrpd && $this->dpapd) {
            $this->jumlah_1 = $this->dpapd / $this->rrpd * 100;
        } else {
            $this->jumlah_1 = '';
        }
        
        if ($this->rpd && $this->dpapd) {
            $this->jumlah_2 = $this->dpapd / $this->rpd * 100;
        } else {
            $this->jumlah_2 = '';
        }
        
    }


    public function render()
    {
        return view('livewire.hitung-jumlah');
    }

    public function updatedRrpd($rrpd)
    {
        $this->emit('dimasukan');
    }
    public function updatedRpd($rpd)
    {
        $this->emit('dimasukan');
    }
    public function updatedDpapd($dpapd)
    {
        $this->emit('dimasukan');
    }
}
