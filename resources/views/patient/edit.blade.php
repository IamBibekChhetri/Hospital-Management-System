
@extends('layout.master')
@section('content')



<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3>Patient Add Form:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{route('patient.update',$patient->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                        <div class="form-group">
                                            <label>Photo:</label>
                                            <input type="file" name="patient_photo">
                                            <img src="../../public/image/{{ $patient->patient_photo }}" height="80px" width="80px">
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Patient Name:</label>
                                            <input class="form-control" name="patient_name" value="{{$patient->patient_name}}">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input class="form-control" name="patient_age" type="number" value="{{$patient->patient_age}}">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" name="patient_address" value="{{$patient->patient_address}}">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone No:</label>
                                            <input class="form-control" name="patient_phone" type="number" value="{{$patient->patient_phone}}">
                                        </div>
                                        </div>                                        
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Diesease Description:</label>
                                            <textarea class="form-control" rows="3" name="patient_disease">{{$patient->patient_disease}}</textarea>
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Doctor:</label>
                                            <select class="form-control" name="doctor" >
                                                @foreach ($doctors as $doctor)
                                                <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Gender:</label>
                                            <select class="form-control" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>                                                
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <select class="form-control" name="status">
                                                <option>Active</option>
                                                <option>Deactive</option>                                                
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
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