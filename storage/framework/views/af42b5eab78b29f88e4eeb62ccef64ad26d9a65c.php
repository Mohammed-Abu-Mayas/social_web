<?php $__env->startSection('content'); ?>
<div class="container pr-5 pl-5">
    <div class="row" >
        <div class="col-lg-3 p-4">
            <img src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-19/s150x150/61912929_412944672626666_2565731579078901760_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_ohc=NEByJ6pSX6UAX8hWJji&oh=85dd983ff07cde16c57ee439af6bd909&oe=5F11C00F" class="rounded-circle" width="150px" height="150px">
        </div>
        <div class="col-lg-9 pt-4">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1><?php echo e($user->username); ?></h1>
                <a href="#">Add Post</a>
            </div>

            <div class="d-flex ">
                <div class="pr-5"><strong>26</strong> posts</div>
                <div class="pr-5"><strong>207</strong> followers</div>
                <div class="pr-5"><strong>260</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold"><?php echo e($user->profile->tittle); ?></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="#"><?php echo e($user->profile->url); ?></a></div>

        </div>
    </div>
    <!--two row-->
    <div class="row pt-5">
        <div class="col-md-4">
            <img  src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/21042720_125077451473552_6822284073403154432_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=104&_nc_ohc=SqqIRr89wtsAX_ZiDzi&oh=c209f0b9f65522ef1ec224b0663b4be7&oe=5F0E7FF6" sizes="293px" style="object-fit:cover;" class="w-100">
        </div>
        <div class="col-md-4">
            <img  src="https://scontent-ams4-1.cdninstagram.com/v/t51.2885-15/e35/97143652_105724974399393_5310298632958522619_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com&_nc_cat=109&_nc_ohc=-PMBmGp6BjEAX-cVyaI&oh=44a519768152766cece3d521f68dd982&oe=5F0F9D6D" sizes="293px" style="object-fit:cover;" class="w-100">
        </div>
        <div class="col-md-4">
            <img  src="https://scontent-amt2-1.cdninstagram.com/v/t51.2885-15/e35/18160981_342336556169083_8833237325312950272_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=107&_nc_ohc=6cuJMRUE1aAAX9hEW5z&oh=a4417104d3bc3f109d6a6d5fa67c4683&oe=5F0F0FBE" sizes="293px" style="object-fit:cover;" class="w-100">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\freecode\resources\views/index.blade.php ENDPATH**/ ?>
