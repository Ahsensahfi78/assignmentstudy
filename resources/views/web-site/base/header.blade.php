   <!-- Header news -->
   <header class="bg-light">
       <!-- Navbar  Top-->
       <div class="topbar d-none d-sm-block">
           <div class="container ">
               <div class="row">
                   <div class="col-sm-12 col-md-5">
                       <div class="topbar-left">
                           <div class="topbar-text" id="currentDate">
                               <!-- Current date will be displayed here -->
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-12 col-md-7">
                       <div class="list-unstyled topbar-right">
                           <ul class="topbar-sosmed">
                               <li>
                                   <a href="https://www.facebook.com/asiannewss"><i class="fa fa-facebook"></i></a>
                               </li>
                               <li>
                                   <a href="#"><i class="fa fa-twitter"></i></a>
                               </li>
                               <li>
                                   <a href="#"><i class="fa fa-instagram"></i></a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- End Navbar Top  -->
       <!-- Navbar  -->
       <!-- Navbar menu  -->
       <div class="navigation-wrap navigation-shadow bg-white">
           <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
               <div class="container">
                   <div class="offcanvas-header">
                       <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                           <span class="navbar-toggler-icon"></span>
                       </div>
                   </div>
                   <figure class="mb-0 mx-auto">
                       <a href="{{ route('home') }}">
                           <img src="images/placeholder/logo.png" alt="" class="img-fluid logo">
                       </a>
                   </figure>

                   <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                       <ul class="navbar-nav ml-auto ">
                           <li class="nav-item dropdown">
                               <a class="nav-link active" href="{{ route('home') }}" data-toggle="dropdown"> Home
                               </a>
                           </li>
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                               <ul class="dropdown-menu animate fade-up">

                                   <li><a class="dropdown-item icon-arrow" href="#"> Blog </a>
                                       <ul class="submenu dropdown-menu  animate fade-up">
                                           <li><a class="dropdown-item" href="/category-style-v1.html">Style 1</a></li>
                                           <li><a class="dropdown-item" href="/category-style-v2.html">Style 2</a></li>
                                           <li><a class="dropdown-item" href="/category-style-v3.html">Style 3</a></li>

                                           <li><a class="dropdown-item icon-arrow" href="">Submenu item 3 </a>
                                               <ul class="submenu dropdown-menu  animate fade-up">
                                                   <li><a class="dropdown-item" href="">Multi level 1</a></li>
                                                   <li><a class="dropdown-item" href="">Multi level 2</a></li>
                                               </ul>
                                           </li>
                                           <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                           <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                                       </ul>
                                   </li>
                                   <li><a class="dropdown-item icon-arrow" href="#"> Blog single detail </a>
                                       <ul class="submenu dropdown-menu  animate fade-up">
                                           <li><a class="dropdown-item" href="/article-detail-v1.html">Style 1</a></li>
                                           <li><a class="dropdown-item" href="/article-detail-v2.html">Style 2</a></li>
                                           <li><a class="dropdown-item" href="/article-detail-v3.html">Style 3</a></li>

                                       </ul>
                                   </li>

                                   <li><a class="dropdown-item icon-arrow" href="#"> Search Result </a>
                                       <ul class="submenu dropdown-menu  animate fade-up">
                                           <li><a class="dropdown-item" href="/search-result.html">Style 1</a></li>
                                           <li><a class="dropdown-item" href="/search-result-v1.html">Style 2</a>
                                           </li>
                                       </ul>
                                   </li>
                                   <li><a class="dropdown-item" href="/login.html">Login </a>
                                   <li><a class="dropdown-item" href="/register.html"> Register </a>
                                   <li><a class="dropdown-item" href="{{ route('contact') }}"> Contact </a>
                                   <li><a class="dropdown-item" href="/404.html"> 404 Error </a>
                               </ul>
                           </li>

                           <li class="nav-item dropdown">
                               <a class="nav-link active" href="#" data-toggle="dropdown">
                                   About </a>
                           </li>

                           <li class="nav-item dropdown has-megamenu">
                               <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> News </a>
                               <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                                   <div class="container wrap__mobile-megamenu">
                                       <div class="col-megamenu">
                                           <h5 class="title">Recent news</h5>
                                           <hr>
                                           <!-- Popular news carousel -->
                                           <div class="popular__news-header-carousel">

                                               <div class="top__news__slider">
                                                   <div class="item">
                                                       <!-- Post Article -->
                                                       <div class="article__entry">
                                                           <div class="article__image">
                                                               <a href="#">
                                                                   <img src="images/placeholder/500x400.jpg"
                                                                       alt="" class="img-fluid">
                                                               </a>
                                                           </div>
                                                           <div class="article__content">
                                                               <ul class="list-inline">
                                                                   <li class="list-inline-item">
                                                                       <span class="text-primary">
                                                                           by david hall
                                                                       </span>,
                                                                   </li>

                                                                   <li class="list-inline-item">
                                                                       <span>
                                                                           descember 09, 2016
                                                                       </span>
                                                                   </li>
                                                               </ul>
                                                               <h5>
                                                                   <a href="#">
                                                                       Proin eu nisl et arcu iaculis placerat
                                                                       sollicitudin ut est.
                                                                   </a>
                                                               </h5>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="item">
                                                       <!-- Post Article -->
                                                       <div class="article__entry">
                                                           <div class="article__image">
                                                               <a href="#">
                                                                   <img src="images/placeholder/500x400.jpg"
                                                                       alt="" class="img-fluid">
                                                               </a>
                                                           </div>
                                                           <div class="article__content">
                                                               <ul class="list-inline">
                                                                   <li class="list-inline-item">
                                                                       <span class="text-primary">
                                                                           by david hall
                                                                       </span>,
                                                                   </li>

                                                                   <li class="list-inline-item">
                                                                       <span>
                                                                           descember 09, 2016
                                                                       </span>
                                                                   </li>
                                                               </ul>
                                                               <h5>
                                                                   <a href="#">
                                                                       Proin eu nisl et arcu iaculis placerat
                                                                       sollicitudin ut est.
                                                                   </a>
                                                               </h5>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="item">
                                                       <!-- Post Article -->
                                                       <div class="article__entry">
                                                           <div class="article__image">
                                                               <a href="#">
                                                                   <img src="images/placeholder/500x400.jpg"
                                                                       alt="" class="img-fluid">
                                                               </a>
                                                           </div>
                                                           <div class="article__content">
                                                               <ul class="list-inline">
                                                                   <li class="list-inline-item">
                                                                       <span class="text-primary">
                                                                           by david hall
                                                                       </span>,
                                                                   </li>

                                                                   <li class="list-inline-item">
                                                                       <span>
                                                                           descember 09, 2016
                                                                       </span>
                                                                   </li>
                                                               </ul>
                                                               <h5>
                                                                   <a href="#">
                                                                       Proin eu nisl et arcu iaculis placerat
                                                                       sollicitudin ut est.
                                                                   </a>
                                                               </h5>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="item">
                                                       <!-- Post Article -->
                                                       <div class="article__entry">
                                                           <div class="article__image">
                                                               <a href="#">
                                                                   <img src="images/placeholder/500x400.jpg"
                                                                       alt="" class="img-fluid">
                                                               </a>
                                                           </div>
                                                           <div class="article__content">
                                                               <ul class="list-inline">
                                                                   <li class="list-inline-item">
                                                                       <span class="text-primary">
                                                                           by david hall
                                                                       </span>,
                                                                   </li>

                                                                   <li class="list-inline-item">
                                                                       <span>
                                                                           descember 09, 2016
                                                                       </span>
                                                                   </li>
                                                               </ul>
                                                               <h5>
                                                                   <a href="#">
                                                                       Proin eu nisl et arcu iaculis placerat
                                                                       sollicitudin ut est.
                                                                   </a>
                                                               </h5>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="item">
                                                       <!-- Post Article -->
                                                       <div class="article__entry">
                                                           <div class="article__image">
                                                               <a href="#">
                                                                   <img src="images/placeholder/500x400.jpg"
                                                                       alt="" class="img-fluid">
                                                               </a>
                                                           </div>
                                                           <div class="article__content">
                                                               <ul class="list-inline">
                                                                   <li class="list-inline-item">
                                                                       <span class="text-primary">
                                                                           by david hall
                                                                       </span>,
                                                                   </li>

                                                                   <li class="list-inline-item">
                                                                       <span>
                                                                           descember 09, 2016
                                                                       </span>
                                                                   </li>
                                                               </ul>
                                                               <h5>
                                                                   <a href="#">
                                                                       Proin eu nisl et arcu iaculis placerat
                                                                       sollicitudin ut est.
                                                                   </a>
                                                               </h5>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>

                                           </div>
                                       </div> <!-- col-megamenu.// -->
                                   </div>
                               </div> <!-- dropdown-mega-menu.// -->
                           </li>
                           <li class="nav-item"><a class="nav-link" href="#"> Category </a></li>
                           <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"> contact </a></li>
                       </ul>


                       <!-- Search bar.// -->
                       <ul class="navbar-nav ">
                           <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                   <i class="fa fa-search"></i>
                               </a>
                           </li>
                       </ul>
                       <!-- Search content bar.// -->
                       <div class="top-search navigation-shadow">
                           <div class="container">
                               <div class="input-group ">
                                   <form action="#">

                                       <div class="row no-gutters mt-3">
                                           <div class="col">
                                               <input class="form-control border-secondary border-right-0 rounded-0"
                                                   type="search" value="" placeholder="Search "
                                                   id="example-search-input4">
                                           </div>
                                           <div class="col-auto">
                                               <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                   href="/search-result.html">
                                                   <i class="fa fa-search"></i>
                                               </a>
                                           </div>
                                       </div>

                                   </form>
                               </div>
                           </div>
                       </div>
                       <!-- Search content bar.// -->
                   </div> <!-- navbar-collapse.// -->
               </div>
           </nav>
       </div>
       <!-- End Navbar menu  -->

       <!-- Navbar sidebar menu  -->
       <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
           <div class="modal-dialog modal-dialog-aside" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <div class="widget__form-search-bar  ">
                           <div class="row no-gutters">
                               <div class="col">
                                   <input class="form-control border-secondary border-right-0 rounded-0"
                                       value="" placeholder="Search">
                               </div>
                               <div class="col-auto">
                                   <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                       <i class="fa fa-search"></i>
                                   </button>
                               </div>
                           </div>
                       </div>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <nav class="list-group list-group-flush">
                           <ul class="navbar-nav ">
                               <li class="nav-item dropdown">
                                   <a class="nav-link active dropdown-toggle text-dark" href="#"
                                       data-toggle="dropdown"> Home
                                   </a>
                               </li>
                               <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle  text-dark" href="#"
                                       data-toggle="dropdown"> Pages </a>
                                   <ul class="dropdown-menu animate fade-up">

                                       <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog </a>
                                           <ul class="submenu dropdown-menu  animate fade-up">
                                               <li><a class="dropdown-item" href="/category-style-v1.html">Style
                                                       1</a></li>
                                               <li><a class="dropdown-item" href="/category-style-v2.html">Style
                                                       2</a></li>
                                               <li><a class="dropdown-item" href="/category-style-v3.html">Style
                                                       3</a></li>

                                               <li><a class="dropdown-item icon-arrow  text-dark"
                                                       href="">Submenu item 3 </a>
                                                   <ul class="submenu dropdown-menu  animate fade-up">
                                                       <li><a class="dropdown-item" href="">Multi level 1</a>
                                                       </li>
                                                       <li><a class="dropdown-item" href="">Multi level 2</a>
                                                       </li>
                                                   </ul>
                                               </li>
                                               <li><a class="dropdown-item  text-dark" href="">Submenu item
                                                       4</a></li>
                                               <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                                           </ul>
                                       </li>
                                       <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Blog single
                                               detail </a>
                                           <ul class="submenu dropdown-menu  animate fade-up">
                                               <li><a class="dropdown-item" href="/article-detail-v1.html">Style
                                                       1</a></li>
                                               <li><a class="dropdown-item" href="/article-detail-v2.html">Style
                                                       2</a></li>
                                               <li><a class="dropdown-item" href="/article-detail-v3.html">Style
                                                       3</a></li>

                                           </ul>
                                       </li>

                                       <li><a class="dropdown-item icon-arrow  text-dark" href="#"> Search
                                               Result </a>
                                           <ul class="submenu dropdown-menu  animate fade-up">
                                               <li><a class="dropdown-item" href="/search-result.html">Style 1</a>
                                               </li>
                                               <li><a class="dropdown-item" href="/search-result-v1.html">Style 2</a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li><a class="dropdown-item  text-dark" href="/login.html">Login </a>
                                       <li><a class="dropdown-item  text-dark" href="/register.html"> Register </a>
                                       <li><a class="dropdown-item  text-dark" href="{{ route('contact') }}"> Contact
                                           </a>
                                       <li><a class="dropdown-item  text-dark" href="/404.html"> 404 Error </a>
                                   </ul>
                               </li>

                               <li class="nav-item dropdown">
                                   <a class="nav-link active  text-dark" href="#" data-toggle="dropdown"> About
                                   </a>
                               </li>


                               <li class="nav-item"><a class="nav-link  text-dark" href="#"> Category </a>
                               </li>
                               <li class="nav-item"><a class="nav-link  text-dark" href="{{ route('contact') }}">
                                       contact
                                   </a></li>
                           </ul>

                       </nav>
                   </div>
                   <div class="modal-footer">
                       <p>© 2020 <a href="http://retenvi.com"
                               title="Premium WordPress news &amp; magazine theme">Magzrenvi</a>
                           -
                           Premium template news, blog & magazine &amp;
                           magazine theme by <a href="http://retenvi.com" title="retenvi">RETENVI.COM</a>.</p>
                   </div>
               </div>
           </div> <!-- modal-bialog .// -->
       </div> <!-- modal.// -->
       <!-- End Navbar sidebar menu  -->
       <!-- End Navbar  -->
   </header>
   <script>
       function formatDate(date) {
           const options = {
               weekday: 'long',
               year: 'numeric',
               month: 'long',
               day: 'numeric'
           };
           return date.toLocaleDateString('en-US', options);
       }

       const today = new Date();

       document.getElementById('currentDate').textContent = formatDate(today);
   </script>