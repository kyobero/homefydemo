<?php

namespace App\Http\Controllers;

use App\categoryregistration;

use Illuminate\Http\Request;

use App\Http\Requests\Categoryregistrations\CreateCategoryRegistrationRequest;
use App\Http\Requests\Categoryregistrations\UpdateCategoryRegistrationRequest;
class CategoryregistrationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categoryregistrations.index')->with('categoryregistrations', categoryregistration::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoryregistrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRegistrationRequest $request)
    {

        $categoryregistration = new categoryregistration();
        categoryregistration::create([
            'name' => $request->name
        ]);

        session()->flash('success', 'Status created successfully.');

        return redirect(route('categoryregistration.index'));
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
    public function edit(categoryregistration $categoryregistration)
    {
        return view('categoryregistrations\create')->with('categoryregistration', $categoryregistration);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRegistrationRequest $request, Categoryregistration $categoryregistration)
    {
        $categoryregistration->name=$request->name;

        $categoryregistration->save();

        session()->flash('success', 'status updated successfully.');

        return redirect(route('categoryregistration.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoryregistration $categoryregistration)
    {
       $categoryregistration->delete();

       session()->flash('success', 'status deleted successfully.');

       return redirect(route('categoryregistration.index'));
    }
}
