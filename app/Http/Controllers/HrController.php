<?php

namespace App\Http\Controllers;

use App\Models\hr;
use App\Models\Departments;
use Illuminate\Http\Request;

class HrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 1;
        $hr = hr::all();
        return view('hr.view',compact('hr','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Departments::all();
        return view('hr.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = time().'.'.$request->file('hrPhoto')->getClientOriginalExtension();
        move_uploaded_file($request->hrPhoto, 'public/image/'.$image);
        $hr=hr::create($request->all());
        $hr->hrPhoto = $image;
        $hr->save();
        return redirect()->route('hr.index')
            ->with('success','HR Form created successfully.');
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hr  $hr
     * @return \Illuminate\Http\Response
     */
    public function show(hr $hr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hr  $hr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hr = hr::find($id);
        return view('hr.edit',compact('hr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hr  $hr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hr $hr)
    {
        $image = time().'.'.$request->file('hrPhoto')->getClientOriginalExtension();    
        move_uploaded_file($request->hrPhoto, 'public/image/'.$image);

       
            $hr->hrPhoto = $image;
            $hr->hrName = $request->get('hrName');
            $hr->hrAddress = $request->get('hrAddress');
            $hr->hrSalary = $request->get('hrSalary');
            $hr->hrPhone = $request->get('hrPhone');
            $hr->departName_id = $request->get('departName_id');
            $hr->degination = $request->get('degination');
            $hr->status = $request->get('status');
            $hr->save();
            
            return redirect()->route('hr.index')
                ->with('success','HR Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hr  $hr
     * @return \Illuminate\Http\Response
     */
    public function destroy(hr $hr)
    {
        $hr->delete();

        return redirect()->route('hr.index')
            ->withSuccess(__('HR delete successfully.'));
    }
}
