<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landpost extends Model
{
    protected $fillable = [

        'land_title', 'land_interest', 'state', 'city','numberOfPlot', 'allocationNumber','location_description', 'survey_plan_no', 'choose_lawyer', 'title_pic', 'survey_No', 'survey_doc_pic', 'published_at' 
    ];
}