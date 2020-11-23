<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body style="background-color: #fafafa">
<div class="flex-center position-ref full-height">


        <div class="container">
            <div class="row" >
                <div class="col-md-4 pt-5 offset-4">
                    <div class="card" style="width: 100%;">
                        <div class="">
                            <div class="card-body">
                                <div class="card-title align-items-center justify-content-between pt-3" align="center">
                                   <a href="#">
                                       <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo-2x.png/1b47f9d0e595.png 2x"
                                            width="150px">
                                   </a>
                                </div>
                                <div class="pt-4">
                                    <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group row pr-2 pl-2 " align="center">
                                            <div class="col-md-12">
                                                <input id="email" placeholder="Phone number,username, or email" style="background-color: #fafafa" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                     <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row row pr-2 pl-2">
                                            <div class="col-md-12">
                                                <input id="password" placeholder="Password" style="background-color: #fafafa" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 row pr-2 pl-2">
                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn btn-primary" style="width: 100%;height: 30px;line-height: 1px">
                                                    <?php echo e(__('Log in')); ?>

                                                </button>
                                            </div>
                                        </div>



                                        <div class="form-group" align="center">
                                            <br/>
                                            <hr style="margin: 0px"/>
                                            <button class="btn" style="z-index: 9999;position: absolute;margin-left: -20px;margin-top: -18px;background-color: #ffffff">OR</button>
                                            <br/>
                                            <a class="btn btn-link font-weight-bold" style="color: #385185" href="<?php echo e(route('password.request')); ?>">
                                                <?php echo e(__('Log in with Facbook')); ?>

                                            </a>
                                            <?php if(Route::has('password.request')): ?>

                                                <a class="btn btn-link "  href="<?php echo e(route('password.request')); ?>">
                                                    <?php echo e(__('forget Password ?')); ?>

                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pt-3 offset-4">
                    <div class="card" style="width: 100%;">
                        <div class="">
                            <div class="card-body" align="center">
                                <label class="font-weight-normal text-dark"> Don't have an account ?
                                    <a href="<?php echo e(route('register')); ?>" class="font-weight-bold text-decoration-none" >
                                        Sign up

                                    </a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\freecode\resources\views/auth/login.blade.php ENDPATH**/ ?>
