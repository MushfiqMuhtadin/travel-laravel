<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Create Package</title>
</head>

<body class="">
    <div class="container">


        <form action="{{ route('CreatepackagePost') }}" method="post" class="mt-5"enctype="multipart/form-data">
            @csrf

            <center>
                <h3 class="text-success">Create Travel Package</h3>
            </center>
            <div class="form-group">
                <label class="mt-3 fs-5 fw-semibold text-success" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Enter health package name" required>
            </div>
            <div class="form-group form-outline">
                <label class="mt-3 fs-5 fw-semibold text-success" for="type">Type</label>
                <select class="form-select form-control fs-5 mb-2 " id="type" name="type" required>
                    <option disabled selected value>Select type</option>
                    <option value="Budget">Budget</option>
                    <option value="Midrange">Midrange</option>
                    <option value="Premium">Premium</option>
                </select>
            </div>
            <div class="form-group">
                <label class="mt-3 fs-5 fw-semibold text-success" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label class="mt-3 fs-5 fw-semibold text-success" for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price"
                    placeholder="Enter health package price" required>
            </div>

            <div class="form-group mb-4 ">
                <label class="mt-3 fs-5 fw-semibold text-success">Photo</label>
                <input type="file" id="picture" name="picture" class="form-control fs-5 mb-2" placeholder="Image">

                <span class=" bg-info text-wrap text-dark fs-6  ">
                    @error('picture')
                        {{ $message }}
                    @enderror
                </span>

            </div>

            <button type="submit" class="mt-3 btn btn-success">Create Health Package</button>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
