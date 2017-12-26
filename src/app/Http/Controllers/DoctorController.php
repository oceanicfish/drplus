<?php

namespace App\Http\Controllers;

use DB;
use Cache;
use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        DB::Connection()->enableQueryLog();
        $result = Cache::remember('all_doctors_cache', 1, function(){
          $doctors = Doctor::all();
          return json_encode($doctors, JSON_UNESCAPED_UNICODE);
        });
        $log = DB::getQueryLog();
        echo "<pre style=\"color:#ff4444\">";
        print_r($log);
        echo "</pre>";
        echo "<pre style=\"color:#9933cc\">";
        print_r(getHostByName(getHostName()));
        echo '</pre>';
        echo "<pre style=\"color:#007433\">";
        print_r($result);
        echo '</pre>';
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
        $doctor = new Doctor();
        $doctor->fill($request->all());
        $doctor->save();
        return json_encode("New doctor created successfully", JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
