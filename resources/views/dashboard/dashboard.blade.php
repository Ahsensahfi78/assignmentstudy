@extends('layout.layout')
@section('content')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">



              <div class="card-body">
                <h5 class="card-title">Events</span></h5>

                <div class="d-flex align-items-center">

                  <div class="ps-3">
                    {{-- <h6>{{$events}}</h6> --}}

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">


              <div class="card-body">
                <h5 class="card-title">Photos</span></h5>

                <div class="d-flex align-items-center">

                  <div class="ps-3">
                    {{-- <h6>{{$photos}}</h6> --}}

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->


        <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">


              <div class="card-body">
                <h5 class="card-title">Feedbacks</span></h5>

                <div class="d-flex align-items-center">

                  <div class="ps-3">
                    {{-- <h6>{{$feedback}}</h6> --}}

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->


          <!-- Reports -->

          <!-- Top Selling -->
          <div class="col-12">
            <div class="card top-selling overflow-auto">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

            </div>
          </div><!-- End Top Selling -->

        </div>
      </div><!-- End Left side columns -->


    </div>
  </section>

</main><!-- End #main -->


@endsection