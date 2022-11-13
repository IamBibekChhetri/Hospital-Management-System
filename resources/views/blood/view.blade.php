

@extends('layout.master')
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Hospital Name</th>
                                            <th>Blood Bank Name</th>
                                            <th>Location</th>
                                            <th>Contact</th>
                                            <th>Blood Group</th>
                                            <th>Regestration Date</th>
                                            <th>Diesease</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blood as $blood)
                                        <tr class="odd gradeA">
                                            <td>{{ $i++ }}</td>                                            
                                            <td>{{$blood->hospital_name}}</td>
                                            <td>{{$blood->blood_bank}}</td>
                                            <td>{{$blood->location}}</td>
                                            <td>{{$blood->contact}}</td>
                                            <td>{{$blood->blood_group}}</td>
                                            <td>{{$blood->reg_date}}</td>
                                            <td>{{$blood->diesease}}</td>
                                            <td>{{$blood->status}}</td>
                                            <td>
                                            <a href="{{ route('blood.edit',$blood->id) }}"><button class="btn btn-primary">Edit</button></a>  
                                            <form action="{{ route('blood.destroy',$blood->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick=" return confirm('Are You sure you want to logout?');">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                       @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @endsection