<div>
    <div class="bg-light crumbs py-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quiz</li>
        </ol>
    </div>



    <div class="container mt-4 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-lg-8">

                <p>Welcome to our Building Self-Esteem and Confidence Quiz, where the journey to self-discovery begins!
                    Are you ready to delve into the depths of your inner strength and unlock the secrets to boosting
                    your self-esteem and confidence? This quiz is your personal roadmap to self-empowerment, guiding you
                    towards greater self-awareness and resilience. Let's embark on this transformative quest together,
                    and pave the way for a more confident, empowered you!</p>

                <div class="card p-3 mt-4">
                    <div class="card p-4 bg-primary">
                        <p class="text-center text-white"
                            style="font-size: 20px;font-family:'Times New Roman', Times, serif;">
                            {{ $question }}</p>
                    </div>
                    <div class="d-flex justify-content-between m-3">
                        <p>Question {{ $count }}</p>
                        <p>{{ $count . '/' . count($questions) }}</p>
                    </div>

                    <div>
                        @if ($message)
                            <div class="alert alert-info" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                    </div>

                    {{ $score }}
                    {{ $total }}
                    <div class="mt-4">
                        <p>
                        <div class="form-check">
                            <input wire:model="option1" class="form-check-input" type="checkbox" name="option"
                                value="option1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Strongly Agree
                            </label>
                        </div>
                        </p>
                        <p>
                        <div class="form-check">
                            <input wire:model="option2" class="form-check-input" type="checkbox" name="option"
                                value="option2" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Agree
                            </label>
                        </div>
                        </p>
                        <p>
                        <div class="form-check">
                            <input wire:model="option3" class="form-check-input" type="checkbox" name="option"
                                value="option3" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Disagree
                            </label>
                        </div>
                        </p>
                        <p>
                        <div class="form-check">
                            <input wire:model="option4" class="form-check-input" type="checkbox" name="option"
                                value="option4" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Strongly Disagree
                            </label>
                        </div>
                        </p>
                    </div>

                    <div class="d-flex justify-content-end mt-5">
                        <button wire:click="next()" class="btn btn-primary">Next <i
                                class="bi bi-fast-forward-fill ms-2"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<script>
    // Get all checkboxes
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Add event listener to each checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // If the checkbox is checked
            if (this.checked) {
                // Uncheck all other checkboxes
                checkboxes.forEach(cb => {
                    if (cb !== this) {
                        cb.checked = false;
                    }
                });
            }
        });
    });
</script>
