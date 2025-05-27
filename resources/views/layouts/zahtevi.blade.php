<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Product specialista d.o.o</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <header class="masthead">
            <div class="container">
                {{-- <div class="masthead-subheading">Mesto gde outsource počinje</div> --}}
                <div class="masthead-heading">Katalog zahteva</div>
                {{-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">Katalog zahteva</a> --}}
            </div>
        </header>

        @include('partials.nav')

        <div class="container">
            @yield('content')
        </div>

        @include('partials.foot')

