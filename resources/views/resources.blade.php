@extends('layouts.app')

@section('content')
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Supports & Services</li>
        </ol>
    </div>

    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-10">


                <div class="row mt-5">
                    <div class="col-lg-6 align-self-center" data-aos="zoom-in-up">
                        <h6 class="text-primary">Our Services</h6>
                        <h3 class="" style="font-size: 45px; font-weight: bolder;">WE PROVIDE EXPERT SERVICES</h3>
                        <P>Welcome to our support page—a dedicated space crafted to fuel your journey towards heightened
                            self-esteem and unwavering confidence. Dive into personalized guidance, curated resources, and
                            direct contact options, all aimed at empowering you every step of the way.</P>
                        <p>Here, you're not alone. Let us walk alongside you as your committed partner in personal growth,
                            offering support, encouragement, and the tools you need to thrive.</p>
                        <div class="mt-5">
                            <button class="btn btn-outline-primary mb-4">Get Started</button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card shadow bg-light border-0 p-3 text-center">
                                    <h6 style="font-weight: bold">Educational Content</h6>
                                    <p style="font-size: 15px;">Access concise, practical insights and actionable strategies
                                        to boost your self-esteem and confidence through our Educational Content service.
                                    </p>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-4">
                                <div class="card shadow bg-light border-0 p-3 text-center">
                                    <h6 style="font-weight: bold">Inspiration and Motivation</h6>
                                    <p style="font-size: 15px;">Ignite your motivation and boost your self-esteem with our
                                        curated resources and uplifting content.</p>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-4">
                                <div class="card shadow bg-light border-0 p-3 text-center">
                                    <h6 style="font-weight: bold">Self-Help Resources</h6>
                                    <p style="font-size: 15px;">Delve into a treasure trove of tools, guidance, and
                                        strategies to enhance your self-esteem and confidence.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="card shadow bg-light border-0 p-3 text-center">
                                    <h6 style="font-weight: bold">Community Support</h6>
                                    <p style="font-size: 15px;">Discover supportive resources and actionable strategies for
                                        enhancing self-esteem and confidence through our Community Support service.</p>
                                </div>
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

                <div class="mt-3">
                    <h3 class="text-center" style="font-size: 45px; font-weight: bolder;">How Can We Help You?</h3>

                    <div class="row justify-content-center mt-4 mb-5">
                        <div class="col-7">
                            <input type="text" class="form-control" placeholder="Search something">
                        </div>
                    </div>



                    {{-- Beginning of accordion --}}
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-primary" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    How can I boost my self-esteem on a daily basis?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Boosting self-esteem daily involves incorporating positive affirmations and actions into
                                    your routine. This could include acknowledging your accomplishments, setting realistic
                                    goals, practicing self-compassion, and engaging in activities that bring you joy and
                                    fulfillment. By cultivating a positive self-image and nurturing yourself consistently,
                                    you can gradually increase your self-esteem over time.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-primary" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    How to Register?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sunt doloremque
                                    commodi possimus doloribus, asperiores quis culpa ipsa aut enim dolore est quibusdam
                                    minima officia consectetur repellendus eligendi nesciunt ipsum..
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-primary" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What are some practical tips for building confidence in social situations?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Building confidence in social situations can be achieved through preparation, practice,
                                    and positive self-talk. Start by setting realistic expectations for yourself, preparing
                                    conversation starters or topics in advance, and practicing active listening and
                                    assertiveness. Focus on your strengths, maintain open body language, and remind yourself
                                    that everyone experiences social insecurities at times.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-primary" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Can past experiences affect self-esteem, and if so, how can I address them?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Past experiences, particularly negative ones such as trauma, rejection, or criticism,
                                    can significantly impact self-esteem. Addressing these experiences may involve
                                    acknowledging and processing your emotions, challenging negative beliefs stemming from
                                    past events, seeking therapy or support groups, and practicing forgiveness and
                                    self-compassion. By reframing past experiences and focusing on personal growth, you can
                                    rebuild your self-esteem.
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of accordion --}}
                </div>

            </div>

        </div>
    </div>


    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-10">

                <div class="row mt-5">
                    <div class="col-lg-6 align-self-center mb-3">
                        <img class="img-fluid" src="images/contact-2.jpeg" alt="No Image">
                    </div>

                    <div class="col-lg-6">

                        <div class="mb-3">
                            <h6 class="text-capitalize text-primary">Get In Touch</h6>
                            <h4 class="" style="font-size: 32px; font-weight: bolder;">Contact our support team</h4>
                            <p>The fastest way to get answers to your questions is by contacting us. We're happy to help!
                            </p>
                        </div>

                        <div>
                            <div class="mb-3">
                                <h5 class="text-capitalize">Send us a message !</h5>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control" id="floatingInput"
                                    placeholder="Full Name">
                                <label for="floatingInput">Full Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Message</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
