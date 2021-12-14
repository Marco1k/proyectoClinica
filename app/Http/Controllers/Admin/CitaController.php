<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tipo;
use App\Models\Category;
use App\Models\Cita;

use Illuminate\Support\Facades\Storage;
use App\Http\Request\CitaRequest;

use Illuminate\Http\Request;


class CitaController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.citas.index')->only('index');
        $this->middleware('can:admin.citas.create')->only('create', 'store');
        $this->middleware('can:admin.citas.edit')->only('edit', 'update');
        $this->middleware('can:admin.citas.destroy')->only('destroy');
    }


    public function index()
    {
        return view('admin.citas.index');
    }


    public function create()
    {


        $categories = Category::pluck('name','id');
        $tipos = Tipo::all();


        return view('admin.citas.create', compact('categories', 'tipos'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:citas',
            'file' => 'image',
            'Hora' => 'required',
            'category_id' => 'required',
            'tipos' => 'required',
            'extract' => 'required',
            'body' => 'required'
        ]);

        $cita = Cita::create($request->all());


        if($request->file('file')){
            $url = Storage::put('citas', $request->file('file'));

            $url = 'storage/app/public/'.$url;

            $cita->image()->create([
                'url' => $url
            ]);
        }


        if($request->tipos){


            foreach ($request->tipos as $tipo_id){
                $cita->tipos()->attach($tipo_id);
            }

        }

        return redirect()->route('admin.citas.edit', $cita)->with('info', 'La cita se creó con éxito');;

    }

    public function edit(Cita $cita)
    {

        $this->authorize('author',$cita);

        $categories = Category::pluck('name','id');
        $tipos = Tipo::all();

        return view('admin.citas.edit', compact('cita', 'categories', 'tipos'));
    }

    public function update(Request $request, Cita $cita)
    {
        $this->authorize('author',$cita);

        $cita->update($request->all());

        if($request->file('file')){

            $url = Storage::put('citas', $request->file('file'));
            $url = 'storage/app/public/'.$url;

            if($cita->image) {
                Storage::delete($cita->image->url);

                $cita->image()->update([
                    'url' => $url
                ]);
            }else{
                $cita->image()->create([
                    'url' => $url
                ]);

            }

        }

        if($request->tipos){

            foreach ($request->tipos as $tipo_id){
                $cita->tipos()->sync($tipo_id);
            }

        }

        return redirect()->route('admin.citas.edit',$cita)->with('info', 'La cita se actualizó con éxito');

    }


    public function destroy(Cita $cita)
    {
        $this->authorize('author',$cita);

        $cita->delete();

        return redirect()->route('admin.citas.index')->with('info', 'La cita se eliminó con éxito');


    }
}
