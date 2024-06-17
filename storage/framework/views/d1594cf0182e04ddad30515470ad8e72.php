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
   
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($s->id); ?></th> 
       <td> <?php echo e($s->name); ?> </td> 
       <td> <?php echo e($s->email); ?>  </td>
       <td> <?php echo e($s->age); ?>  </td>
       <td> <?php echo e($s->city); ?> </td> 
       <td> <?php echo e($s->address); ?> </td> 
       <td> <?php echo e($s->phone); ?> </td>
       <td> <a href="<?php echo e(route('view.student',$s->id)); ?>" class="btn btn-primary btn-sm">View</a> </td>
       <td> <a href="<?php echo e(route('delete.student',$s->id)); ?>" class="btn btn-danger btn-sm">Delete</a> </td>
       <td> <a href="<?php echo e(route('update.page',$s->id)); ?>" class="btn btn-warning btn-sm">Update</a> </td>
       </tr> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  </tbody>
</table>
  </div>
  <div class="conatainer mt-3 ms-8 align-center">
       <?php echo e($data-> links()); ?>

       <!-- <?php echo e($data-> links('pagination::bootstrap-5')); ?> -->
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH D:\laravel\project2\resources\views/allstudents.blade.php ENDPATH**/ ?>