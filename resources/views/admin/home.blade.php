@extends('admin.layouts.app')

   @section('main-content')
      

        <div class="content-page" style="margin-top: 76px;">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- tasks panel -->
                    <div class="row">
                        <div class="col-xl-8">
                            
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            @include('message.message')
                        <div class="row">

                            <div class="col-md-4 col-xl-6">

                                <div class="card">
                                    <div class="card-body p-0">

                                        <div class="media p-3">
                                            <div class="align-self-center">
                                             <div class="col-xl-3 col-lg-4 col-sm-6">
                                                <i class='uil uil-user' style="size: lg"></i>
                                            </div>
                                            </div>
                                            <div class="media-body">
                                                <h2 class="mb-0">200</h2>
                                                <span class="text-muted font-size-12 font-weight-bold">Total Users</span>

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 col-xl-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="align-self-center">
                                             
                                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                                <i class='uil uil-home'></i>
                                            </div>
                                            </div>
                                            <div class="media-body">
                                                <h2 class="mb-0">200</h2>
                                                <span class="text-muted font-size-12 font-weight-bold">Total Gyms</span>

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="align-self-center">
                                             <div class="col-xl-3 col-lg-4 col-sm-6">
                                                <i class='uil uil-volume'></i>
                                            </div>
                                            </div>
                                            <div class="media-body">
                                                <h2 class="mb-0">200</h2>
                                                <span class="text-muted font-size-12 font-weight-bold">Total Affiliate Partners</span>

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-6">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="align-self-center">
                                             
                                               <div class="col-xl-3 col-lg-4 col-sm-6">
                                                <i class='uil uil-users-alt'></i>
                                            </div>
                                            </div>
                                            <div class="media-body">
                                                <h2 class="mb-0">200</h2>
                                                <span class="text-muted font-size-12 font-weight-bold">Total Verified Users</span>

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div> 

                        <div class="row">
                        

                        <div class="card-body pt-2">
                                        <h5 class="mb-4 header-title">Top Affiliated Users</h5>

                                        <div class="media border-top pt-3">

                                            <img src="{{asset('public/assets/images/users/avatar-7.jpg')}}" class="avatar rounded mr-3"
                                                alt="shreyu">
                                            <div class="media-body">
                                                <div class="dropdown align-self-center float-right">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-edit-alt mr-2"></i>Edit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-exit mr-2"></i>Remove from Team</a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                            class="uil uil-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                               <b> <h3 class="mt-1 mb-1 font-size-15">Cliff Hanger</h3></b>
                                                <p class="mb-0 mt-2">
                                                    <i data-feather="map-pin"></i>
                                                       <span style="align-content: center;" class="text-muted">Texas</span>  
                                                </p>
                                                <h6 class="text-muted font-weight-normal mt-1 mb-3">Date: 12/02/2020 </h6>
                                            


                                            </div>
                                            
                                        </div>
                                         <div class="media border-top pt-3">

                                            <img src="{{asset('public/assets/images/users/avatar-7.jpg')}}" class="avatar rounded mr-3"
                                                alt="shreyu">
                                            <div class="media-body">
                                                <div class="dropdown align-self-center float-right">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-edit-alt mr-2"></i>Edit</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i
                                                            class="uil uil-exit mr-2"></i>Remove from Team</a>
                                                    <div class="dropdown-divider"></div>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i
                                                            class="uil uil-trash mr-2"></i>Delete</a>
                                                </div>
                                            </div>
                                               <b> <h3 class="mt-1 mb-1 font-size-15">Chris Hemsworth</h3></b>
                                                <p class="mb-0 mt-2">
                                                    <i data-feather="map-pin"></i>
                                                       <span style="align-content: center;" class="text-muted">Texas</span>  
                                                </p>
                                                <h6 class="text-muted font-weight-normal mt-1 mb-3">Date: 12/02/2020 </h6>
                                            


                                            </div>
                                            
                                        </div>


                                        
                                    </div>                            

                        </div>

                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- task details -->
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row pb-3 border-bottom">
                                        <div class="col">

                                            @include('admin.layouts.rightsidebar')

                                        </div>
                                    </div>

                                  
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>

                </div> <!-- container-fluid -->

            </div> <!-- content -->
        </div>

   @endsection