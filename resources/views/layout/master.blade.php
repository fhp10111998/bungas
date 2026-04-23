

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Awal -->
     @include('partial.sidebar');
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('partial.header');
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
            <p class="mb-0">@yield('konten') </p>
          </div>
        </div>
    @include('partial.footer');