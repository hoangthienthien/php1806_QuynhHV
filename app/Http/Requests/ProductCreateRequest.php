<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
        return [

            'category_id' => ['required', 'numeric'],
            'product_name' => ['required'],
            'price' => ['required', 'integer'],
            'image' => ['required'],
            'quantity' => ['required', 'integer'],
            'avg_rating' => ['required'],
        ];
    }

    public function messages() {
        return [
            'category_id.required' => 'Nhap truong nay di em',
        ];
    }

    protected function failValidation(Validator $validaor) {
        $error = (new ValidationException($validator)) ->errors();
        throw new HttpResponseException(response()->json(
            [
                'error' => $errors,
                'status_code' => 422,
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
        
    }

}
