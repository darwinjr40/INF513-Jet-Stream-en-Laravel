<?php

namespace App\Http\Livewire\Persona;

use App\Models\Persona;
use Livewire\Component;

class LwCreate extends Component
{
  public $personas = [];

  public function add()
  {
    $this->validate([
      'personas.per_cod'    => 'required',
      'personas.per_nom'    => 'required',
      'personas.per_appm'   => 'required',
      'personas.per_prof'   => 'required',
      'personas.per_telf'   => 'required',
      'personas.per_cel'    => 'required',
      'personas.per_email'  => 'required',
      'personas.per_dir'    => 'required',
      'personas.per_fnac'   => 'required',
      'personas.per_lnac'   => 'required',
    ]);

    $this->personas['per_est'] = 'true';
    $this->personas['per_create'] = date('Y-m-d');
    $this->personas['per_update'] = date('Y-m-d');
    // dd($this->personas);
    $persona = Persona::create($this->personas);
    return redirect()->route('persona.index');
  }

  public function limpiar()
  {
    $this->personas = [];
  }
  // public function render()
  // {
  //     $clientes = Cliente::all();
  //     return view('livewire.cliente.lw-create', compact('clientes'));
  // }

  public function render()
  {
    return view('livewire.persona.lw-create');
  }
}
