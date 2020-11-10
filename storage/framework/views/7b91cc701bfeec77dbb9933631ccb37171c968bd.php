<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
      <div class="col-3 p-5"> 
         <img src="images/image1.jpg" class="rounded-circle" height = 200px widht = 200px>
      </div>
     <div class="col-9 pt-5">
         <div class ="d-flex justify-content-between align-items-baseline"> 
            <h1><?php echo e($user->username); ?></h1>
            <a href="#" role="button">Add New Post</a>
         </div>
         <div class="d-flex">
            <div class="pr-5"><strong>153 </strong>post</div>
            <div class="pr-5"><strong>23k </strong>followers</div>
            <div class="pr-5"><strong>212 </strong>following</div>
         </div>
         <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>
         <div><?php echo e($user->profile->description); ?></div>
         <div><a href ="#"><?php echo e($user->profile->url ?? 'N/A'); ?></a></div>
     </div>
   </div>

   <div class="row pt-5">

      <div class="col-4">
      <img src="images/image2.jpg" class="w-100 h-100">
      </div>
      <div class="col-4">
      <img src="images/image3.jpg" class="w-100 h-100">
      </div>
      <div class="col-4">
      <img src="images/image4.jpg" class="w-100 h-100">
      </div>
   
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nary/Documents/code/freeCodeGram/resources/views/home.blade.php ENDPATH**/ ?>