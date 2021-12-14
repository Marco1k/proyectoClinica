<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cita;

use Illuminate\Http\Request;





class AdminCitaController extends Controller
{

    public function __construct(){
      //  $this->middleware('can:admin.citasadmin.index')->only('index');
      //  $this->middleware('can:admin.citasadmin.edit')->only('edit', 'update');

    }

    public function index()
    {
        //$citas = Cita::all();

        //return view('admin.citasadmin.index', compact('citas'));
        return view('admin.citasadmin.index');
    }

    public function edit($cita)
    {

        $citas = Cita::all();
        $aEditar = "" ;


        foreach($citas as $buscar) {
            if ($buscar->id == $cita){
                $aEditar = $buscar;
            }
        }
          return view('admin.citasadmin.edit', compact('aEditar'));
       // return $aEditar;

    }


    public function update(Request $request, $aEditar)
    {

        $citas = Cita::all();
        $aEditar2 = "" ;


        foreach($citas as $buscar) {
            if ($buscar->id == $aEditar){
                $aEditar2 = $buscar;
            }
        }




        $request->validate([
            'Status' => 'required'
        ]);


        $aEditar2->update($request->all());


        //return $aEditar2;
        return redirect()->route('admin.citasadmin.index')->with('info', 'Se asigno la confirmación correctamente');
    }
}
