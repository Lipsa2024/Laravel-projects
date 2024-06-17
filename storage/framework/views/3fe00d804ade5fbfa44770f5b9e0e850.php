<h1>Student Details</h1>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>Name : <?php echo e($student->name); ?></h3>
<h3>Email : <?php echo e($student->email); ?></h3>
<h3>Age : <?php echo e($student->age); ?></h3>
<h3>City : <?php echo e($student->city); ?></h3>
<h3>Phone : <?php echo e($student->phone); ?></h3>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\laravel\project2\resources\views/student.blade.php ENDPATH**/ ?>