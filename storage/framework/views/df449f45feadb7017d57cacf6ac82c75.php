<!DOCTYPE html>
<html>
<head>
   <title>Browse Movies</title>
</head>
<body>
<h2>Movies</h2>

<?php $__empty_1 = true; $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <p>
    Title: <?php echo e($movie->title); ?><br>
    Year: <?php echo e($movie->year); ?><br>
    Runtime: <?php echo e($movie->runtime); ?><br>
    IMDB Rating: <?php echo e($movie->imdb['rating']); ?><br>
    IMDB Votes: <?php echo e($movie->imdb['votes']); ?><br>
    Plot: <?php echo e($movie->plot); ?><br>
  </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>No results</p>
<?php endif; ?>

</body>
</html><?php /**PATH E:\code\mongodb\my-app\resources\views/browse_movies.blade.php ENDPATH**/ ?>