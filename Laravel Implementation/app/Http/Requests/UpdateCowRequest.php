<?php

namespace App\Http\Requests;

use App\Models\Cow;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCowRequest extends FormRequest
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
        $rules = Cow::$rules;
        
        return $rules;
    }
}
