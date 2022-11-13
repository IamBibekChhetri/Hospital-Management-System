
@extends('layout.master')
@section('content')



<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Blood Management System:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{route('blood.store')}}" method="POST">
                                        @csrf
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Hospital Name:</label>
                                            <input class="form-control" name="hospital_name">
                                        </div>
                                        </div>
                                       
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Blood Bank:</label>
                                            <input class="form-control" name="blood_bank" placeholder="Blood Bank Near Me...">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Location:</label>
                                            <input class="form-control" name="location">
                                        </div>
                                        </div>
                                       
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No:</label>
                                            <input class="form-control" name="contact">
                                        </div>
                                        </div>
                                       
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Blood Group:</label>
                                            <input class="form-control" name="blood_group">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Regester Date:</label>
                                            <input class="form-control" type="datetime-local"  name="reg_date">
                                        </div>
                                        </div>
                                       
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Diesease:</label>
                                            <select class="form-control" name="diesease">
                                                <option>No</option>
                                                <option>Yes</option>
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