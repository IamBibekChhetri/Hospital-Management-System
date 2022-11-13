
@extends('layout.master')
@section('content')



<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3> Place Your Appointments Here:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{route('appointments.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="patientphoto">
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Patient Name:</label>
                                            <input class="form-control" name="patientname">
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                            <label>Address:</label>
                                            <input class="form-control" name="patientaddress">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Blood Group:</label>
                                            <input class="form-control" name="bloodgroup" style="text-transform: uppercase;">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Phone No:</label>
                                            <input class="form-control" type="number" name="patientphone">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>What is your problem?</label>
                                            <textarea class="form-control" rows="3" name="problems"></textarea>
                                        </div> 
                                        </div> 
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios1" value="male" checked>Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios2" value="female">Female
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios3" value="others">Others
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline1" value="active" checked>Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline2" value="deactive">Deactive
                                            </label>                                        
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Choose Your Doctor</label>
                                            <select class="form-control" name="doctorname">
                                                <option>Dr. Vivek</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">                                  
                                        
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-info">Reset</button>
                                    </form>
                                </div>
                             
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



@endsection 