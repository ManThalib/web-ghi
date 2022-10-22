<?php

namespace App\Http\Livewire\Regis;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Regis;

class Index extends Component
{
    public $user_id, $regis_id, $regis, $nama_lengkap, $phone, $institusi, $accomodation, $profession, $PAMKI;

    public $isModalOpen = 0;

    public function render()
    {
        $this->regis = Regis::whereUserId(Auth::id())->get();
        return view('livewire.user.regis.index');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm()
    {
        $this->nama_lengkap = '';
        $this->phone = '';
        $this->institusi = '';
        $this->accomodation = '';
        $this->profession = '';
        $this->PAMKI = '';
    }

    public function store()
    {
        $user_id = Auth::id();

        $this->validate([
            'nama_lengkap' => 'required',
            'phone' => 'required',
            'institusi' => 'required',
            'accomodation' => 'required',
            'profession' => 'required',
            'PAMKI' => 'required',
        ]);

        Regis::updateOrCreate([
            'user_id' => $user_id,
        ], [
            'nama_lengkap' => $this->nama_lengkap,
            'phone' => $this->phone,
            'institusi' => $this->institusi,
            'accomodation' => $this->accomodation,
            'profession' => $this->profession,
            'PAMKI' => $this->PAMKI,
        ]);

        session()->flash('message', $this->regis_id ? 'Identity updated.' : 'Identity created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $regis = Regis::findOrFail($id);

        $this->openModalPopover();
        $this->nama_lengkap = $regis->nama_lengkap;
        $this->phone = $regis->phone;
        $this->institusi = $regis->institusi;
        $this->accomodation = $regis->accomodation;
        $this->profession = $regis->profession;
        $this->PAMKI = $regis->PAMKI;
    }
}
