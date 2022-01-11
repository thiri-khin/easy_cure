<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('caremed-master/images/favicon.ico')}}" type="image/x-icon">
  <title>Easy Cure</title>

  <!-- Custom fonts for this template -->
  <link href="{{ asset('sb_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('sb_admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{ asset('sb_admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #021b7d;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <img src="{{asset('caremed-master/images/ez5.png')}}" width="120px" height="60px">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      @role('Admin')
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span class="font-weight-bold">Dashboard</span></a>
      </li>
      @endrole
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Component
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fab fa-wpforms"></i>
          <span class="font-weight-bold">Component Forms</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header font-weight-bold">Custom Components:</h6>
            @role('Admin')
            <a class="collapse-item text-primary" href="{{route('SpecializationBackend.create')}}"><i class="fas fa-crown"></i> Specializations</a>
            <a class="collapse-item text-primary" href="{{route('DoctorBackend.create')}}"><i class="fas fa-user-md"></i> Doctors</a>
            <a class="collapse-item text-primary" href="{{route('ScheduleBackend.create')}}"><i class="far fa-calendar-alt"></i> Schedules</a>
            <a class="collapse-item text-primary" href="{{route('rooms.create')}}"><i class="far fa-hospital"></i> Rooms</a>
            <a class="collapse-item text-primary" href="{{route('DegreeBackend.create')}}"><i class="fas fa-medal"></i> Degrees</a>
            @endrole
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Lists
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span class="font-weight-bold">Tables</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Table Lists:</h6>
            <a class="collapse-item text-primary" href="{{route('appointmentbackend.index')}}"><i class="far fa-calendar-check"></i> Appointments</a>
            @role('Admin')
            <a class="collapse-item text-primary" href="{{route('appointmentbackendadmin.index')}}"><i class="far fa-calendar-check"></i> All Appointments</a>
            <a class="collapse-item text-primary" href="{{route('SpecializationBackend.index')}}"><i class="fas fa-crown"></i> Specializations</a>
            <a class="collapse-item text-primary" href="{{route('DoctorBackend.index')}}"><i class="fas fa-user-md"></i> Doctors</a>
            <a class="collapse-item text-primary" href="{{route('ScheduleBackend.index')}}"><i class="far fa-calendar-alt"></i> Schedules</a>
            <a class="collapse-item text-primary" href="{{route('rooms.index')}}"><i class="far fa-hospital"></i> Rooms</a>
            @endrole
            <a class="collapse-item text-primary" href="{{route('patients.index')}}"><i class="fas fa-users"></i> Patients</a>
            @role('Admin')
            <a class="collapse-item text-primary" href="{{route('curingpatient.index')}}"><i class="fas fa-procedures"></i> Curing Patients</a>
            <a class="collapse-item text-primary" href="{{route('contactbackend.index')}}"><i class="fas fa-envelope-open-text"></i> Messages</a>
            <a class="collapse-item text-primary" href="{{route('DegreeBackend.index')}}"><i class="fas fa-medal"></i> Degrees</a>
            @endrole
        </div>
      </li>


      <hr class="sidebar-divider">
      @role('Admin')
      <!-- Heading -->
      <div class="sidebar-heading">
        Search list
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span class="font-weight-bold">Search List</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Search Lists:</h6>
            <a class="collapse-item text-primary" href="{{route('search.index')}}"><i class="fas fa-users"></i> Patient Search</a>
            <a class="collapse-item text-primary" href="{{route('curingpatientsearch.index')}}"><i class="fas fa-procedures"></i> Curing Patient Search</a>
            <a class="collapse-item text-primary" href="{{route('date.index')}}"><i class="fas fa-procedures"></i> Reports</a>
            <!-- <a class="collapse-item text-primary" href="{{route('appointmentbackend.index')}}"><i class="fas fa-user-md"></i> Doctors Search</a> -->
            
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      @endrole

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            

          <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
@yield('content')

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('sb_admin/vendor/jquery/jquery.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('sb_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('sb_admin/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('sb_admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('sb_admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('sb_admin/js/demo/datatables-demo.js') }}"></script>
  <!--  -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="{{asset('sb_admin/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

  <script type="text/javascript">
    
    $(document).ready(function() {
        $('.multipart').select2();
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('#speciality').on('change',function (e) {
        console.log(e);
        var cat_id = e.target.value;
        console.log(cat_id);
        $.get('/ajax-subcat?cat_id=' +cat_id,function (data) {
          $('#doctor').empty();
          $.each(data,function (create,subcatObj) {
            $('#doctor').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
          });
        });
      });
    });
    </script>
    @yield('script')

</body>

</html>
