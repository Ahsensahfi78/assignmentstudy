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
            </div><!-- End Page Title -->
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <!-- add new product modal start -->
                    <div class="modal fade" id="adduserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">user</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="#" method="POST" id="add_user_form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body p-4 bg-light">


                                        <div class="col-md-12 mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="name" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password" required>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="event_id">Role</label>
                                            <select class="form-select" name="role_id" id="role_id"
                                                aria-label="Default select example" required>
                                                <option selected disabled>Select Role</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Reporter">Reporter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" id="add_user_btn" class="btn btn-primary">user</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- add new product modal end -->


                    {{-- edit employee modal start --}}
                    <div class="modal fade" id="edituserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="#" method="POST" id="edit_user_form" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" id="user_id">

                                    <div class="modal-body p-4 bg-light">

                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="edit_name">Name</label>
                                                <input type="text" name="name" id="edit_name" class="form-control"
                                                    placeholder="name" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="edit_email">Email</label>
                                                <input type="email" name="email" id="edit_email" class="form-control"
                                                    placeholder="Email" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="edit_role_id">Role</label>
                                                <select class="form-select" name="role_id" id="edit_role_id"
                                                    aria-label="Default select example" required>
                                                    <option selected disabled>Select Role</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Reporter">Reporter</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" id="edit_user_btn" class="btn btn-success">Update
                                                user</button>
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
                            <h3 class="text-dark">Manage users</h3>
                            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#adduserModal"><i
                                    class="bi-plus-circle me-2"></i>user</button>
                        </div>
                        <div class="card-body" id="show_all_users">
                            <h1 class="text-center text-secondary my-5">Loading...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- this is ajax script coding --}}
    @include('user.user_ajax')
@endsection
