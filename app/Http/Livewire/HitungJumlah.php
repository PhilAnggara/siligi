<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HitungJumlah extends Component
{
    public $rrpd;
    public $dpapd;
    public $jumlah;

    protected $listeners = ['dimasukan' => 'tentukanJumlah'];
 
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
