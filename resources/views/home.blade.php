@extends('layouts.dashboard')

@section('content-dashboard')

<div class="card-header text-center"><h1>Dashboard</h1></div>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="gallery">
            <a target="_blank" href="img_5terre.jpg">
            <img src="5terre.jpg" alt="5Terre" width="600" height="400">
                        
            </a>
            <div class="desc">
            <a href="http://localhost:8000/buildingA">Building A</a>
            </div>
    </div>

    <div class="gallery">
            <a target="_blank" href="img_forest.jpg">
            <img src="img_forest.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
            <a target="_blank" href="img_lights.jpg">
            <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
    </div>
</div>
            
@endsection
