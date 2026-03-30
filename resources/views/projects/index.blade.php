@extends('layouts.app')

@section('content')

<div class="glass p-4 mb-4">

    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="m-0">Projects</h2>
        <button class="btn btn-primary">+ Add Project</button>
    </div>

    <!-- Grid -->
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="glass p-3 h-100">
                <h5>Project One</h5>
                <p class="text-muted">Short description of the project.</p>
                <button class="btn btn-sm btn-primary">View</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="glass p-3 h-100">
                <h5>Project Two</h5>
                <p class="text-muted">Another project description.</p>
                <button class="btn btn-sm btn-primary">View</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="glass p-3 h-100">
                <h5>Project Three</h5>
                <p class="text-muted">More details about this project.</p>
                <button class="btn btn-sm btn-primary">View</button>
            </div>
        </div>

    </div>

</div>

@endsection