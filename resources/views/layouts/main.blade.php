<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>PBGIA23 | {{ $title }}</title>
  <link href="{{ asset('templates/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('templates/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('templates/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    @include('layouts._sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
       
        @include('layouts._topbar')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">{{ $breadcrumb }}</li>
            </ol>
          </div>

          {{-- CONTENT --}}
          @yield('content')
          {{-- END CONTENT --}}


        </div>
        <!---Container Fluid-->
      </div>
      @include('layouts._footer')
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('templates/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('templates/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('templates/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('templates/js/ruang-admin.min.js') }}"></script>

</body>

</html>