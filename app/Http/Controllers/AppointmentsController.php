<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i =1;
        $appointment = Appointments::all();
        return view('appointments.view', compact('appointment','i'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imageName = time().'.'.$request->file('patientphoto')->getClientOriginalExtension();
        move_uploaded_file($request->patientphoto, 'public/image/'.$imageName);
        $appointment=Appointments::create($request->all());
        $appointment->patientphoto = $imageName;
        $appointment->save();
        return redirect()->route('appointments.index')
            ->with('success','Form created successfully.');
                        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
        $appointment = Appointments::find($id);
        // return $appointment;
        return view('appointments.edit',compact('appointment'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointment)
    {
        $imageName = time().'.'.$request->file('patientphoto')->getClientOriginalExtension();    
        move_uploaded_file($request->patientphoto, 'public/image/'.$imageName);

        $appointment->patientphoto = $imageName;
            $appointment->patientphoto = $imageName;
            $appointment->patientname = $request->get('patientname');
            $appointment->patientaddress = $request->get('patientaddress');
            $appointment->bloodgroup = $request->get('bloodgroup');
            $appointment->patientphone = $request->get('patientphone');
            $appointment->gender = $request->get('gender');
            $appointment->doctorname = $request->get('doctorname');
            $appointment->problems = $request->get('problems');
            $appointment->status = $request->get('status');
            $appointment->save();
            
            return redirect()->route('appointments.index')
                ->with('success','Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $appointment = Appointments::find($id);
        $appointment->delete();
       
        return redirect()->route('appointments.index')
            ->with('success','Items deleted successfully');
    }
}
