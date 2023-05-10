<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveller Profile</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet">
    <style>
        p {
            font-size: 18px;
        }

        a {
            text-decoration: none;
            color: antiquewhite
        }
    </style>

</head>

<body>

    <section style="background-color: #eee;">
        <div class="container py-5">
            @php
                $fullName = $traveller->firstname . ' ' . $traveller->lastname;
            @endphp
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('uploaded_images/traveller.jpg') }}" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 250px;height:250px;">
                            <h5 class="my-3 fw-bolder text-success ">{{ $fullName }}</h5>
                            <p class="text-muted mb-1">Traveller</p>
                            <p class="text-muted mb-2">{{ $traveller->address }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-success "><a
                                        href="{{ url('traveller/dashboard/profile/' . $travellerid) . '/edit' }}">Edit
                                        Profile</a></button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8 ">
                    <div class="card mb-4">
                        <div class="card-body" style="height: 680px">
                            <div class="row  m-4">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bolder text-success ">Firstname</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0 ">{{ $traveller->firstname }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row  m-4">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bolder text-success ">Lastname</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $traveller->lastname }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row  m-4">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bolder text-success ">Fullname</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $fullName }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row  m-4">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bolder text-success ">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $traveller->phone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row  m-4">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bolder text-success ">Nid</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $traveller->nid }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row  m-4">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bolder text-success ">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $traveller->address }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row  m-4">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bolder text-success ">Gender</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $traveller->gender }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row  m-4">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bolder text-success ">Date Of Birth</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $traveller->dob }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>
