
@extends('layout.master')
@section('content')



<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Lab Add Form:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{route('lab.store')}}" method="POST">
                                @csrf
                                        <div class="form-group">
                                            <label>Date:</label>
                                            <input type="datetime-local" name="lab_date" >
                                        </div>
                                    
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Lab No:</label>
                                            <input class="form-control" type="number" name="lab_no">
                                        </div>
                                        </div>
                                       
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Amount:</label>
                                            <input class="form-control" type="number" name="amount">
                                        </div>
                                        </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Doctor:</label>
                                            <select class="form-control" name="doctor_id" >
                                                @foreach ($doctors as $doctor)
                                                <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
                                                @endforeach
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