<?php

namespace App\Http\Requests;

use App\Models\Course;
use Illuminate\Foundation\Http\FormRequest;

class SaveCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    // public function prepareForValidation()
    // {
    //     if ($this->route('course')) {
    //         $this->merge(['slug' => $this->input('slug', '') . ',' . $this->route('course')->id]);
    //     }
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array /*No se puede acceder al modelo Course $course*/
    {
        /**
         * La solución para excluir un campo de un registro que se esta actualizando es obtener el id
         * mediante la ruta y asignarla en la validación:
         */
        $courseId = $this->route('course') ? $this->route('course')->id : null;

        return [
            'name' => 'required',
            'slug' => 'required|unique:courses,slug,' . $courseId,

            // Esto no funciona ya que las request personalizadas no tienen acceso directo al modelo (Ej: Course $course)
            // 'slug' => 'required|unique:courses,slug,' . $course->id,
            // -------------------------

            'description' => 'required',
            'category' => 'required'
        ];
    }

    /**
     * Mensajes personalizados para las validaciones
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El :attribute es obligatorio',
        ];
    }

    /**
     * Atributos personalizados para el nombre del campo
     */
    public function attributes(): array
    {
        return [
            'name' => 'nombre del curso',
            'slug' => 'identificador de URL'
        ];
    }
}
