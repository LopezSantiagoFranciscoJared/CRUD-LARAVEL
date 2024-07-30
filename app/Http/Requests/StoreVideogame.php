<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class StoreVideogame extends FormRequest
{
    public function authorize(): bool
    { 
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string,
     */
    public function rules(): array
    {
        return [
            //
            'nombre'=>'required|min:5|max:10',
        ];
    }
    public function attributes()
    {
        return [
            'nombre' => 'videogame name',
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del VideoJuego no puede estar Vacio',
            'nombre.min' => 'El nombre del VideoJuego debe tener minimo 5 Caracteres',
            'nombre.max' => 'El nombre de VideoJuego no puede tener mas de 10 Caracteres',
            
        ];
    }
}
