<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body style="background-color: hsl(0, 0%, 96%)">
    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container mt-5 "> <br>
                <div class="row gx-lg-5 align-items-center">


                  
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <h1 class="text-success display-5 fw-bold ls-tight text-center mb-5 ">
                                    Login<br />
                                </h1>

                                <form action="{{ route('login-user') }}" method="post">

                                    {{ @csrf_field() }}

                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('fail'))
                                        <div class="alert alert-dark">{{ Session::get('fail') }}</div>
                                    @endif

                                    <!-- email -->
                                    <div class="form-outline mb-4 ">
                                        <input type="email" id="email" name="email" class="form-control fs-5"
                                            placeholder="Email" value="{{ old('email') }}" />

                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>

                                    <!-- password -->
                                    <div class="form-outline mb-4 ">
                                        <input type="password" id="password" name="password" class="form-control fs-5"
                                            placeholder="Password" />

                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example33" checked />
                                        <label class="form-check-label" for="form2Example33">
                                            Remember me
                                        </label>
                                    </div>

                                    <!-- Submit button -->

                                    <center>
                                        <button type="submit" class=" btn btn-success btn-block mb-4 fs-5 fw-semibold">
                                            Login
                                        </button>
                                    </center> <br>

                                    {{-- <h6>Haven't Created an account ?? <span> <a class="text-decoration-none"
                                                href="{{ route('registration') }}">Register Here</a></span></h6> --}}

                                </form>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
