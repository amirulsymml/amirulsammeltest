<!DOCTYPE html>
<html>

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
                <div class="card text-center">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h2 class="card-title">Laravel</h2>
                            <form action="{{ route('createproduct') }}" method="GET">
                                <button type="submit" class="btn btn-success btn-sm font-bold py-2 px-4 rounded">
                                    Create new Products
                                </button>
                            </form>
                        </div>

                        <div class="d-flex justify-content-end mb-3">
                            <form action="{{ route('welcome') }}" method="GET" class="d-flex">
                                <input type="text" id="search" name="search" class="ms-2" required />
                                <button type="submit" class="btn btn-secondary btn-sm font-bold py-2 px-4 rounded me-2">
                                    Search
                                </button>
                            </form>
                        </div>
                        
                        
                        <style>
                            td,
                            th {
                                padding: 10px;
                            }
                        </style>

                        <table class="border-collapse border-2 border-gray-500">
                            <thead>
                                <tr>
                                    <th class="border-2 border-black">No</th>
                                    <th class="border-2 border-black">Name</th>
                                    <th class="border-2 border-black">Price(RM)</th>
                                    <th class="border-2 border-black">Details</th>
                                    <th class="border-2 border-black">Publish</th>
                                    <th class="border-2 border-black">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="border-2 border-black">{{ $product->id }}</td>
                                        <td class="border-2 border-black">{{ $product->name }}</td>
                                        <td class="border-2 border-black">{{ $product->price }}</td>
                                        <td class="border-2 border-black">{{ $product->details }}</td>
                                        <td class="border-2 border-black">{{ $product->publish }}</td>
                                        <td class="border-2 border-black">
                                            <div class="d-flex">
                                                <form action="{{ route('viewproduct', ['id' => $product->id]) }}"
                                                    method="GET">
                                                    <button type="submit"
                                                        class="btn btn-info btn-sm font-bold py-2 px-4 rounded me-2">
                                                        Show
                                                    </button>
                                                </form>
                                                <form action="{{ route('editpage', ['id' => $product->id]) }}"
                                                    method="GET">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-sm font-bold py-2 px-4 rounded me-2">
                                                        Edit
                                                    </button>
                                                </form>
                                                <button class="btn btn-danger btn-sm font-bold py-2 px-4 rounded">
                                                    Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/bootsrap-5.3.2-dist/js/boostrap.js"></script>
</body>

</html>
