@extends('backend.master')


@section('content')
    <section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Course Details</h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <h2 class="card-inside-title">Main Course</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Main course Name" />
                                    </div>
                                    <div class="form-group">                                   
                                        <select class="form-control selectpicker" data-live-search="true">
                                <option value="">-- Select Category--</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                                    </div>
                                    <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Facebook link" />                                    
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Twiter Link" />                                   
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="Website Link" />                                    
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                            <h2 class="card-inside-title">Course Details</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Course title" />                                   
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="Course Details" name="Course Details" required></textarea>                                 
                                    </div>
                                </div>
                            </div>
                             <h2 class="card-inside-title">Course Syllabus</h2>
                            <div class="row clearfix">

                                    <div class="col-lg-4 col-md-12">
                                    <div class="form-group">                                   
                                        <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="Requirments" name="Requirments" required></textarea>                                 
                                   
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="Fees" name="Fees" required></textarea>                                 
                                    
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="Student Profile" name="Student Profile" required></textarea>                                 
                                   
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">                                   
                                        <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="How to apply" name="How to apply" required></textarea>                                 
                                  
                                    </div>
                                </div>
                            </div>
                             <h2 class="card-inside-title">Timetable</h2>
                            <div class="row clearfix">
                            
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="timetable title" />                                   
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">                                   
                                        <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="timetable discription" name="How to apply" required></textarea>                                 
                                  
                                    </div>
                                </div>
                                
                            </div>                        
                             <h2 class="card-inside-title">1st Year syllabus and assignment</h2>
                            <div class="row clearfix">
                            
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="timetable title" />                                   
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">                                   
                                        <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="timetable discription" name="How to apply" required></textarea>                                 
                                  
                                    </div>
                                </div>
                                
                             
                               
                            </div>                        
                            <h2 class="card-inside-title">Input Status</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" value="Focused" placeholder="Statu Focused" />                                    
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="Disabled" disabled />                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Textarea -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Textarea</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">Basic Example</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>

            <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2> <strong>Select</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></p>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick">
                                        <option value="">-- Please select --</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" disabled>
                                        <option value="">Disabled</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--DateTime Picker -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>DateTime</strong> Picker</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Taken from <a href="https://github.com/T00rk/bootstrap-material-datetimepicker" target="_blank">github.com/T00rk/bootstrap-material-datetimepicker</a> with <a href="http://momentjs.com/" target="_blank">momentjs.com</a></p>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-time"></i></span>
                                        </div>
                                        <input type="text" class="form-control timepicker" placeholder="Please choose a time...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control datetimepicker" placeholder="Please choose date & time...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection