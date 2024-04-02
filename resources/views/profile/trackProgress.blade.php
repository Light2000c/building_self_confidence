@extends('layouts.app')

@section('content')
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Track Progress</li>
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
                            Progress Table</h5>
                    </div>

                    <div class="table-responsive p-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Result</th>
                                    <th scope="col">Confidence level</th>
                                    <th scope="col">Created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($results->count())
                                @foreach($results as $result)
                                <tr>
                                    <td>{{ $result->id }}</td>
                                    <td>{{ $result->user->name }}</td>
                                    <td>{{ $result->result }}</td>
                                    <td>{{ $result->confidence_level }}</td>
                                    <td>{{ $result->created_at }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <div class="alert alert-info" role="alert">
                                        No Result to show yet! <a href="#" class="alert-link">Take Quiz</a>
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
