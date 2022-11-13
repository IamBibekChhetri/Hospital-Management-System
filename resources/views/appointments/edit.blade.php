
@extends('layout.master')
@section('content')



<div id="page-wrapper">     


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Place Your Appointments Here:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{ route('appointments.update',$appointment->id) }}"  method="POST" enctype="multipart/form-data">
                                
                                @csrf
                                @method('PUT')
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="patientphoto">
                                            <img src="../../public/image/{{ $appointment->patientphoto }}" height="80px" width="80px">
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Patient Name:</label>
                                            <input class="form-control" name="patientname" value="{{ $appointment->patientname }}">
                                        </div>
                                        
                                        <div class="form-group">
                                        
                                            <label>Address:</label>
                                            <input class="form-control" name="patientaddress" value="{{ $appointment->patientaddress }}">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Blood Group:</label>
                                            <input class="form-control" name="bloodgroup" value="{{ $appointment->bloodgroup }}" style="text-transform: capitalize;">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Phone No:</label>
                                            <input class="form-control" type="number" value="{{ $appointment->patientphone }}" name="patientphone">
                                        </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
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
                                        
                                        
                                        <div class="form-group">
                                            <label>Choose Your Doctor</label>
                                            <select class="form-control" name="doctorname" value="{{ $appointment->doctorname }}">
                                                <option value="vivek">Dr. Vivek</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label>What is your problem?</label>
                                            <textarea class="form-control" rows="3" name="problems" >{{ $appointment->problems }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline1" value="active" checked>Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" id="optionsRadiosInline2" value="deactive">Deactive
                                            </label>                                        
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update </button>
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
        
        <!-- /#page-wrapper -->

</div>

@endsection 