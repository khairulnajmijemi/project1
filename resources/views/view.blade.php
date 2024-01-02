<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Show</title>

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
                            <h3 class="card-title">Show Product</h3>
                            <button onclick="history.back()"
                            class="btn btn-primary btn-sm font-bold py-2 px-4 me-2">
                            Back
                        </button>
                        </div>
                        <p><b>Name:</b> {{ $product->name }}</p>
                        <p><b>Price:</b> {{ $product->price }}</p>
                        <p><b>Details:</b> {{ $product->details }}</p>
                        <p><b>Publish:</b> {{ $product->publish }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/bootsrap-5.3.2-dist/js/boostrap.js"></script>
</body>
