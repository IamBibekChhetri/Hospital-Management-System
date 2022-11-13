

@extends('layout.master')
@section('content')


           
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Appointments</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Appointments Available Here.
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
                                            <th>Address</th>
                                            <th>Phone No</th>
                                            <th>Gender</th>
                                            <th>Blood Group</th>
                                            <th>Doctor Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($appointment as $appointment)
                                        <tr class="odd gradeX">
                                            <td>{{ $i++ }}</td> 
                                            <td><img src="{{asset('public/image/'.$appointment->patientphoto)}}" alt="" height="50px"></td>
                                            <td>{{ $appointment->patientname }}</td>
                                            <td class="center">{{ $appointment->patientaddress }}</td>
                                            <td class="center">{{ $appointment->patientphone }}</td>
                                            <td class="center" style="text-transform: capitalize;">{{ $appointment->gender }}</td>
                                            <td class="center" style="text-transform: uppercase;">{{ $appointment->bloodgroup }}</td>
                                            <td class="center">{{ $appointment->doctorname }}</td>
                                            <td>
                                            <a href="{{ route('appointments.edit',$appointment->id) }}"><button class="btn btn-primary">Edit</button></a>  
                                            <form action="{{ route('appointments.destroy',$appointment->id) }}" method="POST">
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