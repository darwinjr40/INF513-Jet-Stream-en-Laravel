<?php

namespace App\Http\Livewire\Persona;

use App\Models\Persona;
use Livewire\Component;

class LwShow extends Component
{
  public $personas = [];
  public $persona_cod ;

  public function mount($id)
  {
    $persona = Persona::find($id);
    if ($persona) {
      $this->personas = $persona->toArray();
      $this->persona_cod = $id;
    }
    // dd($this->personas);
    // 
  }

  public function render()
  {
    return view('livewire.persona.lw-show');
  }



  public function guardar()
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
    
    $persona = Persona::find($this->persona_cod);
    if ($persona) {
      $persona->update($this->personas);
      $persona->save();    
    }
    // $personas = Persona::find($this->personas['id']);
    // $personas->nombre = $this->personas['nombre'];
    // $personas->telefono = $this->personas['telefono'];
    // $personas->direccion = $this->personas['direccion'];
    // $personas->save();
    return redirect()->route('persona.index');
  }
}
