<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Groomly - admin login</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('admin_assets/images/favicon-32x32.png')}}" type="image/png" />
    <!-- loader-->
    <link href="{{asset('admin_assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('admin_assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/icons.css')}}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/app.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="bg-login">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="section-authentication-login d-flex align-items-center justify-content-center mt-4">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card radius-15 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-xl-6">
                                <div class="card-body p-5">
                                    <div class="text-center">
                                        <img src="{{asset('frontend_assets/images/logo.png')}}" width="180" alt="">
                                        <h3 class="mt-4 font-weight-bold">Welcome Back</h3>
                                    </div>
                                    <div class="">

                                        <div class="form-body">
                                            <form class="row g-3" action="{{route('admin.login.check')}}" method="post">
                                                @csrf
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="inputEmailAddress" placeholder="Email Address">
                                                    @if($errors->has('email'))
                                                    <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" class="form-control border-end-0" name="password" id="inputChoosePassword"  placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                                    </div>
                                                    @if($errors->has('password'))
                                                    <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 text-end">
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <!-- <p>If you have already account. <a href="javascript:void(0);"></a></p> -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 bg-login-color d-flex align-items-center justify-content-center">
                                <img src="{{asset('frontend_assets/images/about.jpg')}}" class="img-fluid" alt="...">
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>

<!--plugins-->
<script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
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
<!--Password show & hide js -->
<script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>

</html>