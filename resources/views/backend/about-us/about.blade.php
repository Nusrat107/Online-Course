@extends('backend.master')

@section('content')
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>


<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>About Us</h2>
                    
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2 class=""><strong>About</strong></h2>
                            <ul class="header-dropdown ">
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
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Page Title" name="name" required>
                                </div>
                                <div class="form-group form-float">
                                    <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="Page discribtion" name="surname" required></textarea>
                                </div>
                               <div class="row">
    <div class="form-group form-float col-6">
        <input type="text" name="icon" class="form-control" placeholder="e.g. fa-solid fa-star" required>
    </div>

    <div class="form-group form-float col-6">
        <input type="text" name="title" class="form-control" placeholder="Title" required>
    </div>
</div>
 <div class="form-group form-float">
                                    <textarea type="discribtion" name="description" rows="5" class="form-control"placeholder="Title discribtion" name="surname" required></textarea>
                                </div>

                
                            
                                </div>
                                <button class="btn button-1 btn-raised btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</section>


@endsection