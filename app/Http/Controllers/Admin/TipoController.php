<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{

    public function __construct(){
        $this->middleware('can:admin.tipos.index')->only('index');
        $this->middleware('can:admin.tipos.create')->only('create', 'store');
       $this->middleware('can:admin.tipos.edit')->only('edit', 'update');
        $this->middleware('can:admin.tipos.destroy')->only('destroy');
    }


    public function index()
    {
        $tipos = Tipo::all();

        return view('admin.tipos.index', compact('tipos'));
    }


    public function create()
    {
        $colors = [
            'lemonchiffon' => 'Color limon',
            'olive' => 'Color amarillo suave',
            'teal' => 'Color celeste',
            'lime' => 'Color lima',
            'indigo' => 'Color indigo',
            'white' => 'Color blanco',
            'red' => 'Color rojo',
            'maroon' => 'Color marrón'
        ];

        return view('admin.tipos.create', compact('colors'))->with('info', 'El tipo se creó con éxito');;
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug' => 'required|unique:tipos',
            'color' => 'required',
        ]);

        $tipo = Tipo::create($request->all());

        return redirect()->route('admin.tipos.edit', compact('tipo'));
    }


    public function edit(Tipo $tipo)
    {
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosa'
        ];


        return view('admin.tipos.edit', compact('tipo', 'colors'));
    }


    public function update(Request $request, Tipo $tipo)
    {
        $request->validate([
            'name'=>'required',
            'slug' => "required|unique:tipos,slug,$tipo->id",
            'color' => 'required',
        ]);

        $tipo->update($request->all());

        return redirect()->route('admin.tipos.edit', $tipo)->with('info', 'El tipo se actualizó con éxito');

    }


    public function destroy(Tipo $tipo)
    {
        $tipo->delete();

        return redirect()->route('admin.tipos.index')->with('info', 'El tipo se eliminó con éxito');;
    }
}
