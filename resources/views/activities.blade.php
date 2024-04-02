@extends('layouts.app')

@section('content')
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Activities & Exercises</li>
        </ol>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="row mt-5 mb-5" style="margin-bottom: 50%">
                    <div class="col-lg-8 pe-lg-5 mb-5" data-aos="zoom-out-right">
                        <div class="card mb-3 border-0">
                            {{-- <h5 class="card-title">Activities & Excercises</h5> --}}
                            <h3 class="" style="font-size: 45px; font-weight: bolder;">Activities & Excercises</h3>
                            <p class="card-text"
                                style="font-size: 20px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                Get ready to enhance your self-esteem through a blend of invigorating exercise and enriching
                                activities. From energizing workouts to creative pursuits, our diverse range of experiences
                                is designed to ignite your confidence and inner strength. Let's embark on this journey
                                together, embracing every activity as a step towards a more empowered you!</p>
                            <div class="card-body">

                            </div>
                            <img class="card-img-top img-fluid" src="images/activities-2.webp" alt="No Image">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-offset-2 mt-3 align-self-center">
                        @foreach ($exercises as $exercise)
                            <div class="mb-5 border-bottom" data-aos="zoom-in-up">
                                <h6
                                    style="font-weight: bold; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                    <a href="{{ route('exercise-details', $exercise) }}">{{ $exercise->title }}</a>
                                </h6>
                                <p
                                    style="font-size: 20px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                                    {{ $exercise->objective }}</p>
                            </div>
                        @endforeach

                            <div class="mt-3" data-aos="zoom-in-up">
                                {{ $exercises->links("pagination::bootstrap-5") }}
                            </div>
                    </div>
                </div>

                {{-- 
                <div class="row" style="margin-top: 15%;">
                    <div class="col-lg-6 align-self-center ">
                        <h3 class="" style="font-size: 40px; font-weight: bolder;">Your Section Title Goes Here</h3>
                        <p class="text-start">This is prime space! Use it to elaborate on your attention-grabbing section
                            title. Explain what
                            this section is about, share some details, and give just the right amount of information to get
                            the audience hooked. Don't give everything away, though! After all, you want them to click on
                            your call-to-action after reading this.</p>

                        <div class="mt-5">
                            <button class="btn btn-primary btn-lg">Add a Call-to-Action</button>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-3 ">
                        <img class="img-fluid"  src="images/confidence-bg.jpeg"
                            alt="No Image">
                    </div>
                </div> --}}


            </div>
        </div>



    </div>
@endsection
