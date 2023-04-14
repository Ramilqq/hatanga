<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'res_id' => ['required', 'numeric', 'exists:posts,id'],
            'name' => ['required', 'string'],
            'mail' => ['required', 'email'],
            'body' => ['required', 'string'],
            'model' => [],
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
