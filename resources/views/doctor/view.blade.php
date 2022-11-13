

@extends('layout.master')
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Doctors </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Doctors In Lumbeni Hospital PVT. LTD
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
                                            <th>Age</th>
                                            <th>Address</th>
                                            <th>Phone No</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($doctor as $doctors)
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td><img src="{{asset('public/image/'.$doctors->doctor_photo)}}" alt="" height="50px"></td>
                                            <td>{{$doctors->doctor_name}}</td>
                                            <td>{{$doctors->doctor_age}}</td>
                                            <td>{{$doctors->doctor_address}}</td>
                                            <td>{{$doctors->doctor_phone}}</td>
                                            <td>{{$doctors->doctor_gender}}</td>
                                            <td>{{$doctors->status}}</td>
                                            <td>
                                            <a href="{{ route('doctor.edit',$doctors->id) }}"><button class="btn btn-primary">Edit</button></a>  
                                            <form action="{{ route('doctor.destroy',$doctors->id) }}" method="POST">
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

    @endsection