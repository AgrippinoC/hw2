
<?php $__env->startSection('title', 'Ricette'); ?>
<?php $__env->startSection('script'); ?>
<script src='<?php echo e(URL::to("hw2-recipe.js")); ?>' defer></script>
<script>
  const CHECK_RICETTE = "<?php echo e(URL::to('recipe/search_recipe')); ?>";
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

        <h4>Le nostre arance possono essere usate in varie ricette.</br>
        Cercala specificandone la tipologia
        </h4>
	<form name="search_content" id="food">
        <label>Cerca le ricette:</label>
            <input type='text' name='search' id='content'>	
	    <input type='submit' value='cerca'>
        </form>
	<div id='recipe'></div>
        <div id='erore' class='hidden'> 
        <img src='<?php echo e(URL::to("IMG/sob.gif")); ?>'/></br>
      Non sono state trovate ricette inerenti </br> prova con un altra tipologia
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/hw2-recipe.blade.php ENDPATH**/ ?>