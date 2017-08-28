<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
              'name'=>'required|max:100',
              'body'=>'required',
              'manufacturer'=>'required',
              'categoryname'=>'required',
              'subcategoryname'=>'required',
              'cost'=>'required',
              'photo' => 'image|mimes:jpeg,bmp,png|size:1200'
        ];
        $photos = count($this->input('photos'));
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,png|max:1200';
        }
 
        return $rules;
    }
}
