<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.head')
  </head>

  <body id="page-top">

    @include('backend.includes.navbar')

    <div id="wrapper">

      @include('backend.includes.sidebar')

      <div id="content-wrapper">
        <div class="container-fluid">
          @yield('content')
        </div>

        <footer class="sticky-footer">
          @include('backend.includes.footer')
        </footer>
      </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    @include('backend.includes.scripts')
  </body>

</html>
