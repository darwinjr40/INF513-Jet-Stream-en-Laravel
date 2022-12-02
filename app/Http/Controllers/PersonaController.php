<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
  public function index()
  {
    // return "hola";
    return view('Personas.index');
  }

  public function create()
  {
    return view('Personas.create');
  }

  public function store(Request $request)
  {
    //
  }

  public function edit(Persona $Persona)
  {
    //
  }

  public function update(Request $request, Persona $Persona)
  {
    //
  }

  public function destroy(Persona $Persona)
  {
    //
  }
}
