<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class CitaRequest extends FormRequest
{

    public function authorize()
    {

        return true;


    }

    public function rules()
    {

        $cita = $this->route()->parameter('cita');//null

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:citas',
            'file' => 'image',
            'Fecha' => 'required|unique:citas',
            'Hora' => 'required',
            'Status' => 'required',
            'category_id' => 'required',
            'tipos' => 'required',
            'extract' => 'required',
            'body' => 'required'
        ];

        if($cita){
            $rules['slug'] = 'required|unique:citas,slug,' .$cita->id;
        }







        return $rules;

    }
}
