<!DOCTYPE html>
<html lang="en">
  <head>
    <meta  charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema Educativo">
    <meta name="keywords" content="educacion, estudiante, colegio, profesores">
    @include('panels.styles')
  </head>
  <body class="dark-sidebar">
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      @include('panels.header')
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        @include('panels.sidebar')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                  @if(isset($breadcrumbs))
                    @include('panels.breadcrumbs')
                  @endif
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            @yield('content')
          </div>
          <!-- Container-fluid Ends-->
        </div>
        @include('panels.footer')
        @include('panels.scripts')
      </div>
    </div>
  </body>
</html>
