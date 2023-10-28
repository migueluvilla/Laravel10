<?php

namespace App\Http\Requests;

Use Illuminate\Foundation\Http\FormRequest;


class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'                => 'required|max:40|min:3',
            'description'          => 'required|max:255|min:3',

            'title.required'       =>'Se requiere ingresar un título',
            'title.max'            =>'El título NO debe superar los 40 caracteres',
            'title.min'            =>'El título DEBE tener al menos 3 caracteres',
            'description.required' =>'Se requiere ingresar una descripción',
            'description.max'      =>'La descripción NO debe superar los 255 caracteres',
            'description.min'      =>'La descripción DEBE tener al menos 3 caracteres',
        ];
    }
}
