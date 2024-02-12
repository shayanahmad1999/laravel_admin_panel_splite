<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Splite - a responsive, flat and full featured admin template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="bootstrap admin template,bootstrap dashboard,dashboard template,bootstrap dashboard,admin dashboard,bootstrap admin,html admin template,html dashboard template,bootstrap admin dashboard,themeforest admin template,admin panel template,bootstrap 4 admin template,template admin bootstrap 4,bootstrap dashboard template,dashboard design template">
    <link rel="icon" href="{{asset('assets/img/brand/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/brand/favicon.ico')}}" />
    <title>Splite-Admin Dashboard</title>


    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!--Style css-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!--Icons css-->
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
</head>

<body class="bg-primary">

    <!--app open-->
    <div id="app" class="page">
        <section class="section ">
            <div class="container">
                <div class="">

                    <!--single-page open-->
                    <div class="single-page">
                        <div class="">
                            <div class="wrapper wrapper2">
                                <form id="login" class="card-body" tabindex="500">
                                    <h3 class="text-dark">Login</h3>
                                    <div class="mail">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="passwd">
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password">
                                    </div>
                                    <p class="mb-3 text-right"><a href="{{route('admin.forgotPassword')}}">Forgot Password</a></p>
                                    <div class="submit">
                                        <a class="btn btn-primary btn-block" href="{{route('admin.dashboard')}}">Login</a>
                                    </div>
                                    <div class="signup mb-0">
                                        <p class="text-dark mb-0">Don't have account?<a href="{{route('admin.signup')}}"
                                                class="text-primary ml-1">Sign UP</a></p>
                                    </div>
                                </form>
                                <div class="card-body border-top">
                                    <a class="btn  btn-social btn-facebook btn-block"><i class="fa fa-facebook"></i>Sign
                                        in with Facebook</a>
                                    <a class="btn  btn-social btn-google btn-block"><i
                                            class="fa fa-google-plus"></i>Sign in with Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--single-page closed-->

                </div>
            </div>
        </section>
    </div>
    <!--app closed-->
</body>

</html>
