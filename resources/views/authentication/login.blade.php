<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

  <title>LOGIN PUSINDUK</title>

  <meta name="description" content="Most Powerful & Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/Logo pendidikan.png') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css">

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contains global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
  </script>
  <!-- Custom notification for demo -->
  <!-- beautify ignore:end -->
  <!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

</head>

<body>
  <!-- Content -->
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <div id="notification" class="alert" style="display: none;"></div>
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/favicon/Logo pendidikan.png') }}" alt="Logo" width="30" height="30">
                  </a>
                </span>
                <br>
                <span class="app-brand-text demo text-body fw-bolder" style="text-transform: uppercase;">PUSINDUK</span>
              </a>
            </div>
            @if (session('gagal'))
                <div class="alert alert-danger">{{ session('gagal') }}</div>
            @endif
            <!-- /Logo -->
            <form id="formAuthentication" class="mb-3" action="{{ route('postlogin') }}" method="POST" onsubmit="return handleLogin(event);">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username" autofocus>
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group- text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>
  <!-- / Content -->

  <!-- Core JS -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <!-- Add your required vendor scripts here -->

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <!-- Add your page-specific scripts here -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

  <script>
    // Script PHP dipindahkan ke dalam script JavaScript
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $hostname = "localhost";
      $username = "root";
      $database_name = "pusinduk";
    
      $con = mysqli_connect($hostname, $username, '', $database_name);
    
      // Periksa apakah koneksi berhasil
      if (!$con) {
        die("Gagal terhubung ke MySQL: " . mysqli_connect_error());
      }
    
      // Pastikan untuk menghindari SQL Injection
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = $_POST['password'];
    
      $sqlCek = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password' AND aktif='Y'");
      $jml = mysqli_num_rows($sqlCek);
      $d = mysqli_fetch_array($sqlCek);
    
      if ($jml > 0) {
        session_start();
        $_SESSION['users'] = $d['email'];
    
        echo "
        setTimeout(function () { 
          Swal.fire({
            icon: 'success',
            title: '(Administrator) Login berhasil',
            showConfirmButton: false,
            timer: 3000
          }).then(function() {
            window.location.replace('../dashboard.blade.php');
          });
        }, 10);";
      } else {
        echo "
        setTimeout(function () { 
          Swal.fire({
            icon: 'error',
            title: 'Sorry!',
            text: 'Username / Password Salah',
            showConfirmButton: false,
            timer: 3000
          }).then(function() {
            window.location.replace('./login.blade.php');
          });
        }, 10);";
      }
    
      mysqli_close($con);
    }
    ?>
  </script>
</body>

</html>