
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
                                <form action="{{ route('hr.update',$hr->id) }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" name="hrPhoto">
                                            <img src="../../public/image/{{ $hr->hrPhoto }}" height="80px" width="80px">

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>HR Name</label>
                                                <input class="form-control" name="hrName" value="{{$hr->}}">
                                            </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input class="form-control" name="hrAddress" value="{{$hr->}}">
                                            </div>
                                            </div>
                                            <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input class="form-control" name="hrSalary" type="number" value="{{$hr->}}">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No:</label>
                                            <input class="form-control" name="hrPhone" type="number" value="{{$hr->}}"> 
                                        </div>
                                        </div>
                                        
                                       
                                        
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Departments</label>
                                            <select class="form-control" name="hrDepartment" value="{{$hr->}}">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>   
                                        </div>   
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Degination:</label>
                                        <input class="form-control" name="degination" value="{{$hr->}}">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status" value="{{$hr->}}">
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