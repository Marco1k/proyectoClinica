<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Category;
use App\Models\Tipo;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index(){
        $citas = Cita::where('status',2)->latest('id')->paginate(8);

        return view('citas.index',compact('citas'));
    }

    public function show(Cita $cita){

      //  $this->authorize('published', $cita);


        $similares = Cita::where('category_id', $cita->category_id)
            ->where('status',2)
            ->where('id','!=',$cita)
            ->latest('id')
            ->take(4)
            ->get();


        return view('citas.show', compact('cita', 'similares'));
    }


    public function category(Category $category){
        $citas = Cita::where('category_id', $category->id)
            ->where('status',2)
            ->latest('id')
            ->paginate(4);

        return view('citas.category', compact('citas','category'));
    }

    public function tipo(Tipo $tipo){

        $citas = $tipo->citas()->where('status',2)->latest('id')->paginate(4);

        return view('citas.tipo',compact('citas', 'tipo'));
    }

}
