<?php

namespace App\Http\Requests;

use App\Models\Production;
use Illuminate\Foundation\Http\FormRequest;

class CreateProductionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return Production::$rules;
    }
}
