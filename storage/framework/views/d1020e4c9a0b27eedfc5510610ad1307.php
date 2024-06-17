<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3">
    <div class="row">
      <h2>Update Student</h2>
  <form action="<?php echo e(route('update.student', $data->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" value="<?php echo e($data->name); ?>" name="studentName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" value="<?php echo e($data->email); ?>" name="studentEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input type="number" value="<?php echo e($data->age); ?>" name="studentAge" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">City</label>
    <input type="text" value="<?php echo e($data->city); ?>" name="studentCity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" value="<?php echo e($data->address); ?>" name="studentAddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PhoneNumber</label>
    <input type="text" value="<?php echo e($data->phone); ?>" name="studentPhone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH D:\laravel\project2\resources\views/updatestudent.blade.php ENDPATH**/ ?>