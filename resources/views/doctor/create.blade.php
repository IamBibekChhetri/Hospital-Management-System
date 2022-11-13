
@extends('layout.master')
@section('content')



<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3>Doctor In Add Form:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf      
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="doctor_photo">
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Name:</label>
                                            <input class="form-control" name="doctor_name">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Age:</label>
                                            <input class="form-control" name="doctor_age" type="number">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Address:</label>
                                            <input class="form-control" name="doctor_address">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Phone No:</label>
                                            <input class="form-control" name="doctor_phone" type="number">
                                        </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="doctor_gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                               
                                            </select>
                                        </div>
                                        </div>
                                        
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>Active</option>
                                                <option>Deactive</option>
                                               
                                            </select>
                                        </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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