
@extends('layout.layout')
@section('content')

    <main id="main" class="main">
        <div class="container-fluid">
              <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    
                    {{-- edit employee modal start --}}
                    <div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="#" method="POST" id="edit_event_form" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="event_id" id="event_id">
                                    <input type="hidden" name="event_image" id="event_image">
                                    <div class="modal-body p-4 bg-light">

                                       <div class="row">  
                                       

                                        <div class="col-md-12 mb-3">
                                            <label for="title">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="title" required>
                                        </div>


                                        <div class="col-md-12 mb-3">
                                            <label for="title">Position</label>
                                            <input type="text" name="position" id="position" class="form-control" placeholder="title" required>
                                        </div>
                                        
                                        
                                        <div class="col-md-12 mb-3">
                                            <label for="title">Message</label> 
                                            <textarea id="message" name="message" class="form-control"  required></textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="date">Status</label>
                                            <select class="form-select" name="status_id" id="status_id" aria-label="Default select example" required>
                                                <option selected disabled>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Disable</option>
                                              </select>
                                        </div>


                                        <div class="col-md-12 mb-3">
                                            <label for="thumbnail_image">Select Image</label>
                                            <input type="file" name="thumbnail_image" id="thumbnail_image" class="form-control">
                                        </div>
                                        <div class="mt-2" id="image">

                                        </div>
                                         

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" id="edit_event_btn" class="btn btn-success">Update Feedback</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- edit employee modal end --}}
            <div class="row ">
                <div class="col-sm-12 col-md-12">
                    <div class="card shadow">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="text-dark">Manage Event</h3> 
                        </div>
                        <div class="card-body" id="show_all_events">
                            <h1 class="text-center text-secondary my-5">Loading...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
{{-- this is ajax script coding --}}
@include('testimonials.testimonials_ajax')
@endsection





