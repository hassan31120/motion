<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>
    <!--navbar-->
    <div class="container-fluid containerCSS">
        <nav class="navbar navbar-expand-lg navbar-light containerCSS font fw-bolder">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav containerCSS">
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="{{ route('main')}}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#motion">اهمية الموشن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ser text-dark" href="#services">اعمالنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#contactUs">اطلب الان</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="view text-start">
                    <img src="{{ asset('main/img/bannerre.png') }}" class="img-fluid" alt="sample image">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class=" fw-bold mt-5" style="color: #1c138b
                ;">تصميمات موشن جرافيك</h2>
                <div class="text-start" id="imptydiv"></div>
                <div class="card-body mt-lg-5 fw-bold text-end">
                    <h2 class="card-title fw-bolder" style="color: #1c138b
                    ;">ما الذي يجعلنا أفضل خيار لك </h2>
                    <h4 class="card-text fw-bolder lh-lg" style="color:#6067cc

                    ">كتابة المحتوي - تسجيل صوتي - رسم المشاهد - التحريك</h4>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid font" id="main">
        <div class="custom-shape-divider-top-1662649051">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>
