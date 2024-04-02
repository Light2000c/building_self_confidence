@extends('layouts.app')

@section('content')
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inspiration, Goals & Impact</li>
        </ol>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-10">

                <div class="row mt-5 mb-5">

                    <div class="col-lg-6 align-self-center mb-2" data-aos="fade-up">
                        <div class="text-start">
                            <h6 class="text-primary">INSPIRATION</h6>
                            <h3 class="" style="font-size: 40px; font-weight: bolder;">Rise Above, Embrace Your Power
                            </h3>
                        </div>

                        <p>we share empowering words and stories crafted to elevate your spirit and ignite the flame of
                            self-belief within you. Building self-esteem and confidence is a journey of self-discovery and
                            growth, and our collection of inspirational content is designed to accompany you every step of
                            the way.</p>
                        <p>Discover stories of triumph over self-doubt, embrace the beauty of imperfection, and uncover the
                            strength that lies within you. Through uplifting quotes, affirmations, and reflections, we aim
                            to inspire you to rise above your challenges, embrace your uniqueness, and walk confidently
                            towards your dreams.</p>

                    </div>
                    <div class="col-lg-6 mb-2" data-aos="fade-up">
                        <img class="img-fluid" src="images/inspire-1.webp" alt="No Image">
                    </div>

                </div>


            </div>
        </div>
    </div>


    <div class="bg-light mt-5 mb-5 pt-3 pb-3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-sm-12 col-lg-10">


                    <div class="mb-5">

                        <div class="row justify-content-center mt-5 mb-5">
                            <div class="col-lg-9 text-start text-lg-center" data-aos="zoom-in-down">
                                <h3 class="" style="font-size: 40px; font-weight: bolder;">GOALS
                                </h3>
                                <p>we believe in the transformative power of self-belief and confidence. Our goal is to
                                    provide you with the tools, resources, and guidance you need to unlock your full
                                    potential and cultivate a strong sense of self-worth.

                                </p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4 mb-3" data-aos="zoom-in-up">
                                <div class="card border-0 h-100">
                                    <div class="pt-4 pb-4" style="background-color: #338dec;">
                                        <div class="text-center text-light"
                                            style="font-size: 23px; font-weight: bold; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                            Empower Individuals</div>

                                    </div>
                                    <div class="card-body pt-5 pb-5">
                                        <p class="card-text  text-center">Our primary goal is to empower individuals to
                                            cultivate a
                                            strong sense of self-worth
                                            and
                                            confidence.</p>
                                    </div>
                                    <img src="images/goal-1.webp" class="card-img-bottom" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3" data-aos="zoom-in-up">
                                <div class="card border-0 h-100">
                                    <div class="pt-4 pb-4" style="background-color: #338dec;">
                                        <div class="text-center text-light"
                                            style="font-size: 23px; font-weight: bold; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                            Foster Community</div>

                                    </div>
                                    <div class="card-body pt-5 pb-5">
                                        <p class="card-text text-center">We seek to foster a supportive online community
                                            where individuals can connect, share
                                            their experiences, and find encouragement and inspiration from others.</p>
                                    </div>
                                    <img src="images/goal-2.webp" class="card-img-bottom" alt="...">
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3" data-aos="zoom-in-up">
                                <div class="card border-0 h-100">
                                    <div class="pt-4 pb-4" style="background-color: #338dec;">
                                        <div class="text-center text-light"
                                            style="font-size: 23px; font-weight: bold; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                            Educate and Inform</div>

                                    </div>
                                    <div class="card-body pt-5 pb-5">
                                        <p class="card-text text-center">We strive to educate visitors about the importance
                                            of self-esteem and confidence and
                                            provide practical strategies for developing these qualities.</p>
                                    </div>
                                    <img src="images/goal-3.webp" class="card-img-bottom" alt="...">
                                </div>
                            </div>


                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-10">

                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-lg-8 text-start text-lg-center">
                        <h6 class="text-primary">TESTIMONIALS</h6>
                        <h3 class="" style="font-size: 40px; font-weight: bolder;">Hear What Our Clients Says
                        </h3>
                    </div>
                </div>

                {{-- Beginning of carousel --}}
                <div id="carouselExampleAutoplaying" class="carousel slide  border pt-5 pb-5" data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <div class="mb-5">
                                        <i class="bi bi-quote" style="font-size: 30px;"></i>
                                    </div>
                                    <h5>Maria Smantha</h5>
                                    <p>Newyork, USA</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse architecto expedita
                                        quod qui pariatur vitae accusantium. Voluptate laboriosam, dignissimos quo quisquam,
                                        fugiat laudantium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <div class="mb-5">
                                        <i class="bi bi-quote" style="font-size: 30px;"></i>
                                    </div>
                                    <h5>David Greg</h5>
                                    <p>London, Uk</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse architecto expedita
                                        quod qui pariatur vitae accusantium. Voluptate laboriosam, dignissimos quo quisquam,
                                        fugiat laudantium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <div class="mb-5">
                                        <i class="bi bi-quote" style="font-size: 30px;"></i>
                                    </div>
                                    <h5>Shine Peter</h5>
                                    <p>Ontario, CANADA</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse architecto expedita
                                        quod qui pariatur vitae accusantium. Voluptate laboriosam, dignissimos quo quisquam,
                                        fugiat laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev btn-primary" type="button"
                        data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="visually-hidden ">Next</span>
                    </button>
                </div>
                {{-- End of carousel --}}
            </div>
        </div>
    </div>
@endsection
