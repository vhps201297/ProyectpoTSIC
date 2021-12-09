<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        //return $this->user();
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => 
            Rule::unique('proyects')->ignore($this->route('project')),
            'description' => 'required',
            'image' => [
                $this->route('project') ? 'nullable': 'required', 
                'mimes:png,jpg,jpeg']
        ];
    }

    /**
     * Función para generar un mensaje de validación personalizado.
     */
    public function messages(){
        return [
            'title.required' => 'Se necesita un titulo para el proyecto'
        ];
    }
}
