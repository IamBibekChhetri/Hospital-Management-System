
@extends('layout.master')
@section('content')



<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3>Departments Adding Form:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{route('departments.store')}}" method="POST">
                                    @csrf
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Department Name:</label>
                                            <input class="form-control" name="departName">
                                        </div>
                                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Head Of Department:</label>
                                            <input class="form-control" name="HOD">
                                        </div>
                                        </div>


                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="description"></textarea>
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