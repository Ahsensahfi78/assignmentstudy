@extends('layout.layout')
@section('content')
    <main id="main" class="main">
        <div class="container-fluid">
            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
            {{-- edit employee modal end --}}
            <div class="row ">
                <div class="col-sm-12 col-md-12">
                    <div class="card shadow">

                        <form action="{{ route('storeNews') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row modal-body p-4 bg-white">
                                <div class="col-md-12 mb-3">
                                    <div class=" d-flex justify-content-between align-items-center">
                                        <h3 class="text-dark">Create News</h3>
                                        <button class="btn btn-dark" data-bs-toggle="modal"
                                            data-bs-target="#addEventModal"><i
                                                class="bi-plus-circle me-2"></i>Events</button>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="title" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="date">Cate ID</label>
                                    <select class="form-select" name="cate_id" id="cate_id"
                                        aria-label="Default select example" required>
                                        <option selected disabled>Select the Cat ID</option>
                                        @foreach ($categorys as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="thumbnail_image">Select Your Thumbnail</label>
                                    <input type="file" name="thumbnail_image" id="thumbnail_image" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="content">Description</label>
                                    <textarea name="content" id="summernote" rows="5" class="form-control"></textarea>

                                </div>


                                <div class="col-md-12 mb-3">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mx-2"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- this is ajax script coding --}}
    @include('event.event_ajax')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Summernote CSS and JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

    <!-- Initialize Summernote -->
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300, // set editor height
                placeholder: 'Write your content here...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endsection
