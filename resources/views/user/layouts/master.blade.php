<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('user_assets/images/favicon-32x32.png')}}" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{asset('user_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!--plugins-->
    <link href="{{asset('user_assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('user_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('user_assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!--Data Tables -->
	<link href="{{asset('user_assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- loader-->
    <link href="{{asset('user_assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('user_assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('user_assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('user_assets/css/icons.css')}}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('user_assets/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('user_assets/css/dark-sidebar.css')}}" />
    <link rel="stylesheet" href="{{asset('user_assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @stack('styles')
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <!--sidebar-wrapper-->
        @include('user.includes.sidebar')
        <!--end sidebar-wrapper-->
        <!--header-->
        @include('user.includes.header')
        
        <!--end header-->
        <!--page-wrapper-->
        @yield('content')
        
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
        @include('user.includes.footer')
        
        <!-- end footer -->
    </div>
    <!-- end wrapper -->
    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
                    <label class="form-check-label" for="darksidebar">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
                    <label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- JavaScript -->

    <!-- Bootstrap JS -->
    <script src="{{asset('user_assets/js/bootstrap.bundle.min.js')}}"></script>

    <!--plugins-->
    <script src="{{asset('user_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('user_assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('user_assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('user_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{asset('user_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('user_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('user_assets/plugins/vectormap/jquery-jvectormap-in-mill.js')}}"></script>
    <script src="{{asset('user_assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('user_assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js')}}"></script>
    <script src="{{asset('user_assets/plugins/vectormap/jquery-jvectormap-au-mill.js')}}"></script>
    <script src="{{asset('user_assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('user_assets/js/index.js')}}"></script>
    <!--Data Tables js-->
	<script src="{{asset('user_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    <!-- App JS -->
    <script src="{{asset('user_assets/js/app.js')}}"></script>
    <script>
        new PerfectScrollbar('.dashboard-social-list');
        new PerfectScrollbar('.dashboard-top-countries');
    </script>
    <script>
		$(document).ready(function () {
			//Default data table
            
			var table = $('#example2').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
			});
			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
	</script>
    @stack('scripts')
</body>

</html>