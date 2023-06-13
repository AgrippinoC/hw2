
<?php $__env->startSection('title', 'Video'); ?>
<?php $__env->startSection('script'); ?>
<script src='<?php echo e(URL::to("hw2-video.js")); ?>' defer></script>
<script>
  const VIMEO = "<?php echo e(URL::to('video/search_video')); ?>";
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
     </br>
     <iframe id="player" width="560" height="315" src="https://www.youtube.com/embed/fQTu3gr13B4?controls=0" title="presentazione" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
     </br>
     <button>Guarda anche altri video</button>
    <div id = "preview">	
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/hw2-video.blade.php ENDPATH**/ ?>