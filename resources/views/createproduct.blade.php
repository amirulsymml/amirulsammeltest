<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href= "/bootstrap-5.3.2-dist/css/bootstrap.css" rel="stylesheet">

</head>


<body class="antialiased">

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-sm-12">
                <style>
                    .card-custom {
                        width: 500px;
                    }
                </style>
                <div class="card text-start card-custom">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <h3 class="card-title">Create Product</h3>
                            <button onclick="history.back()"
                                class="btn btn-primary btn-sm font-bold py-2 px-4 rounded me-2">
                                Back
                            </button>
                        </div>
                        <form action="{{ route('storeproduct') }}" method="POST">
                            @csrf
                            <label for="name">Name:</label><br>
                            <input type="text" id="name" name="name" class="w-100"><br>
                            <label for="price">Price:</label><br>
                            <input type="text" id="price" name="price" class="w-100"><br>
                            <label for="details">Details:</label><br>
                            <input type="text" id="details" name="details" class="w-100"><br>
                            <label for="publish">Publish:</label><br>
                            <input type="radio" id="publish" name="publish" value="Yes"> Yes<br>
                            <input type="radio" id="publish" name="publish" value="No"> No<br>
    
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Submit"
                                    class="btn btn-primary btn-sm font-bold py-2 px-4 rounded">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/bootsrap-5.3.2-dist/js/boostrap.js"></script>
</body>

</html>
