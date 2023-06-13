
<?php $__env->startSection('title', 'Iscrizione'); ?>
<?php $__env->startSection('script'); ?>
<script src='<?php echo e(URL::to("hw2-registra.js")); ?>' defer></script>
	<script>
        const CHECK_USER = "<?php echo e(URL::to('signup/check/username')); ?>";
        const CHECK_EMAIL = "<?php echo e(URL::to('signup/check/email')); ?>";
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <nav>
	PAGINA DI REGISTRAZIONE
    </nav>

    <main>
    <section class="campi">
	<h1>Iscriviti gratuitamente</h1>
    <form name='signup' method='post' autocomplete="off">
    <?php echo csrf_field(); ?>
    
        <div class="name">
        <label for='name'>Nome</label>
        <input type='text' name='name' value='<?php echo e(old("name")); ?>'>
        <div><span>Nome non valido</span></div>
        </div>
                    
        <div class="surname">
        <label for='surname'>Cognome</label>
        <input type='text' name='surname' value='<?php echo e(old("surname")); ?>'>
        <div><span>Cognome non valido</span></div>
        </div>
    

        <div class="username">
        <label for='username'>Nome utente</label>
        <input type='text' name='username' value='<?php echo e(old("username")); ?>'>
        <div><span>Nome utente non disponibile</span></div>
        </div>

        <div class="email">
        <label for='email'>Email</label>
        <input type='text' name='email' value='<?php echo e(old("email")); ?>'>
        <div><span>Email non valida</span></div>
        </div>

        <div class="password">
        <label for='password'>Password</label>
        <input type='password' name='password'>
        <div><span>Inserisci almeno 10 caratteri</span></div>
        </div>

        <div class="confirm_password">
        <label for='confirm_password'>Conferma Password</label>
        <input type='password' name='confirm_password'>
        <div><span>Le due password non coincidono</span></div>
        </div>
                
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='allarme'><span><?php echo e($err); ?></span></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="submit">
        <input type='submit' value="Registrati" id="submit">
        </div>

    </form>

    <a id='l' href="<?php echo e(URL::to('login')); ?>">Accedi se già registrato</a>
	</br>
    </section>
    </main>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/hw2-registra.blade.php ENDPATH**/ ?>