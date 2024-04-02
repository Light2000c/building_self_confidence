@extends('layouts.app')

@section('content')
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Community & Peer Support</li>
        </ol>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-10">

                <div class="row mt-5 mb-5">

                    {{-- <div class="col-lg-6 mb-2">
                        <img class="img-fluid" src="images/confidence-bg.jpeg" alt="No Image">
                    </div> --}}

                    <div class="col-lg-9 align-self-center mb-2" data-aos="zoom-in-up">
                        <div class="text-start">
                            <h5 class="text-primary">Something on your mind?</h5>
                            <h3 class="" style="font-size: 40px; font-weight: bolder;">Discover The Best Community
                                That Fit Your Needs
                            </h3>
                        </div>

                        <p>we understand that everyone's journey toward building self-esteem and confidence is unique.
                            That's why we offer a variety of support options to meet your individual needs and preferences.
                            Whether you thrive in group settings or prefer one-on-one interactions, there's a community here
                            for you.</p>


                    </div>
                </div>


                <div class="row mt-5 mb-5">

                    <div class="col-lg-4 mb-3">
                        <div class="card h-100 shadow border-0 p-2 text-center pt-4" data-aos="fade-up-right">
                            <h6 class="" style="font-weight: bold;">Healthy Life</h6>
                            <p>True wellness encompasses not only physical health but also mental, emotional, and social
                                well-being. </p>
                            <div class="mt-3">
                                <button class="btn btn-outline-primary mb-4">Join Forum</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3" data-aos="zoom-in-up">
                        <div class="card h-100 shadow border-0 p-2 text-center pt-4">
                            <h6 class="" style="font-weight: bold;">Improving Life</h6>
                            <p>Join us as we share insights, resources, and experiences to inspire positive change and
                                empower one another to live life to the fullest. </p>
                            <div class="mt-3">
                                <button class="btn btn-outline-primary mb-4">Join Forum</button>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="card h-100 shadow border-0 p-2 text-center pt-4" data-aos="fade-up-left">
                            <h6 class="" style="font-weight: bold;">Relationship</h6>
                            <p>we explore topics like communication skills, conflict resolution, building trust, and
                                fostering healthy boundaries.</p>
                            <div class="mt-3">
                                <button class="btn btn-outline-primary mb-4">Join Forum</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="dark-bg pt-5 pb-5" style="margin-bottom: 100px; margin-top: 100px;">
        <div class="dark-content row justify-content-center">

            <div class="col-sm-12 col-lg-10">

                <div class="row mt-5 mb-5">

                    <div class="col-lg-6 align-self-center mb-2" data-aos="zoom-in-up">
                        <div class="text-start">
                            <h3 class="" style="font-size: 40px; font-weight: bolder;">Our Peer Support
                            </h3>
                        </div>

                        <p>Through peer-led discussions, virtual support groups, and one-on-one interactions, you'll have
                            the opportunity to connect with others who share your experiences and goals. Our community is
                            built on the principles of mutual respect, confidentiality, and non-judgment, ensuring that
                            everyone feels safe and valued in sharing their thoughts and feelings.</p>

                        <div class="mt-5">
                            <button class="btn btn-outline-primary mb-4" style="font-size: 20px;">Join Group</button>
                        </div>

                    </div>
                    <div class="col-lg-6 mb-2" data-aos="zoom-in-up">
                        <img class="img-fluid" src="images/peer-support-4.webp" alt="No Image">
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
