
@extends('layout.master')
@section('content')



<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <h3>Human resources Adding Form</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{route('hr.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="hrPhoto">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>HR Name</label>
                                                <input class="form-control" name="hrName">
                                            </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input class="form-control" name="hrAddress">
                                            </div>
                                            </div>
                                            <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input class="form-control" name="hrSalary" type="number">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No:</label>
                                            <input class="form-control" name="hrPhone" type="number">
                                        </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Departments</label>
                                            <select class="form-control" name="department_id">
                                                
                                                    @foreach ($departments as $department)
                                                    <option value="{{$department->id}}">{{$department->departName}}</option>
                                                    @endforeach
                                               
                                            </select>
                                        </div>   
                                        </div>   
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Designation:</label>
                                        <input class="form-control" name="degination" >
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