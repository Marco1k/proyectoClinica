<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Parametro;
use Illuminate\Http\Request;


class ParametroController extends Controller
{

    public function index()
    {
        $parametros = Parametro::all();

        return view('admin.parametros.index', compact('parametros'));
    }


    public function create()
    {

        return view('admin.parametros.create');
    }


    public function store(Request $request)
    {
        $request->validate([
           'parametro' =>'required'
        ]);

        $parametro = Parametro::create($request->all());

        return redirect()->route('admin.parametros.edit', $parametro)->with('info', 'El parametro se creó con éxito');
    }


    public function show(Parametro $parametro)
    {
        return view('admin.parametros.show', compact('parametro'));

    }


    public function edit(Parametro $parametro)
    {

        return view('admin.parametros.edit', compact('parametro'));

    }

    public function update(Request $request, Parametro $parametro)
    {
        $request->validate([
            'parametro' => 'required'
        ]);

        $parametro->update($request->all());


        return redirect()->route('admin.parametros.edit', $parametro)->with('info', 'El parametro se actualizó con éxito');

    }

    public function destroy(Parametro $parametro)
    {
        $parametro->delete();

        return redirect()->route('admin.parametros.index', $parametro)->with('info', 'El parametro se eliminó con éxito');

    }
}
