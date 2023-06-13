<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel='stylesheet' href='<?php echo e(URL::to("hw2-log.css")); ?>'>
        <link rel="icon" type="image/x-icon" href='<?php echo e(URL::to("IMG/orange-xxl.ico")); ?>'>
        <?php echo $__env->yieldContent('script'); ?>
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
    </head>

    <body>
         <p id="logo">
      <img src="https://sicibia.it/wp-content/uploads/2019/01/mandarini-bio.jpg"/></br>
      <em> Azienda Agricola Gagliano</em>
    	</p>

      <?php echo $__env->yieldContent('content'); ?>
        
    </body>

</html>
<?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/layout2.blade.php ENDPATH**/ ?>