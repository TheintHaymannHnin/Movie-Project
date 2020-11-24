<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts/c3charts/c3.css')}}">
    <title> @yield('title','Movie Admin Panel')</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
                
           
                    <nav class="navbar navbar-expand-lg bg-white fixed-top">
                {{-- <a class="navbar-brand" href="index.html">Concept</a> --}}
                <form  action="{{url('/logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark btn-sm ml-3 mr-3" onclick="return confirm('Are you sure you want to logout')">Logout</button>
                      <span class="text-dark"><b>{{Auth::user()->name}}</b></span>
                  </form>
               


                
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            {{-- <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            --}}
                            
                            <li class="nav-item">
                                    <a class="nav-link" href="{{url('Admin/movie/index')}}" ><i class="fas fa-fw fa-table"></i>Movies</a>
                                    
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="{{url('/Admin/companies')}}" ><i class="fas fa-fw fa-table"></i>Companies</a>
                                        
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{url('/Admin/actors')}}" ><i class="fas fa-fw fa-table"></i>Actors</a>
                                            
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{url('/Admin/actresses')}}" ><i class="fas fa-fw fa-table"></i>Actresses</a>
                                                
                                            </li>
                                            <li class="nav-item">
                                                    <a class="nav-link" href="{{url('/Admin/writers')}}" ><i class="fas fa-fw fa-table"></i>Writers</a>
                                                    
                                                </li>
                                                <li class="nav-item">
                                                        <a class="nav-link" href="{{url('/Admin/directors')}}" ><i class="fas fa-fw fa-table"></i>Directors</a>
                                                        
                                                    </li>
                                                    <li class="nav-item">
                                                            <a class="nav-link" href="{{url('/Admin/categories')}}" ><i class="fas fa-fw fa-table"></i>Categories</a>
                                                            
                                                        </li>
                                                        <li class="nav-item">
                                                                <a class="nav-link" href="{{url('/Admin/genres')}}" ><i class="fas fa-fw fa-table"></i>Genres</a>
                                                                
                                                            </li>
                                                            <li class="nav-item">
                                                                    <a class="nav-link" href="{{url('Admin/users')}}" ><i class="fas fa-fw fa-table"></i>Users</a>
                                                                    
                                                                </li>
                                                                <li class="nav-item">
                                                                        <a class="nav-link" href="{{url('Admin/roles')}}" ><i class="fas fa-fw fa-table"></i>Roles</a>
                                                                        
                                                                    </li>
                                                                    
                            
                        </ul>
                        
                        
                    </div>
                    
                        
                </nav>
                <br>
                <br>
                        <br>
                        <br>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            @yield('content')
                            
                        </div>
                    </div>
                    
            </div>
            
        </div>
        
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{asset('assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{asset('assets/libs/js/dashboard-ecommerce.js')}}"></script>
</body>


 
</html>