<?php

namespace App\Http\Livewire\Persona;

use App\Models\Persona;
use Faker\Provider\ar_EG\Person;
use Livewire\Component;
use Livewire\WithPagination;

class LwIndex extends Component
{
  use WithPagination;
  public $pagination = 10;
  public $attribute = '';
  public $type = 'per_cod';
  public $sort = 'per_cod';
  public $direction = 'asc';

  public function render()
  {
    // return view('livewire.persona.lw-index');
    switch ($this->type) {
      case 'per_cod':
        $personas = Persona::where('per_cod', 'like', '%' . $this->attribute . '%')
          ->orderBy($this->sort, $this->direction)
          ->paginate($this->pagination);
        break;
      case 'per_nom':
        $personas = Persona::where('per_nom', 'like', '%' . $this->attribute . '%')
          ->orderBy($this->sort, $this->direction)
          ->paginate($this->pagination);
        break;
      default:
        $personas = Persona::where('per_cod', 'like', '%' . $this->attribute . '%')
          ->orderBy($this->sort, $this->direction)
          ->paginate($this->pagination);
        break;
    }
    // dd($personas['items']);
    // $persona = Persona::all();
    return view('livewire.persona.lw-index', compact('personas'));
  }

  //Metodo de reinicio de buscador
  public function updatingAttribute()
  {
    $this->resetPage();
  }

  //Metodo de ordenado
  public function order($type)
  {
    if ($this->type == $type) {
      if ($this->direction == 'desc') {
        $this->direction = 'asc';
      } else {
        $this->direction = 'desc';
      }
    } else {
      $this->type = $type;
      $this->direction = 'asc';
    }
  }

  public function delete($id)
  {
    $persona = Persona::find($id);
    if ($persona) {
      $persona->delete();
    }
  }
}
