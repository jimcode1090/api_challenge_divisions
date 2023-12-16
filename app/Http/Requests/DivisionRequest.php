<?php

namespace App\Http\Requests;

use App\Models\Division;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DivisionRequest extends FormRequest
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
        $upperDivisions = Division::isRoot()->tree()->get()->toTree()->pluck('id')->toArray();

        switch ($this->method()) {
            case 'PUT':
                return [
                    'nombre' => ['required', "max:45", Rule::unique('divisions')->ignore($this->nombre, 'nombre')],
                    'parent_id' => ['nullable', Rule::in($upperDivisions)],
                    'nivel' => ["required", "integer", "min:1"],
                    'colaboradores' => ['required', 'integer', 'min:0'],
                    'embajador' => ["required", 'string']
                ];
            case 'POST':
                return [
                    'nombre' => ['required', "max:45", Rule::unique('divisions')],
                    'parent_id' => ['nullable', Rule::in($upperDivisions)],
                    'nivel' => ["required", "integer", "min:1"],
                    'colaboradores' => ['required', 'integer', 'min:0'],
                    'embajador' => ["required", 'string']
                ];

            default:
                return [];
        }
    }

    public function attributes()
    {
        return [
            "nombre" => "nombre de la división",
            "parent_id" => "división superior",
            "colaboradores" => "cantidad de colaboradores",
        ];
    }
}
