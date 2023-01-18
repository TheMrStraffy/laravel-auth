@extends('layouts.app')

@section('content')
<div class="container p-5">

    <div class="card mb-3 mx-auto" style="width: 18rem;">
        <img src="{{asset($project->cover_image)}}" class="card-img-top" alt="{{$project->name}}">
        <div class="card-body overflow-y-scroll ">
          <h5 class="card-title">{{$project->name}}</h5>
          <p class="card-title">{{$project->client_name}}</p>
          <p class="card-text ">{{$project->summary}}</p>
          <a href="{{route('admin.project.index')}}" class="btn btn-primary">Go To Projects</a>
        </div>
      </div>
</div>
@endsection
