<div>

    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            self-esteem and unwavering confidence. Dive into personalized guidance, curated resources,
                            and
                            direct contact options, all aimed at empowering you every step of the way.</P>
                        <p>Here, you're not alone. Let us walk alongside you as your committed partner in personal
                            growth,
                            offering support, encouragement, and the tools you need to thrive.</p>
                        <div class="mt-5">
                            <button class="btn btn-outline-primary mb-4">Get Started</button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 mb-4" data-aos="fade-up">
                                <div class="card shadow bg-light border-0 p-3 text-center">
                                    <h6 style="font-weight: bold">Educational Content</h6>
                                    <p style="font-size: 15px;">Access concise, practical insights and actionable
                                        strategies
                                        to boost your self-esteem and confidence through our Educational Content
                                        service.
                                    </p>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-4" data-aos="fade-up">
                                <div class="card shadow bg-light border-0 p-3 text-center">
                                    <h6 style="font-weight: bold">Inspiration and Motivation</h6>
                                    <p style="font-size: 15px;">Ignite your motivation and boost your self-esteem with
                                        our
                                        curated resources and uplifting content.</p>
                                </div>
                            </div>


                            <div class="col-lg-6 mb-4" data-aos="fade-up">
                                <div class="card shadow bg-light border-0 p-3 text-center">
                                    <h6 style="font-weight: bold">Self-Help Resources</h6>
                                    <p style="font-size: 15px;">Delve into a treasure trove of tools, guidance, and
                                        strategies to enhance your self-esteem and confidence.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4" data-aos="fade-up">
                                <div class="card shadow bg-light border-0 p-3 text-center">
                                    <h6 style="font-weight: bold">Community Support</h6>
                                    <p style="font-size: 15px;">Discover supportive resources and actionable strategies
                                        for
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
                            <input wire:model.live.debounce.150ms="search" type="text" class="form-control"
                                placeholder="Search something">
                        </div>
                    </div>



                    {{-- Beginning of accordion --}}
                    <div class="accordion" id="accordionExample">
                        @foreach ($supports as $support)
                            <div class="accordion-item mb-2" data-aos="fade-left">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed text-primary" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#ad{{ $support->id }}"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        {{ $support->title }}
                                    </button>
                                </h2>
                                <div id="ad{{ $support->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{ $support->description }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- End of accordion --}}

                    <div class="mt-5">
                        {{ $supports->links() }}
                    </div>
                </div>

            </div>

        </div>
    </div>

    {{-- @if (session()->has('success'))
        alert()->success('success', session('success'))->persistent('Dismiss’);
    @endif --}}

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
                            <h4 class="" style="font-size: 32px; font-weight: bolder;">Contact our support team
                            </h4>
                            <p>The fastest way to get answers to your questions is by contacting us. We're happy to
                                help!
                            </p>
                        </div>

                        <form wire:submit="sendMessage" method="post">
                            <div>
                                <div class="mb-3">
                                    <h5 class="text-capitalize">Send us a message !</h5>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" wire:model="name" name="name" class="form-control"
                                        id="floatingInput" placeholder="Full Name">
                                    <label for="floatingInput">Full Name</label>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" wire:model="email" name="email" class="form-control"
                                        id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" wire:model="message" placeholder="Leave a message here" id="floatingTextarea2"
                                        style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Message</label>
                                    @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>

<script>
    window.addEventListener('message', function(e) {
        // console.log("event ==>", e);
        // Swal.fire(e.detail); 
        let data = e.detail;

        Swal.fire({
            title: data.title,
            text: "That thing is still around?",
            icon: "question"
        });
    });
</script>
