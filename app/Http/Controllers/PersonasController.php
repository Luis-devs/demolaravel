<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller {
    public function index() {
        // $datos=["datos"=>"no hay datos"];
        // return view('welcome', $datos);
        $datos = Personas::orderBy('Apellidos', 'desc')->paginate(3);
        return view('welcome', compact('datos'));
    }


    public function create() {
        return view('agregar');
    }

    public function store(Request $request) {
        $request->validate([
            'file' => 'required|mines:png,jpg,jpeg,webp|max:5120',
        ]);
        $name_foto = 'usuario_' . $request->Nombre . '_' . time();
        $path = $request->file('foto')->storeAs('usuarios', $name_foto, 'public');

        print_r($request);
        $personas = new Personas();
        $personas->Nombre = $request->Nombre;
        $personas->Apellidos = $request->Apellidos;
        $personas->Fecha_de_nacimiento = $request->Fecha_de_nacimiento;
        $personas->Email = $request->Email;
        $personas->foto = $path;
        $personas->save();
        // print_r($_POST);
        return redirect()->route('personas.index')->with('success', 'Registro agregado con exito...');
    }

    public function show($id) {
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
    }

    public function edit($id) {
        $personas = Personas::find($id);
        return view('actualizar', compact('personas'));
    }


    public function update(Request $request, Personas $personas, $id) {
        $personas = Personas::find($id);
        $personas->Nombre = $request->Nombre;
        $personas->Apellidos = $request->Apellidos;
        $personas->Fecha_de_nacimiento = $request->Fecha_de_nacimiento;
        $personas->Email = $request->Email;
        $personas->save();
        // print_r($_POST);
        return redirect()->route('personas.index')->with('success', 'Registro actualizado con exito...!');
    }

    public function destroy(Request $request, Personas $personas, $id) {
        $personas = Personas::find($id);
        $personas->delete();

        // print_r($_POST);
        return redirect()->route('personas.index')->with('succes', 'Registro eliminado con exito...!');
    }
}
