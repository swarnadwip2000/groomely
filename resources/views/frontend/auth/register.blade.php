<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Groomely | Register</title>
    <!-- <script src="https://unpkg.com/phosphor-icons"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend_assets/auth_assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />
    <link href="{{asset('frontend_assets/auth_assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend_assets/auth_assets/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Custom styles for this template -->
</head>

<body>
    <main>
        @include('frontend.includes.header')
        <section class="login_sec reg-sec">
            <div class="login_sec_right_bg">
                <img src="{{asset('frontend_assets/auth_assets/images/login-img.png')}}" alt="">
            </div>
            <div class="login_sec_wrap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 p-0">
                            <div class="login_sec_left">
                                <div class="login_sec_left_bg"></div>
                                <div class="width_545">
                                    <div class="main_hh">
                                        <div class="login_sec_left_text">
                                            <h2>create an account</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <div class="login_form">
                                            <form action="{{route('register.store')}}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                        <div class="">
                                                            <label for="exampleInputFirstName" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" value="{{old('first_name')}}" id="exampleInputFirstName" name="first_name" aria-describedby="emailHelp"autocomplete="off">
                                                            @if($errors->has('first_name'))
                                                            <div class="error" style="color:red;">{{ $errors->first('first_name') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                        <div class="">
                                                            <label for="exampleInputFirstName" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" value="{{old('last_name')}}" name="last_name" id="exampleInputFirstName" aria-describedby="emailHelp"autocomplete="off">
                                                            @if($errors->has('last_name'))
                                                            <div class="error" style="color:red;">{{ $errors->first('last_name') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                                        <div class="">
                                                            <label for="exampleInputFirstName" class="form-label">Email</label>
                                                            <input type="text" class="form-control" name="email" value="{{old('email')}}" id="exampleInputFirstName" aria-describedby="emailHelp"autocomplete="off">
                                                            @if($errors->has('email'))
                                                            <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                        <div class="">
                                                            <label for="exampleInputFirstName" class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control" name="phone" value="{{old('phone')}}" id="exampleInputFirstName" aria-describedby="emailHelp"autocomplete="off">
                                                            @if($errors->has('phone'))
                                                            <div class="error" style="color:red;">{{ $errors->first('phone') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                        <div class="">
                                                            <label for="exampleInputFirstName" class="form-label">Location Zipcode</label>
                                                            <input type="text" class="form-control" name="zipcode" value="{{old('zipcode')}}" id="exampleInputFirstName" aria-describedby="emailHelp"autocomplete="off">
                                                            @if($errors->has('zipcode'))
                                                            <div class="error" style="color:red;">{{ $errors->first('zipcode') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                                    <div class="">
                                                    <label for="exampleInputFirstName" class="form-label">Are you   &nbsp;&nbsp;</label>
                                                         <input type="radio" id="html" name="user_type" value="USER">
                                                          <label for="html">User</label>
                                                          <input type="radio" id="css" name="user_type" value="BUSINESS_OWNER">
                                                          <label for="css">Partner</label><br>
                                                        @if($errors->has('user_type'))
                                                        <div class="error" style="color:red;">{{ $errors->first('user_type') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                </div>

                                        
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                <div class="position-relative">
                                                    <label for="txtPassword">Password</label>
                                                    <input type="password" id="txtPassword" name="password" class="form-control" autocomplete="off"/>
                                                    <button type="button" id="btnToggle" class="toggle"><i id="eyeIcon" class="fa fa-eye"></i></button>

                                                </div>
                                                @if($errors->has('password'))
                                                <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                                <div class="position-relative">
                                                    <label for="txtPassword">Confirm Password</label>
                                                    <input type="password" id="password-field" name="confirm_password" class="form-control" autocomplete="off"/>
                                                    <button type="button" id="btnToggle1" class="toggle"><i id="eyeIcon1" toggle="#password-field" class="fa fa-eye"></i></button>
                                                </div>
                                                @if($errors->has('confirm_password'))
                                                <div class="error" style="color:red;">{{ $errors->first('confirm_password') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                            <div class="form-check">
                                                <input type="checkbox" name="confirm" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">I agree to the Groomely Terms. Learn about how we use and protect your data in our Privacy Policy.</label>
                                            </div>
                                            @if($errors->has('confirm'))
                                            <div class="error" style="color:red;">{{ $errors->first('confirm') }}</div>
                                            @endif
                                            <button class="btn btn-lg btn-primary btn-block btn-login">Register</button>
                                            <div class="login-text">
                                                <p>You have already account? <a href="{{route('login')}}">LOGIN NOW</a></p>
                                            </div>
                                        </div>
                                        </form>
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

    </main>
    <script>
        let passwordInput = document.getElementById('txtPassword'),
            toggle = document.getElementById('btnToggle'),
            icon = document.getElementById('eyeIcon');

        function togglePassword() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.add("fa-eye-slash");
                //toggle.innerHTML = 'hide';
            } else {
                passwordInput.type = 'password';
                icon.classList.remove("fa-eye-slash");
                //toggle.innerHTML = 'show';
            }
        }

        function checkInput() {
            //if (passwordInput.value === '') {
            //toggle.style.display = 'none';
            //toggle.innerHTML = 'show';
            //  passwordInput.type = 'password';
            //} else {
            //  toggle.style.display = 'block';
            //}
        }

        toggle.addEventListener('click', togglePassword, false);
        passwordInput.addEventListener('keyup', checkInput, false);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js"></script>
    <script src="{{asset('frontend_assets/auth_assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend_assets/auth_assets/js/custom.js')}}"></script>
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
    <script>
        $("#eyeIcon1").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</body>

</html>