<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Bootstrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="css/auth.css">

</head>

<body class="auth-bg">
    <div class="dark-content">
        <div class="container auth-content pt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="row">

                            <div class="col-lg-6 bg-primary">

                            </div>
                            <div class="col-lg-6">

                                <div class="mt-5 mb-5 ms-2 me-2">
                                    <h5>Sign In</h5>
                                    <p>Welcome back! Please log in to continue.</p>

                                    <form action="" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleFormControlInput1" placeholder="name@example.com">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="exampleFormControlInput1" placeholder="Password">
                                            @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-3 text-end">
                                            <a style="text-decoration: none;" href="{{ route("reset-password") }}">Forgot password?</a>
                                        </div>

                                        <div class="d-grid">
                                            <button class="btn btn-primary">Login</button>
                                        </div>

                                    </form>

                                    <div class="mb-3 text-center mt-3">
                                        <p>Don't have an account? <a style="text-decoration: none;"
                                                href="{{ route("register") }}">Register</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap cdn script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
