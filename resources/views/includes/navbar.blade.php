 <!-- Add this script at the end of your Blade file -->
 @if (Session::has('sweet_alert'))
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             Swal.fire({
                 icon: '{{ Session::get('
                        sweet_alert.type ') }}',
                 title: '{{ Session::get('
                        sweet_alert.title ') }}',
                 text: '{{ Session::get('
                        sweet_alert.text ') }}',
                 timer: {
                     {
                         Session::get('sweet_alert.timer')
                     }
                 },
                 timerProgressBar: {
                     {
                         Session::get('sweet_alert.timerProgressBar', 'false')
                     }
                 },
                 showConfirmButton: false,
             });
         });
     </script>
     {{ Session::forget('sweet_alert') }}
 @endif

 @if (!Auth::check())
     <script>
         window.location.href = "{{ route('login') }}";
     </script>
 @endif


 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

     <div class="d-flex align-items-center justify-content-between">
         <a href="{{ route('home') }}" class="logo d-flex align-items-center">
             <img src="assets/img/logo.png" alt="">
             <!-- <span class="d-none d-lg-block">PNX</span> -->
         </a>
         <i class="bi bi-list toggle-sidebar-btn"></i>
     </div><!-- End Logo -->

     <div class="search-bar">
         <form class="search-form d-flex align-items-center" method="POST" action="#">
             <input type="text" name="query" placeholder="Search" title="Enter search keyword">
             <button type="submit" title="Search"><i class="bi bi-search"></i></button>
         </form>
     </div><!-- End Search Bar -->

     <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">

             <li class="nav-item d-block d-lg-none">
                 <a class="nav-link nav-icon search-bar-toggle " href="#">
                     <i class="bi bi-search"></i>
                 </a>
             </li><!-- End Search Icon-->


             <li class="nav-item dropdown pe-3">

                 <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                     data-bs-toggle="dropdown">
                     <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                     <span class="d-none d-md-block dropdown-toggle ps-2">33

                     </span>
                 </a><!-- End Profile Iamge Icon -->

                 <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                         <h6>33</h6>
                         <span>Admin</span>
                     </li>
                     <li>
                         <hr class="dropdown-divider">
                     </li>


                     <li>
                         <a class="dropdown-item d-flex align-items-center" href="{{ route('admin_logout') }}">
                             <i class="bi bi-box-arrow-right"></i>
                             <span>Sign Out</span>
                         </a>
                     </li>

                 </ul><!-- End Profile Dropdown Items -->
             </li><!-- End Profile Nav -->

         </ul>
     </nav><!-- End Icons Navigation -->

 </header><!-- End Header -->
