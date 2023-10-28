<?php

namespace App\Http\Controllers;

Use Illuminate\Http\Request;
Use App\Models\Note;
use Illuminate\Http\RedirectResponse;
Use Illuminate\View\View;
Use App\Http\Requests\NoteRequest;
Use Illuminate\Pagination\Paginator;

class NoteController extends Controller
{
    public function home(): View
    {
        return view("note.home");
    }

    public function index(): View
    {

        $notes = Note::all();
        $notes = Note::paginate(5);

        return view("note.index", compact('notes'));
    }

    public function create(): View
    {

        return view('note.create');
    }

    // AL ser post recepcionamos uns request, una petición
    public function store(NoteRequest $request): RedirectResponse
    {
        // 1- FORMA DE GUARDADO DE DATOS
        // $note = new Note;
        // $note->title       =  $request->title;
        // $note->description = $request->description;
        // $note->save();


        //2- Solo si necesitamos guardado de datos y no para operar con ellos, se puede usar este atajo desde el modelo
        // Note::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);

        //3- SI SE RESPETA EL NAME DE LOS IMPUTs COMO ESTÁN EN EL MODELO SE PUEDE HACER UN ATAJO MAYOR
        // Note::create($request->all());


        //VALIDAR LOS DATOS ANTES DE GUARDARLOS EN LA BD
        // 1- FORMA: EN CONTROLLER - es común encontrarse con esta validación pero no es la más apropiada
            // $request->validate([
            //     'title'                => 'required|max:40|min:3',
            //     'description'          => 'required|max:255|min:3',
            // ],[
            //     'title.required'       =>'Se requiere ingresar un título',
            //     'title.max'            =>'El título NO debe superar los 40 caracteres',
            //     'title.min'            =>'El título DEBE tener al menos 3 caracteres',
            //     'description.required' =>'Se requiere ingresar una descripción',
            //     'description.max'      =>'La descripción NO debe superar los 255 caracteres',
            //     'description.min'      =>'La descripción DEBE tener al menos 3 caracteres',
            // ]);

            Note::create($request->all());

            return redirect()->route('note.index')->with('success', '¡La nota ha sido creada con éxito!');

    }

        //Colocando el Modelo Note no es necesario buscar el id o pedirlo por $note = Note::find($note);
        public function edit(Note $note): View
        {
            return view('note.edit', compact('note'));
        }

        public function update(NoteRequest $request, Note $note): RedirectResponse
        {
            //1- Método - si coinciden mis name de formularios con los campos de mi modelo
            // $note->update($request->all());

            //2- Método - en caso de no coincidir los name html de los imputs con los nombres de los campos del modelo
            //   se debe pasar un array asociativo
            // $note->update([
            //     'title'      => $request->title,
            //     'description'=> $request->description,
            // ]);

            //3- Método - con POO para modificar el valor (ej. teniendo solo el id)
            // $note = Note::find($note);
            // $note->title = $request->title;
            // $note->description = $request->description;
            // $note->save();

             //VALIDAR LOS DATOS ANTES DE GUARDARLOS EN LA BD
        // 1- FORMA: EN CONTROLLER - es común encontrarse con esta validación pero no es la más apropiada
            // $request->validate([
            //     'title'                => 'required|max:40|min:3',
            //     'description'          => 'required|max:255|min:3',
            // ],[
            //     'title.required'       =>'Se requiere ingresar un título',
            //     'title.max'            =>'El título NO debe superar los 40 caracteres',
            //     'title.min'            =>'El título DEBE tener al menos 3 caracteres',
            //     'description.required' =>'Se requiere ingresar una descripción',
            //     'description.max'      =>'La descripción NO debe superar los 255 caracteres',
            //     'description.min'      =>'La descripción DEBE tener al menos 3 caracteres',
            // ]);
            $note->update($request->all());
            return redirect()->route('note.index')->with('success', '¡La nota ha sido actualizada con éxito!');
        }
        public function show(Note $note): View
        {
            return view('note.show', compact('note'));
        }

         // AL ser post recepcionamos uns request, una petición
        public function destroy(Note $note): RedirectResponse
        {

            $note->delete();

            return redirect()->route('note.index')->with('danger', '¡Se ha eliminado la nota!');

        }

}
