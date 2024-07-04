<?php

namespace App\Http\Controllers;

use App\Models\mstimaging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Helpers\GetData;
use Uasoft\Badaso\Models\DataType;
use Uasoft\Badaso\Helpers\ApiResponse;
use Uasoft\Badaso\Controllers\BadasoBaseController;
use Uasoft\Badaso\Helpers\Firebase\FCMNotification;


class mstimagingController extends BadasoBaseController 
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Models\mstimaging  $mstimaging
     * @return \Illuminate\Http\Response
     */
    public function show(mstimaging $mstimaging)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Models\mstimaging  $mstimaging
     * @return \Illuminate\Http\Response
     */
    public function edit(mstimaging $mstimaging)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models\mstimaging  $mstimaging
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mstimaging $mstimaging)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models\mstimaging  $mstimaging
     * @return \Illuminate\Http\Response
     */
    public function destroy(mstimaging $mstimaging)
    {
        //
    }
}
