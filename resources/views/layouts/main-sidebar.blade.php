<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
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
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements1">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Grades')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements1" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Grades')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Grade')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements2">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Sections')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements2" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Sections')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Section')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements3">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.ClassRooms')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements3" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.ClassRooms')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add ClassRoom')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements4">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Teachers')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements4" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Teachers')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Teacher')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements5">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Students')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements5" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Students')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Student')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements6">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Pormostions')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements6" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Pormostions')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Pormostion')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements7">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Gradutions')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements7" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Gradutions')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Gradution')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements8">
                            <i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Attendence')}}</span>
                        </a>
                      
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements9">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Subjects')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements9" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Subjects')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Subject')}}</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements10">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Queizes')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements10" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Queizes')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Queize')}}</a></li>
                        </ul>
                    </li>

                    
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements11">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Library')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements11" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">{{trans('main_trans.Library')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Book')}}</a></li>
                        </ul>
                    </li>

                    
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements12">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Zoom Classess')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements12" class="collapse" data-parent="#sidebarnav">
                        <li><a href="accordions.html">{{trans('main_trans.Zoom Classess')}}</a></li>
                            <li><a href="accordions.html">{{trans('main_trans.Add Online Class')}}</a></li>
                            <li><a href="alerts.html">{{trans('main_trans.Add Offline Class')}}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements12">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{trans('main_trans.Users')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements12" class="collapse" data-parent="#sidebarnav">
                        <li><a href="accordions.html">{{trans('main_trans.Users')}}</a></li>
                            <li><a href="accordions.html">{{trans('main_trans.Add User')}}</a></li>
                        </ul>
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
