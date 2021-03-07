<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'organizer' => 'required',
            'date' => 'required',
            'time_to' => 'required',
            'time_from' => 'required',
            'location_en' => 'required',
            'location_ar' => 'required',
            'contact' => 'required',
         ];
    }
}
