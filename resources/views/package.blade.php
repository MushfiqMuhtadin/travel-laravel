<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Patient Dashboard</title>
    <style>
        .bg-medium-blue {
            background-color: #1c2331;
        }

        .imgmama {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body style="background-color: rgba(147, 250, 171, 0.431)">

    <!-- Navbar -->
    

    <center>
        @if (Session::has('success'))
            <h4 class="alert alert-success">{{ Session::get('success') }}</h4>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-dark">{{ Session::get('fail') }}</div>
        @endif
    </center>

    <section class="container my-5 ">
      

    </section>

    <section class="mx-5">
        <h1 class="text-center">Tour Packages</h1> <br>
        <div class="row">
            @foreach ($package as $index => $package)
                <div class="col-12 col-lg-4 d-flex justify-content-center ">
                    <div style="background-color: #d6f9e06a; width:100% "
                        class="card mb-5 mx-2 shadow-lg p-3 mb-5  rounded">
                        <img src="{{ asset('uploaded_images/' . $package->picture) }}"
                            class="imgmama bg-image hover-zoom " alt="Doctor Image">
                        <div class="card-body">
                            <h4 class="card-title text-success">{{ $package['name'] }}</h4>
                            <h5 class="card-title card-text text-dark ">Type: <span
                                    class="text-success">{{ $package['type'] }}</span></h5>

                            <h6 class="card-text text-success ">Description: <span class="text-success">
                                    {{ $package['description'] }}</span> </h6>
                            <h6 class="card-text  text-success fs-5">Price: <span
                                    class="fs-4">{{ $package['price'] }}</span>$ </h6>

                            <div class="d-flex justify-content- center">
                                <button class="btn btn-success btn-sm mt-2" disabled> <a class="mx-3 text-white fs-5"
                                        href="{{ url('checkout/' . $package->id) }}">Buy</a></button>
                                        <h6 class="mt-3 px-3" >Please login to buy</h6>

                            </div>

                        </div>
                    </div>
                </div>
                @if (($index + 1) % 3 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </section>

    <!--Footer-->
    <footer class="py-3" style="background-color: #0ec962">
        <div class="container">
            <p class="text-center">&copy; 2023 Traveller Landing Page</p>
        </div>
    </footer>

</body>

</html>
