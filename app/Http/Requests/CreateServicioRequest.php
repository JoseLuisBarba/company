<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cPerApellido' => 'required',
            'cPerNombre' => 'required',
            'cPerDireccion' => 'required',
            'cPerSexo' => 'required',
            'cPerFecNac' => 'required',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'nPerEstado' => 'required',
            'image' => [ 
                $this->route('persona') ? 'nullable' : 'required', 'mimes:png,jpg,jpeg',
            ]
        ];
    }

    public function messages(){
        return [
            'cPerApellido.required' => 'Se necesita el Apellido',
            'cPerNombre.required' => 'Se necesita el Nombre',
            'cPerDireccion.required' => 'Se necesita la dirección',
            'cPerSexo.required' => 'Se necesita el sexo',
            'cPerFecNac.required' => 'Se necesita fecha de nacimiento',
            'nPerEdad.required' => 'Se necesita edad',
            'nPerSueldo.required' => 'Se necesita sueldo',
            'nPerEstado.required' => 'Se necesita el estado',
            'image.required' => 'Debes seleccionar una imagen'
        ];
    }


}