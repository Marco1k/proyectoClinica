<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;


class InformacionController extends Controller
{

    public function __construct(){

        $this->middleware('can:admin.informacion.destroy')->only('destroy');
    }

    public function index()
    {
        $data = Data::all();

        return view ('admin.informacion.index',compact('data') );
    }

    public function create()
    {
        return view ('admin.informacion.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'slug' => 'required|unique:data'
        ]);

        $data = Data::create($request->all());

        return redirect()->route('admin.informacion.create', $data)->with('info','La solicitud de información se envió con éxito');
    }



    public function destroy(Data $data)
    {
        $data->delete();

        return redirect()->route('admin.informacion.index')->with('info','La  solicitud de información se eliminó con éxito');
    }
}
