<html>
    <head>
        <link rel='stylesheet' href='<?php echo e(URL::to("hw2-profile.css")); ?>'>
        <script src='<?php echo e(URL::to("hw2-profile.js")); ?>' defer></script>
		<script>
        const COMMENT = "<?php echo e(URL::to('profile/save_comment')); ?>";
        const PREFER = "<?php echo e(URL::to('profile/search_orange')); ?>";
		const csrf_token = "<?php echo e(csrf_token()); ?>";
   	 	</script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profilo</title>
    </head>

    <body>
    	<p id="logo">
      	<img src="https://sicibia.it/wp-content/uploads/2019/01/mandarini-bio.jpg"/></br>
      	<em> Azienda Agricola Gagliano</em>
    	</p>

    	<header>
      	<div id="overlay"></div>
    	<div id="uplay">Profilo di <?php echo e($user->username); ?></div>
  	</header>
    
	  <nav>
      <a href='/recipe'>RICETTE</a>
      <a href='/social'>CONTATTI</a>
      <a href='/home'>HOME</a>
      <a href='/video'>VIDEO</a>
      <a href='/profile'>PROFILO</a>
    </nav>

        <main>

        <article>
	<div id="foto">
	<img src='<?php echo e(URL::to("IMG/user.png")); ?>'>
	</div>
	<div id="scheda">
	<h3><?php echo e($user->username); ?></h3>
	<h5>Nome: <?php echo e($user->name); ?></h5>
	<h5>Cognome: <?php echo e($user->surname); ?></h5>
	<h5>Email: <?php echo e($user->email); ?></h5>
	<h5>Arance preferite: 
        <div id="results"></div>
	</h5>
	<h5>Scrivi una recensione:</h5>
	<form>
	<?php echo csrf_field(); ?>
        <input type='text' name='commento' id='comment'>
	    <input type='number' max='5' min='1' name='stella' id='comment'>	
	    <input class="submit" type='submit' value='Invio'>
	</form>
	</br> <a id='l' href='<?php echo e(URL::to("/logout")); ?>'> Logout </a>
    </article>
	</main>
    </body>
</html><?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/hw2-profile.blade.php ENDPATH**/ ?>