@extends('layouts.app')

@section('content')
    SHOW INDEX
    <div class="row justify-content-around">

        @foreach ($projects as $project)
        <div class="card mb-3 " style="width: 18rem;">
            <img src="{{asset($project->cover_image)}}" class="card-img-top" alt="{{$project->name}}">
            <div class="card-body overflow-y-scroll ">
              <h5 class="card-title">{{$project->name}}</h5>
              <p class="card-title">{{$project->client_name}}</p>
              <p class="card-text ">{{$project->summary}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endforeach
    </div>
@endsection
