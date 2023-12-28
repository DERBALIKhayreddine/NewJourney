<?php

namespace App\Http\Requests;

use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
            'firstname'=> ['required'],
            'lastname'=> ['required'],
            'email' => ['required','email'],
            'tel_number' => ['required'],
            'birth_date'=> ['required'],
            'post'=> ['required'],
            'town'=> ['required'],
            'codepostal'=> ['required'],
            'res_date'=> ['required','date',new DateBetween,new TimeBetween],
            'menu_id'=> ['required'],
            //
        ];
    }
}
