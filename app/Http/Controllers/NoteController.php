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
        return Inertia::render('Notes/index',[
            #Creamos una consulta, para mostrar las ultimas notas
            'notes' => Note::latest()->get()
        ]);
    }

    #Mostrar el formulario para crear un nuevo recurso.
    public function create()
    {
        //
    }

    #Almacene un recurso recién creado en el almacenamiento.
    public function store(Request $request)
    {
        //
    }

    #Muestra el recurso especificado.
    public function show(Note $note)
    {
        //
    }

    #Muestra el formulario para editar el recurso especificado.
    public function edit(Note $note)
    {
        //
    }

    #Actualice el recurso especificado en el almacenamiento.
    public function update(Request $request, Note $note)
    {
        //
    }

    
    #Elimine el recurso especificado del almacenamiento.
    public function destroy(Note $note)
    {
        //
    }
}
