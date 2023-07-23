<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

@include('layouts.header')

<body>

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<!-- Menu -->
@include('layouts.sidebar')

<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">

{{-- Navbar --}}
@include('layouts.navbar')
      <div class="content-wrapper">

          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="row">
    @yield('content')   
</div>
<!-- Footer -->
@include('layouts.footer')
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
  </div>
  <!-- / Layout wrapper -->

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  @include('layouts.script')
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script>
  $('.show_delete').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Apakah Anda Ingin Menghapus Data ini?`,
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
          if (willDelete) {
              form.submit();
          }
      });
  });
  </script>
<script>
  $('.show_sukses').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Apakah Anda Ingin Mengubah Data ini?`,
          icon: "success",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
          if (willDelete) {
              form.submit();
          }
      });
  });
  </script>

</html>
