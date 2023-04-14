<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class OrderTourRequest extends FormRequest
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
            'tour_id' => ['required', 'numeric', 'exists:tours,id'],
            'name' => ['required', 'string'],
            'familie' => ['required', 'string'],
            'mail' => ['required', 'email'],
            'phone' => ['required', 'regex:/^7([0-9]*)$/', 'max:16'],
            'promo_code' => [],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([]);
    }

    /*public function failedValidation(Validator $validator)
    {
       throw new HttpResponseException(response()->json([
         'success'   => false,
         'message'   => 'Validation errors',
         'data'      => $validator->errors()
       ])->setStatusCode(400));
    }*/

}
