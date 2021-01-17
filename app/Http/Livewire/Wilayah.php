<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Province;
use App\Models\Regencie;
use App\Models\Village;
use App\Models\District;


class Wilayah extends Component
{
    public $provinsi;
    public $kabupatens = [];
    public $kabupaten;



    public function render()
    {
        if (!empty($this->provinsi)) {
            $this->kabupatens = Regencie::where('id_provinsi', $this->provinsi)->get();
        }
        return view('livewire.wilayah')
            ->withprovinsis(Province::orderBy('nama_provinsi')->get());
    }
}
