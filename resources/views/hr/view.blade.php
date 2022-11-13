

@extends('layout.master')
@section('content')


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Human Resource</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Human Resource Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Salary</th>
                                            <th>Phone</th>
                                            <th>Department</th>
                                            <th>Degination</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hr as $hrs)
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td><img src="{{asset('public/image/'.$hrs->hrPhoto)}}" alt="" height="50px"></td>
                                            <td>{{$hrs->hrName}}</td>
                                            <td>{{$hrs->hrAddress}}</td>
                                            <td>{{$hrs->hrSalary}}</td>
                                            <td>{{$hrs->hrPhone}}</td>
                                            <td>{{$hrs->department->departName}}</td>
                                            <td>{{$hrs->degination}}</td>
                                            <td>{{$hrs->status}}</td>
                                            <td>
                                            <a href="{{ route('hr.edit',$hrs->id) }}"><button class="btn btn-primary">Edit</button></a>  
                                            <form action="{{ route('hr.destroy',$hrs->id) }}" method="POST">
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