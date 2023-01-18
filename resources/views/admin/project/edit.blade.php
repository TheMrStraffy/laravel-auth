@extends('layouts.app')

@section('content')
    SHOW EDIT

    <div class="container">
        <form action="{{route('admin.project.update', $project)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name', $project->name)}}">
          </div>

          <div class="mb-3">
            <label for="client_name" class="form-label">Client Name</label>
            <input type="text" class="form-control" id="client_name" name="client_name" value="{{old('client_name', $project->client_name)}}">
          </div>

          <div class="mb-3">
              <label for="summary" class="form-label">Summary</label>
              <textarea class="form-control" name="summary" id="summary"
              >{{old('summary', $project->summary)}}</textarea>
            </div>

            <div class="mb-3">
              <label for="cover_image" class="form-label">Image</label>
              <input type="text" class="form-control" id="cover_image" name="cover_image" value="{{old('cover_image', $project->cover_image)}}">
            </div>


          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{route('admin.project.index')}}" class="btn btn-primary">Go To Projects</a>

        </form>
    </div>
@endsection
