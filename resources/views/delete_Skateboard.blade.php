<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Delete skateboard?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background-color: darkgrey;">
    @include('partials/navbar')

    <div class="container-fluid mt-3">
<div class="d-flex justify-content-center">
    <h1>Are you sure you want to delete this skateboard?</h1>
</div>
    <div class="btn-group d-flex justify-content-center" role="group">
        <div>
        <a href="/mainPage" class="btn btn-success" style="margin-top: 6px; margin-right: 3px;">Yes</a>
        </div>
        <div>
        <a href="/mainPage" class="btn btn-danger" style="margin-top: 6px;">No</a>
        </div>

        </div>
      </div>
</body>
</html>
