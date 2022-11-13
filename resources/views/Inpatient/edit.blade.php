
@extends('layout.master')
@section('content')



<div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3>Patient In Add Form:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form action="{{ route('inpatient.update',$inpatient->id) }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Patient Name:</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>                                            
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Room No:</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>                                            
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Lab No:</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>                                            
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date Of Admission:</label>
                                            <input type="datetime-local">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Date Of Discharge:</label>
                                            <input type="datetime-local">
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