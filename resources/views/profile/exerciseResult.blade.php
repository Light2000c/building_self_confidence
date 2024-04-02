@extends('layouts.app')

@section('content')
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Acivities and Exercises</li>
        </ol>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-10">


                <div class="mt-4 mb-3">
                    <a href="{{ route("dashboard") }}" class="btn btn-outline-primary">Dashboard</a>
                </div>

                <div class="card shadow border-0 mt-5 mb-5" style="border-radius: 15px;">
                    <div class="p-3">
                        <h5
                            style="font-weight: bold; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                            Activities and Exercises</h5>
                    </div>
                    <div class="table-responsive p-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Exercise</th>
                                    <th scope="col">file</th>
                                    <th scope="col">feedback</th>
                                    <th scope="col">Created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($exerciseResults->count())
                                    @foreach ($exerciseResults as $exercise)
                                        <tr>
                                            <td>{{ $exercise->id }}</td>
                                            <td>{{ $exercise->user->name }}</td>
                                            <td>{{ $exercise->exercise->title }}</td>
                                            <td><img class="img-fluid" style="width: 50px; height: 50px;" src="../feedback/{{ $exercise->file }}" alt="No image" ></td>
                                            <td>{{ $exercise->feedback }}</td>
                                            <td>{{ $exercise->created_at }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <div class="alert alert-info" role="alert">
                                            You haven't taken participate in any acivity or exercise! <a href="#"
                                                class="alert-link">view activities and exercises</a>
                                        </div>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
