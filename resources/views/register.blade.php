<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Patient Signup</title>
</head>

<body style="background-color: hsl(0, 0%, 96%)">
    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">


                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <h1 class="text-success display-5 fw-bold ls-tight text-center mb-5 ">
                                Register <br />

                            </h1>


                            <form action="{{ route('registerpost') }}" method="post" enctype="multipart/form-data">


                                {{ @csrf_field() }}

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="firststname" name="firstname"
                                                placeholder="First name" class="form-control fs-5 mb-2"
                                                value="{{ old('firstname') }}" />


                                            <span class=" bg-info text-wrap text-dark fs-6  ">
                                                @error('firstname')
                                                    {{ $message }}
                                                @enderror
                                            </span>

                                        </div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="lastname" name="lastname" placeholder="Last name"
                                                class="form-control fs-5 mb-2" value="{{ old('lastname') }}" />
                                        </div>

                                        <span class=" bg-info text-wrap text-dark fs-6  ">
                                            @error('lastname')
                                                {{ $message }}
                                            @enderror
                                        </span>

                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="date" id="dob" name="dob"
                                                placeholder="Date of Birth" class="form-control fs-5 mb-2"
                                                value="{{ old('dob') }}" />

                                            <span class=" bg-info text-wrap text-dark fs-6  ">
                                                @error('dob')
                                                    {{ $message }}
                                                @enderror
                                            </span>

                                        </div>
                                    </div>



                                </div>

                                {{-- //role --}}
                                <input type="hidden" class="form-control" id="role" name="role"
                                    value="traveller" readonly>


                                <!-- gender -->
                                <div class="form-outline mb-4 ">

                                    <div class="form-group form-control">

                                        <label class="fs-6 me-3  badge bg-success text-wrap">Gender </label>
                                        <div class="form-check form-check-inline  ">
                                            <input class="form-check-input " type="radio" name="gender"
                                                id="gender" value="male">

                                            <label class="form-check-label fs-5" for="male">Male</label>
                                        </div>

                                        <div class="vr me-3"></div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender"
                                                value="female">

                                            <label class="form-check-label fs-5" for="female">Female</label>
                                        </div>

                                        <div class="vr me-3"></div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender"
                                                value="other">
                                            <label class="form-check-label fs-5" for="other">Other</label>
                                        </div>

                                    </div>
                                    <span class=" bg-info text-wrap text-dark fs-6  mb-2">
                                        @error('gender')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                                <!-- email -->
                                <div class="form-outline mb-4 ">
                                    <input type="email" id="email" name="email" class="form-control fs-5 mb-2"
                                        placeholder="Email" value="{{ old('email') }}" />

                                    <span class=" bg-info text-wrap text-dark fs-6  ">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                                <!-- password -->
                                <div class="form-outline mb-4 ">
                                    <input type="password" id="password" name="password" class="form-control fs-5 mb-2"
                                        placeholder="Password" value="{{ old('password') }}" />

                                    <span class=" bg-info text-wrap text-dark fs-6  ">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>

                                <!-- phone -->
                                <div class="form-outline mb-4 ">
                                    <input type="int" id="phone" name="phone"
                                        class="form-control fs-5 mb-2" placeholder="Phone"
                                        value="{{ old('phone') }}" />

                                    <span class=" bg-info text-wrap text-dark fs-6  ">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>


                                </div>

                                <!-- address -->
                                <div class="form-outline mb-4 ">
                                    <input type="text" id="address" name="address"
                                        class="form-control fs-5 mb-2" placeholder="Address"
                                        value="{{ old('address') }}" />

                                    <span class=" bg-info text-wrap text-dark fs-6  ">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </span>


                                </div>

                                <!-- National Id -->
                                <div class="form-outline mb-4 ">
                                    <input type="text" id="nid" name="nid"
                                        class="form-control fs-5 mb-2" placeholder="Nid"
                                        value="{{ old('nid') }}" />

                                    <span class=" bg-info text-wrap text-dark fs-6  ">
                                        @error('nid')
                                            {{ $message }}
                                        @enderror
                                    </span>


                                </div>






                                <!-- Submit button -->
                                <center>
                                    <button type="submit" class="btn btn-success btn-block mb-4 fs-5 fw-semibold">
                                        Create account
                                    </button>
                                </center>
                                <h6>Already have an account ?? <span> <a class="text-decoration-none"
                                                href="{{ route('login') }}">Login</a></span></h6>


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
