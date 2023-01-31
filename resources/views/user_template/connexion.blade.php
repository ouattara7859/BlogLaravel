
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from quiety.themetags.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Dec 2022 13:41:36 GMT -->
<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta name="twitter:description" content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta property="og:description" content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description" content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/media/favicon2.png')}}" >

    <!--title-->
    <title>Connexion - Software & IT Solutions</title>

    <!--google fonts-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">-->

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('user/assets/css/main.css')}}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{asset('user/assets/css/custom.css')}}">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->

    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-30" style="background: url('{{asset('user/assets/img/page-header-bg.svg')}}')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="index.html" class="mb-2 d-block text-center"><img src="{{asset('user/media/logo_atlas6.png')}}" alt="logo" class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light shadow rounded-custom">
                            <h1 class="h3 text-center">Au plaisir de vous revoir</h1>
                            <p class="text-muted">Veuillez vous connecter pour accéder à votre compte méthodes Web de niches innovantes.
                                </p>


                                @if ($errors->any())
                                <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                             @endif

                             @if (session()->has('error'))

                             <div class="alert alert-success alert-dismissible" role="alert" style="background: green;color: white;">

                                 {{session()->get('error')}}.
                                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                             </div>

                             @endif
                            <form action="{{ route('connexionstore') }}" method="POST" class="mt-4 register-form">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" id="email" required name="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="mb-1">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password" id="pwd" required name="pwd">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-3 d-block w-100">Valider</button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Vous n'avez pas de compte ?
                                     <a href="{{ route('inscription') }}" class="text-decoration-none">Inscrivez-vous</a>
                                    <br>
                                    <a href="password-reset.html" class="text-decoration-none">Mot de passe oublié</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>

    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/parallax.min.js"></script>
    <script src="assets/js/vendors/aos.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from quiety.themetags.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Dec 2022 13:41:36 GMT -->
</html>
