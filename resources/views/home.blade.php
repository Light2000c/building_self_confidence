@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-lg-6 px-lg-5 mb-3" data-aos="fade-up">

                        <h3 class="" style="font-size: 45px; font-weight: bolder;">Build Your Self-Esteem, Confidence, &
                            Well-being</h3>

                        <div>
                            <img class="img-fluid" src="images/confidence-bg.jpeg" alt="No Image">
                        </div>
                    </div>
                    <div class="col-lg-6 px-lg-5 mb-3">
                        <p data-aos="fade-up"
                            style="font-size: 20px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                            Our mission is to empower individuals by fostering self-esteem, confidence, and well-being
                            through
                            comprehensive educational content, engaging activities, and a supportive community. We aim to
                            promote
                            diversity and inclusivity, cater to youth, young adults, and specific groups, and inspire
                            positive
                            change in personal and community life.</p>
                        <div class="row mt-5">
                            <div class="col-lg-6 mb-3" data-aos="zoom-in-up">
                                <a href="{{ route("skills") }}" style="text-decoration: none;">
                                    <div class="border bg-dark text-white">
                                        <h6 class="text-center p-3">Skills & Strategies</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 mb-3" data-aos="zoom-in-up">
                                <a href="{{ route("activities") }}" style="text-decoration: none;">
                                    <div class="border bg-dark text-white">
                                        <h6 class="text-center p-3">Activities & Exercises</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 mb-3" data-aos="zoom-in-up">
                                <a href="{{ route("community") }}" style="text-decoration: none;">
                                    <div class="border bg-dark text-white">
                                        <h6 class="text-center p-3">Community & Peer Support</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 mb-3" data-aos="zoom-in-up">
                                <a href="{{ route("support") }}" style="text-decoration: none;">
                                    <div class="border bg-dark text-white">
                                        <h6 class="text-center p-3">Resources: Supports & Services</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 mb-3" data-aos="zoom-in-up">
                                <a href="{{ route("login") }}" style="text-decoration: none;">
                                    <div class="border bg-dark text-white">
                                        <h6 class="text-center p-3">Login or Signup</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 mb-3" data-aos="zoom-in-up">
                                <a href="{{ route("inspiration") }}" style="text-decoration: none;">
                                    <div class="border bg-dark text-white">
                                        <h6 class="text-center p-3">Inspiration, Goals, & Impact</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
