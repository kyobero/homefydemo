<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Landpost;

class LandpostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landposts.index')->with('landposts', Landpost::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landposts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //upload the image to storage

        // $title_pic = $request->title_pic->store('landposts');
        // $survey_doc_pic = $request->survey_doc_pic->store('survey_doc_pic');

        $title_pic = $request->title_pic->store('landposts');
        $survey_doc_pic= $request->survey_doc_pic->store('landposts');

        //create the land post

        landpost::create ([
            'land_title' => $request ->land_title,
            'land_interest' => $request ->land_interest,
            'state' => $request ->state,
            'city' => $request ->city,
            'numberOfPlot' => $request ->numberOfPlot,
            'allocationNumber' => $request ->allocationNumber,
            'location_description' => $request ->location_description,
            'survey_plan_no' => $request ->survey_plan_no,
            'choose_lawyer'=> $request ->choose_lawyer,
            'title_pic' => $title_pic,
            'survey_No' => $request ->survey_No,
            'survey_doc_pic' => $survey_doc_pic
        ]);

        // // //flash message
        session()->flash('success', 'Landpost created successfully');


        // // // //redirect user
        return redirect( route('landposts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
