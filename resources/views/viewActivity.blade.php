@extends('layouts.app')

@section('content')
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route("activities") }}">Activities & Exercise</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $exercise->title }}</li>
        </ol>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-11">

                <div class="row">
                    <div class="col-sm-12 col-lg-8 mb-5">
                        {{-- <p>Exercise</p> --}}
                        <div class="border p-3" style="border-radius: 15px;">
                            <div class="mb-4">
                                <h6 style="font-weight: bold;">Title:</h6>
                                <p>{{ $exercise->title }}</p>
                            </div>

                            <div class="mb-4">
                                <h6 style="font-weight: bold;">Objective:</h6>
                                <p>{{ $exercise->objective }}</p>
                            </div>

                            <div class="mb-4">
                                <h6 style="font-weight: bold;">Description:</h6>
                                <p>{{ $exercise->description }}</p>
                            </div>
                        </div>

                        <form action="{{ route('exercise-details', $exercise) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            @if (session('error'))
                                <div class="alert alert-danger mb-3 mt-3" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success mb-3 mt-3" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="mt-5">
                                @if ($exercise->file_required)
                                    <div class="form-group mb-3">
                                        <input type="file" name="image" class="form-control" id="floatingInput">
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                @endif

                                <div class="form-floating mb-4">
                                    <textarea name="feedback" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                        style="height: 120px"></textarea>
                                    <label for="floatingTextarea2">Feedback</label>
                                    @error('feedback')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="d-grid mb-3">
                                    <button class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-12 col-lg-4 mb-5">
                        <div class="card border p-3">
                            <div>
                                <p
                                    style="font-size: 20px; font-weight: bold; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                    Recent</p>
                                <hr>
                            </div>

                            @foreach ($recentExercises as $exercise)
                                <div class="mb-5">
                                    <h6
                                        style="font-weight: bold; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                        <a href="{{ route('exercise-details', $exercise) }}">{{ $exercise->title }}</a>
                                    </h6>
                                    <p
                                        style="font-size: 20px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                        {{ $exercise->objective }}</p>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
@endsection
