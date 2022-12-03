<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
  public function index()
  {
    // return "hola";
    return view('persona.index');
  }

  public function create()
  {
    return view('persona.create');
  }

  public function store(Request $request)
  {
    return view('persona.create');
    
  }
  public function show( $id)
  {      
    return view('persona.show', compact('id'));
  }
  public function edit($id)
  {
    return view('persona.create');

  }

  public function update(Request $request, Persona $Persona)
  {
    return view('persona.create');

  }

  public function destroy(Persona $Persona)
  {
    return view('persona.create');

  }
}
