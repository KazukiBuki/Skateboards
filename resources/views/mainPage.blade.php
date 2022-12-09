<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>mainPage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background-color:darkgrey;">
@include('partials/navbar')

<div class="container-fluid mt-3">
    <div class="text-center" style="color:white;">
        <h2>Welcome to our beloved skateboard website!</h2>
        <h1>Here you can safely browse our available wares and purchase some of our finest hand-crafted luxuries!</h1>
    </div>
   <div class="d-flex justify-content-center">
    <a href="/add_Skateboard" class="justify-content-center btn btn-warning" style="margin-top:13px;">Add skateboard</a>
   </div>

   <div class="table" style="margin-top: 13px;">
    <table class="table table-bordered bg-info">
       <thead>
         <tr>
           <th scope="col">ID</th>
           <th scope="col">Skateboard name</th>
           <th scope="col">Model</th>
           <th scope="col">Length</th>
           <th scope="col">Price</th>
         </tr>
       </thead>
       <tbody>
        @foreach ( $skateboard as $skateboards )
         <tr>
           <th scope="row">{{ $skateboards -> id }}</th>
           <td>{{ $skateboards -> skateboard_name }}</td>
           <td>{{ $skateboards -> skateboard_model }}</td>
           <td>{{ $skateboards -> skateboard_length }}</td>
           <td>{{ $skateboards -> skateboard_price }}</td>
           <td>
             <a href="/edit_Skateboard/{{ $skateboards -> id }}" class="btn btn-success">Edit</a>
             <a data-bs-toggle="modal" data-bs-target="#delete_skateboard" class="btn btn-danger">Delete</a>
           </td>
         </tr>
           <!-- Modal -->
<div class="modal fade" id="delete_skateboard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog bg-light">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this skateboard?</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <a href="/delete_skateboard/{{ $skateboards -> id }}" type="button" class="btn btn-danger">Confirm</a>
    </div>
  </div>
</div>
</div>
         @endforeach
       </tbody>
    </table>
  </div>

</div>

</body>
</html>
