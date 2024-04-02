@extends('layouts.app')

@section('content')
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-10">

                <div class="row mt-5 mb-5">

                    <div class="col-sm-12 col-lg-4 mb-3">
                        <div class="card shadow border-0 p-2">
                            <div class="text-center">
                                <i class="bi bi-person-fill" style="font-size: 120px;"></i>
                            </div>
                            <div class="text-center">
                                <p style="font-size: 23px;">{{ Auth::user()->name }}</p>
                                <p>{{ Auth::user()->email }}</p>
                                @if (Auth::user()->email_verified_at)
                                <span class="badge text-bg-success">Verified</span>
                                @else
                                <span class="badge text-bg-danger">Not - verified</span>
                                @endif
                            </div>
                            <form action="{{ route("logout") }}" method="post">
                                @csrf
                            <div class="d-grid mt-5 border-top p-3">
                                <button type="submit" class="btn btn-outline-primary">Logout <i
                                        class="bi bi-box-arrow-in-left ms-2"></i></button>
                            </div>
                        </form>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-8 mb-3">
                        <div class="card shadow border-0 p-3">
                            <h6 style="font-weight: bold;">Hi {{ Auth::user()->name }}, Welcome to your Dahboard !</h6>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum eius aliquid voluptatem cum
                                fugit repudiandae delectus quisquam.</p>

                            <div class="row mt-5">
                                <div class="col-sm-12 col-lg-6 mb-3">
                                    <div class="card shadow border-0 p-2 h-100">
                                        <a class="btn" href="{{ route('track-progress') }}"
                                            style="text-decoration: none;">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="align-self-center">Track Progress</h6>
                                                <i class="bi bi-arrow-right-short text-primary"
                                                    style="font-size: 25px;"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 mb-3">
                                    <div class="card shadow border-0 p-2 h-100">
                                        <a class="btn" type="button" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop" style="text-decoration: none;">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="align-self-center">Take Quiz</h6>
                                                <i class="bi bi-arrow-right-short text-primary"
                                                    style="font-size: 25px;"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6 mb-3">
                                    <div class="card shadow border-0 p-2 h-100">
                                        <a class="btn" href="{{ route('exercise-result') }}"
                                            style="text-decoration: none;">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="align-self-center">Activities and Exercises</h6>
                                                <i class="bi bi-arrow-right-short text-primary"
                                                    style="font-size: 25px;"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow border-0 p-3 mt-4 mb-4">
                            <p>RECENT ACTIVITIES</p>

                            <div class="table-responsive">
                                <table class="table">
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
                                        <tr>
                                            <div class="alert alert-info" role="alert">
                                                You haven't taken participate in any acivity or exercise! <a href="#"
                                                    class="alert-link">view activities and exercises</a>
                                            </div>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>

        {{-- Beginning of modal --}}
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
        </button> --}}

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">Take Quiz</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Ready to gauge your confidence levels? Take our brief quiz to uncover
                            insights and receive
                            tailored tips for enhancing your self-assurance. Let's kickstart your journey to greater
                            confidence today!</p>

                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <a href="{{ route('quiz') }}"> <button class="btn btn-outline-primary"
                                    data-bs-dismiss="modal">Take Quiz</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End of modal --}}
    </div>
@endsection
