<html>
<head>
<title><?php echo $__env->yieldContent('title'); ?></title>
<link rel="icon" type="image/x-icon" href='<?php echo e(URL::to("IMG/orange-xxl.ico")); ?>'>
<link rel="stylesheet" href='<?php echo e(URL::to("hw2.css")); ?>' />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<?php echo $__env->yieldContent('script'); ?>
</head>
  <body>

     <p id="logo">
      <img src="https://sicibia.it/wp-content/uploads/2019/01/mandarini-bio.jpg"/></br>
      <em> Azienda Agricola Gagliano</em>
    </p>

    <header>
      <div id="overlay"></div>
      <div id="uplay">Agrumi di Sicilia</br></div>
    </header>
    
    <nav>
      <a href='/recipe'>RICETTE</a>
      <a href='/social'>CONTATTI</a>
      <a href='/home'>HOME</a>
      <a href='/video'>VIDEO</a>
      <a href='/profile'>PROFILO</a>
    </nav>

    <article>
    <?php echo $__env->yieldContent('content'); ?>
    </article>

    <footer>Casaccio Agrippino M:1000014638</footer>
</body>

<?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/layout1.blade.php ENDPATH**/ ?>