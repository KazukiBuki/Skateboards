<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <title>mainPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body style="background-color: darkgrey;">
    @include('partials/navbar')

    <div class="container-fluid mt-3">
        <div class="text-center">
            <h1 style="color:white;">Let's add a new skateboard.</h1>
        </div>

        <form action="/store_skateboard" method="post">
            @csrf
            <div class="mb-3">
                <label for="skateboard_name" class="form-label">Skateboard name</label>
                <input name="skateboard_name" type="text" class="form-control" id="skateboard_name"
                    aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="skateboard_model" class="form-label">Model</label>
                <input name="skateboard_model" type="text" class="form-control" id="skateboard_model">
            </div>
            <div class="mb-3">
                <label for="skateboard_length" class="form-label">Length</label>
                <input name="skateboard_length" type="number" class="form-control" id="skateboard_length" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="skateboard_price" class="form-label">Price</label>
                <input name="skateboard_price" type="text" class="form-control" id="skateboard_price" aria-describedby="textHelp">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>

</body>

</html>
