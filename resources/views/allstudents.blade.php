<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .table,tr,td,th{
        border:1px solid black;
      }
    </style>
  </head>
  <body>
   
  <div class="container p-1">
    <h2>ALL STUDENTS LIST </h2>
    <td> <a href="/newStudent" class="btn btn-success ">Add student</a> </td>
    <table class="table table-border table-striped" p-2>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">City</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">View</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
   
      @foreach($data as $id => $s)
      <tr>
        <th scope="row">{{$s->id}}</th> 
       <td> {{$s->name}} </td> 
       <td> {{$s->email}}  </td>
       <td> {{$s->age}}  </td>
       <td> {{$s->city}} </td> 
       <td> {{$s->address}} </td> 
       <td> {{$s->phone}} </td>
       <td> <a href="{{ route('view.student',$s->id) }}" class="btn btn-primary btn-sm">View</a> </td>
       <td> <a href="{{ route('delete.student',$s->id) }}" class="btn btn-danger btn-sm">Delete</a> </td>
       <td> <a href="{{ route('update.page',$s->id) }}" class="btn btn-warning btn-sm">Update</a> </td>
       </tr> 
@endforeach
  
  </tbody>
</table>
  </div>
  <div class="conatainer mt-3 ms-8 align-center">
       {{ $data-> links()}}
       <!-- {{ $data-> links('pagination::bootstrap-5')}} -->
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>