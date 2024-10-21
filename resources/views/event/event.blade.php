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
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="text-dark">Manage Event</h3>
                            <a href="{{ route('createNews') }}"> <button class="btn btn-dark"><i
                                        class="bi-plus-circle me-2"></i>Event</button></a>
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
    @include('event.event_ajax')
@endsection
