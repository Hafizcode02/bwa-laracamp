<?php

namespace App\Http\Controllers;

use App\Models\CampBenefit;
use App\Http\Requests\StoreCampBenefitRequest;
use App\Http\Requests\UpdateCampBenefitRequest;

class CampBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCampBenefitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampBenefitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CampBenefit  $campBenefit
     * @return \Illuminate\Http\Response
     */
    public function show(CampBenefit $campBenefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CampBenefit  $campBenefit
     * @return \Illuminate\Http\Response
     */
    public function edit(CampBenefit $campBenefit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampBenefitRequest  $request
     * @param  \App\Models\CampBenefit  $campBenefit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampBenefitRequest $request, CampBenefit $campBenefit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampBenefit  $campBenefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampBenefit $campBenefit)
    {
        //
    }
}
