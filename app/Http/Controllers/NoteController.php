<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NoteController extends Controller
{
    #Mostrar una lista del recurso.
    public function index()
    {
        return Inertia::render('Notes/Index',[
            'notes' => Note::latest()->get()
        ]);
    }

    #Mostrar el formulario para crear un nuevo recurso.
    public function create()
    {
        return Inertia::render('Notes/Create');
    }

    #Almacene un recurso recién creado en el almacenamiento.
    public function store(Request $request)
    {
        $request->validate([
            'excerpt' => 'required',
            'content' => 'required'
        ]);
        $note = Note::create($request->all());

        return redirect()->route('notes.edit',$note->id)->with('status','Nota Creada');
    }

    #Muestra el recurso especificado.
    public function show(Note $note)
    {
        return Inertia::render('Notes/Show', compact('note'));
    }

    #Muestra el formulario para editar el recurso especificado.
    public function edit(Note $note)
    {
        return Inertia::render('Notes/Edit', compact('note'));
    }

    #Actualice el recurso especificado en el almacenamiento.
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'excerpt' => 'required',
            'content' => 'required'
        ]);
        $note->update($request->all());

        return redirect()->route('notes.index')->with('status','Nota Actualizada');
    }

    
    #Elimine el recurso especificado del almacenamiento.
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('status','Nota Eliminada');
    }
}
