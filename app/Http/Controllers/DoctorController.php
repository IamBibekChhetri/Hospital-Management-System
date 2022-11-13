<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
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
        $i = 1;
        $doctor = Doctor::all();
        return view('doctor.view',compact('doctor','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = time().'.'.$request->file('doctor_photo')->getClientOriginalExtension();
        move_uploaded_file($request->doctor_photo,'public/image/'.$image);
        $doctor = Doctor::create($request->all());
        $doctor->doctor_photo = $image;
        $doctor->save();
        return redirect()->route('doctor.index')
            ->with('success','Doctor Form created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        
        return view('doctor.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
       
        $image = time().'.'.$request->file('doctor_photo')->getClientOriginalExtension();    
        move_uploaded_file($request->doctor_photo, 'public/image/'.$image);

            $doctor->doctor_photo = $image;            
            $doctor->doctor_name = $request->get('doctor_name');
            $doctor->doctor_age = $request->get('doctor_age');
            $doctor->doctor_address = $request->get('doctor_address');
            $doctor->doctor_phone = $request->get('doctor_phone');
            $doctor->doctor_gender = $request->get('doctor_gender');
            $doctor->status = $request->get('status');
            $doctor->save();
            
            return redirect()->route('doctor.index')
                ->with('success','Doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctor.index')
            ->withSuccess(__('Doctor delete successfully.'));
    }
}
