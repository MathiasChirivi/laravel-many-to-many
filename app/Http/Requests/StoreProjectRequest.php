<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" =>"required|min:4|max:50",
            "image" =>"required|image|max:1024",
            "description" =>"required|min:4|max:65535",
            "repository" =>"nullable|url|min:4|max:255",
            "tipe_id" => "nullable|exists:tipes,id",
            "technologies" => "nullable|exists:technologies,id",
        ];
    }

    public function messages(){
        return[
            'title.required'=>'Il campo Titolo è richiesto',
            'description.required'=>'Il campo descrizione è richiesto',
            'repository.url'=>'Il campo repository deve essere un URL',
        ];
    }

}
