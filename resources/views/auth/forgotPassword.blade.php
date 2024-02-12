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
    <div id="app" class="page">
        <section class="section">
            <div class="container mt-6 mb-5">

                <!--row open-->
                <div class="row">
                    <div class="single-page">
                        <div class="wrapper ">
                            <form id="Forgot" class="card-body" tabindex="500">
                                <h4 class="text-dark text-center">Forget Password?</h4>
                                <div class="mail">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="submit">
                                    <a class="btn btn-primary btn-block" href="#">Forgot Password</a>
                                </div>
                                <div class="text-center text-dark mt-3 mb-0">
                                    Forget it, <a href="{{route('admin.login')}}">send me back</a> to the sign in.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--row closed-->

            </div>
        </section>
    </div>
</body>

</html>
