<?php

namespace App\Http\Requests\Landposts;

use Illuminate\Foundation\Http\FormRequest;

class CreateLandPostRequest extends FormRequest
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
            
            'land_title' => 'required|unique:landposts',
            'land_interest' => 'required',
            'state' => 'required',
            'city' => 'required',
            'numberOfPlot' => 'required',
            'allocationNumber' => 'required',
            'location_description' => 'required',
            'survey_plan_no' => 'required',
            'choose_lawyer'=> 'required',
            'title_pic' => 'required|image',
            'survey_No' => 'required',
            'survey_doc_pic' => 'required|image'

        ];
    }
}
