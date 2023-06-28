<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <body class="bg-primary">
        <div class="container-sm my-5 py-5">
            <div class="row justify-content-center">
                <div class="p-5 my-5 bg-light rounded-3 col-xl-3 border">
                    <div class="mb-3 text-center mb-5">
                        <i class="bi-hexagon-fill my-2 fs-1 text-primary"></i>
                        <h4 class="fs-5 fw-bold">Employee Data Master</h4>
                    </div>
                    <div class="form my-3">
                        <hr>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-4">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Enter Your Email" autofocus>

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

                            <div class="row">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

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
                            <hr>
                            <div class="row pt-2">
                                <button type="submit" class="btn btn-primary btn-lg mt-1 ">
                                    <i class="bi bi-box-arrow-right"></i> <?php echo e(__('Login')); ?>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH D:\Laravel\modul-5\resources\views/auth/login.blade.php ENDPATH**/ ?>