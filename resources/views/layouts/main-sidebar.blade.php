<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg"  style="overflow-y: scroll;">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{route('dashboard')}}" >
                            <i class="ti-home"></i><span class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
                            
                           
                        </a>
                        <!-- <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="index.html">Dashboard 01</a> </li>
                            <li> <a href="index-02.html">Dashboard 02</a> </li>
                            <li> <a href="index-03.html">Dashboard 03</a> </li>
                            <li> <a href="index-04.html">Dashboard 04</a> </li>
                            <li> <a href="index-05.html">Dashboard 05</a> </li>
                        </ul> -->
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"> {{trans('main_trans.Tajweed')}}</li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="{{route('Grades.index')}}" >
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Grades')}}</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" >
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Sections')}}</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements3">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.ClassRooms')}}</span>
                        </a>
                        
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements4">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Teachers')}}</span>
                        </a>
                        
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements5">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Students')}}</span>
                        </a>
                       
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements6">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Pormostions')}}</span>
                        </a>
                        
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements7">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Gradutions')}}</span>
                        </a>
                        
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements8">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Attendence')}}</span>
                        </a>
                      
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements9">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Subjects')}}</span>
                        </a>

                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements10">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Queizes')}}</span>
                        </a>
                        
                    </li>

                    
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements11">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Library')}}</span>
                        </a>
                        
                    </li>

                    
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements12">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Zoom Classess')}}</span>
                        </a>
                       
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements12">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Users')}}</span>
                        </a>
                       
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements8">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Reports')}}</span>
                        </a>
                      
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements8">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Settings')}}</span>
                        </a>
                      
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements8">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Profile Website')}}</span>
                        </a>
                      
                    </li>
                  
        
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
