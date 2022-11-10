<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Http\Requests\StoreIndustryRequest;
use App\Http\Requests\UpdateIndustryRequest;
use Illuminate\Support\Facades\DB;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        

        //DB Query
        //$industries = DB::table('industries')->get();

        //Eloquent
        $industries = Industry::all();

        //return  view('departments.department',compact('data','data2','departments'));
        return view('Industries.industry',compact('industries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Industries.industry_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIndustryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIndustryRequest $request)
    {       
        //save in database
        Industry::create($request->all());

        //to reload page
        return redirect()->route('industries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function show(Industry $industry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function edit(Industry $industry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIndustryRequest  $request
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIndustryRequest $request, Industry $industry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industry $industry)
    {
        //
    }
}
