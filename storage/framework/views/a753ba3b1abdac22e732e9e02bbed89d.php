
<?php $__env->startSection('title', 'Contatti'); ?>
<?php $__env->startSection('script'); ?>
<script src='<?php echo e(URL::to("hw2-social.js")); ?>' defer></script>
<script>  const CHECK_COMMENTO = "<?php echo e(URL::to('social/search_comment')); ?>"; </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<p>L'Azienza Agricola Gagliano è una piccola azienda a conduzione familiare specializzata nella produzione e raccolta delle arance.
	</p>
	<h3>Vieni a trovarci</h3>
	<section id = 'map'>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9095.49469022354!2d14.674359142258584!3d37.28574592707837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sit!2sit!4v1684166537704!5m2!1sit!2sit" width="400" height="300" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>        
	<h3>Cercaci su tutti i nostri social</h3>
        <section id = 'social'>
		<img data-src="1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/768px-2021_Facebook_icon.svg.png"/>
		<img data-src="2" src="https://img.freepik.com/free-icon/twitter_318-674515.jpg"/>
		<img data-src="3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/769px-Instagram-Icon.png"/>
	</section>
	<section id = 'comment'>
	</section>
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/hw2-social.blade.php ENDPATH**/ ?>