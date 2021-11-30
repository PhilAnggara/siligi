<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HitungJumlah extends Component
{
    public $rrpd;
    public $dpapd;
    public $jumlah;
    public $item;

    protected $listeners = ['dimasukan' => 'tentukanJumlah'];

    public function mount()
    {
        if ($this->item) {
            $this->rrpd = $this->item->k_ranwal_renja;
            $this->dpapd = $this->item->k_dpa_pd;
            $this->tentukanJumlah();
        }
    }
 
    public function tentukanJumlah()
    {
        if ($this->rrpd && $this->dpapd) {
            $this->jumlah = $this->rrpd / $this->dpapd * 100;
        } else {
            $this->jumlah = '';
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
    public function updatedDpapd($dpapd)
    {
        $this->emit('dimasukan');
    }
}
