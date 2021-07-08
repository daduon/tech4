<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProgramRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'title_en' => 'required',
            'subtitle_en' => 'required',
            'img' => ['mimes:jpeg,jpg,png|max:10000|image',Rule::requiredIf(function () {
                $previous = explode('/edit',url()->previous());
                $currentUrl = url()->current();
//                dd($previous[0]===$currentUrl,$currentUrl,$currentUrl===url('/program'));
                return isset($previous[0]) && $previous[0]=== $currentUrl && $currentUrl===url('/programs');
            })],
            'icon' => 'mimes:jpeg,jpg,png|max:10000|image',
            'short_text_en' => 'required',
            'text_en' => 'required'
        ];
    }
}
