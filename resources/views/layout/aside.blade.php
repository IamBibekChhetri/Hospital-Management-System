

<div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
<!-- ----------------------------------- Dashboard --------------------------  -->
                        <li>
                            <a href="{{asset('header')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
<!-- ---------------------------------- Patients ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Patient<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('patient/create')}}">Add Patient</a>
                                </li>
                                <li>
                                    <a href="{{asset('patient')}}">View Patient</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<!-- ---------------------------------- Doctor ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Doctor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('doctor/create')}}">Add Doctor</a>
                                </li>
                                <li>
                                    <a href="{{asset('doctor')}}">View Doctor</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<!-- -------------------------------------- HR Management ---------------------------------  -->
                       
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> HR Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('hr/create')}}">Add HR</a>
                                </li>
                                <li>
                                    <a href="{{asset('hr')}}">View HR</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<!-- ---------------------------------- Appointments ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Appointments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('appointments/create')}}">Add Appointments</a>
                                </li>
                                <li>
                                    <a href="{{asset('appointments')}}">View Appointments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<!-- ---------------------------------- Departments ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('departments/create')}}">Add Departments</a>
                                </li>
                                <li>
                                    <a href="{{asset('departments')}}">View Departments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                      
    <!-- ---------------------------- Patient Management ----------------------------   -->
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Patient Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#">In-patient <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{asset('inpatient/create')}}">Add In-patient</a>
                                        </li>
                                        <li>
                                            <a href="{{asset('inpatient')}}">View In-patient</a>
                                        </li>
                                        
                                    </ul>
                                    
                                </li>
                                <li>
                                    <a href="#">Out-patient<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{asset('outpatient/create')}}">Add Out Patient</a>
                                        </li>
                                        <li>
                                            <a href="{{asset('outpatient')}}">View Out Patient</a>
                                        </li>
                                        
                                    </ul>
                                  
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
 <!-- ---------------------------------- Lab Management ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Lab Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('lab/create')}}">Add Lab Management</a>
                                </li>
                                <li>
                                    <a href="{{asset('lab')}}">View Lab Management</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
 <!-- ---------------------------------- Pharmacy Management ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Pharmacy Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('pharmacy/create')}}">Add Pharmacy Management</a>
                                </li>
                                <li>
                                    <a href="{{asset('pharmacy')}}">View Pharmacy Management</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
 <!-- ---------------------------------- Blood Management ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Blood Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('blood/create')}}">Add Blood Management</a>
                                </li>
                                <li>
                                    <a href="{{asset('blood')}}">View Blood Management</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
 <!-- ---------------------------------- Room Management ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Room Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('room/create')}}">Add Room Management</a>
                                </li>
                                <li>
                                    <a href="{{asset('room')}}">View Room Management</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
 <!-- ---------------------------------- Finance Management ---------------------------------  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Finance Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{asset('finance/create')}}">Add Finance Management</a>
                                </li>
                                <li>
                                    <a href="{{asset('finance')}}">View Finance Management</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

 <!-- ------------------------------------------- User status ----------------------                         -->
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div> 