<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>posts</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4 my-2">
                    <div class="card">
                        <div class="card-header">
                            {{ $post->name }}
                        </div>
                        <div class="card-body">
                            {{ $post->description }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
