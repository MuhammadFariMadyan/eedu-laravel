<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS, this is not include because laravel already come with bootstrap -->
    {{-- <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css', config('app.use_ssl')) }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
    <!-- app.css laravel generated css file -->
    <link href="{{ asset('css/app.css', config('app.use_ssl')) }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- data main-> config file -->
    <script type="text/javascript" data-main="{{ asset('js/config', config('app.use_ssl')) }}" src="{{ asset('js/libs/require.js', config('app.use_ssl')) }}"></script>
</head>
<body class="large-padding-top">
    <!-- Navigation -->
    @include('layouts.main.nav')
    @include('layouts.flash')

    <div class="container">
	    <!-- Page Content -->
	    @yield('content')

	    <!-- footer !-->
	    @include('layouts.main.footer')
	</div>
    <!-- jQuery -->
    {{-- <script src="{{ asset('vendor/jquery/jquery.min.js', config('app.use_ssl')) }}"></script> --}}
    <!-- Bootstrap Core JavaScript -->
    {{-- <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js', config('app.use_ssl')) }}"></script> --}}

    <!-- RateYo Library -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script> -->
    <!-- this include bootstrap and jquery too --> 
    {{-- <script src="{{ asset('js/app.js', config('app.use_ssl')) }}"></script> --}}
    @yield('custom_script')

</body>

</html>
