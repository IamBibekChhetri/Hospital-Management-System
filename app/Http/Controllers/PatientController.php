<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\Doctor;
use Illuminate\Http\Request;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $patient = patient::all();
        return view('patient.view',compact('patient','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('patient.create',compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = time().'.'.$request->file('patient_photo')->getClientOriginalExtension();
        move_uploaded_file($request->patient_photo, 'public/image/'.$image);
        $patient=patient::create($request->all());
        $patient->patient_photo = $image;
        $patient->save();
        
        return redirect()->route('patient.index')
            ->with('success','Form created successfully.');
                        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(patient $patient)
    {
        $doctors = Doctor::all();
        return view('patient.edit',compact('patient','doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patient $patient)
    {
        $imageName = time().'.'.$request->file('patient_photo')->getClientOriginalExtension();    
        move_uploaded_file($request->patient_photo, 'public/image/'.$imageName);

        $patient->patient_photo = $imageName;
            $patient->patient_name = $request->get('patient_name');
            $patient->patient_age = $request->get('patient_age');
            $patient->patient_address = $request->get('patient_address');
            $patient->patient_phone = $request->get('patient_phone');
            $patient->patient_disease = $request->get('patient_disease');
            $patient->doctor = $request->get('doctor');
            $patient->gender = $request->get('gender');
            $patient->status = $request->get('status');
            $patient->save();
            
            return redirect()->route('patient.index')
                ->with('success','Patient Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(patient $patient)
    {
        $patient->delete();

        return redirect()->route('patient.index')
            ->withSuccess(__('Patient delete successfully.'));
    }
}
