@extends('layouts.app')


@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">

        <h2 class="display-7 fw-bold">
            Hello {{Auth::user()->name}}!
        </h2>

        <a href="{{route('admin.project.index')}}">Lists of Projects</a>

        <p>admin</p>
    </div>


@endsection
