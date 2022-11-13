

@extends('layout.master')
@section('content')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Patients</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Patients Table
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
                                            <th>Phone No:</th>
                                            <th>Doctor:</th>
                                            <th>Gender:</th>
                                            <th>Status:</th>
                                            <th>Action:</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($patient as $patients)
                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td><img src="{{asset('public/image/'.$patients->patient_photo)}}" alt="" height="50px"></td>
                                            <td>{{$patients->patient_name}}</td>
                                            <td>{{$patients->patient_age}}</td>
                                            <td>{{$patients->patient_address}}</td>
                                            <td>{{$patients->patient_phone}}</td>
                                            <td>{{$patients->doctor->doctor_name}}</td>
                                            <td>{{$patients->gender}}</td>
                                            <td>{{$patients->status}}</td>
                                            <td class="centre">
                                            <a href="{{ route('patient.edit',$patients->id) }}"><button class="btn btn-primary">Edit</button></a>  
                                            <form action="{{ route('patient.destroy',$patients->id) }}" method="POST">
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