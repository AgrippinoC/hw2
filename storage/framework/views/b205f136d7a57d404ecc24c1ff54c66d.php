
<?php $__env->startSection('title', 'Accesso'); ?>
<?php $__env->startSection('script'); ?>
<script src='<?php echo e(URL::to("hw2-login.js")); ?>' defer></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<nav>
	PAGINA D'ACCESSO
    </nav>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p class='allarme'><?php echo e($err); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<main>
	<section class="campi">
	    <h1>Accedi al sito</h1>
            <form name='login' method='post'>
            <?php echo csrf_field(); ?>
                <p class="username">
                    <label>Username <input type='text' name='username' value='<?php echo e(old("username")); ?>'></label>
                    <div class='allarme'><span></span></div>
		</p>
                <p class="password">
                    <label>Password <input type='password' name='password'></label>
                </p>
                <p class="submit">
                    <input type='submit' value="ACCEDI">
                </p>
            </form>
	<a href="<?php echo e(URL::to('signup')); ?>">REGISTRATI</a>
	</section>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/hw2-login.blade.php ENDPATH**/ ?>