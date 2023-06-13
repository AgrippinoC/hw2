
<?php $__env->startSection('title', 'hw2 - Azienda Agricola Gagliano'); ?>
<?php $__env->startSection('script'); ?>
<script src='<?php echo e(URL::to("hw2-home.js")); ?>' defer></script>
<script>
        const PREF = "<?php echo e(URL::to('home/save_orange')); ?>";
        const csrf_token = "<?php echo e(csrf_token()); ?>";
   	 	</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

       <section data-nome="Tarocco">
        <h1>TAROCCO</h1>
        <h4><em>Tarocco Gallo</em></h4>
        L'arancia rossa più famosa, caratteristica della Piana di Catania. Ha una forma generalmente ovolidale, con una buccia di medio spessore, peso medio attorno ai 200g e non presenta semi. Si raccoglie nel periodo invernale (Dic-Apr) ed è destinata alla vendita all'ingrosso e alla produzione di spremute dal caratteristico colore rosso. è una varietà relativamente giovane e dal punto di vista nutrizionale è fortemente consigliata nella dieta mediterranea.
        <strong>Supergallo</strong>
        <div class="foto"><img src='<?php echo e(URL::to("IMG/tarocco.jpg")); ?>'/></div>
        <form><?php echo csrf_field(); ?><img id="like" src='<?php echo e(URL::to("IMG/dislike.png")); ?>'/></form>  
      </section>

      <section data-nome="Sanguinello"> 
        <h1>SANGUINELLO</h1>
        <h4><em>Tarocco Rosso Sanguinello</em></h4>
        È un tipo di arancia rossa caratterizzata dal colore intenso della polpa. La forma è a metà tra la sferica e l'ovoidale e presenta una buccia arancione spessa e pochi (o anche nulli) semi interni. Si raccoglie nel lungo periodo invernale-inizio primaverile (Gen-Apr) ed è di dimensioni medio-piccola. Nutrizionalmente presenta un gusto dolce e una maggior quantità di Vitamina C rispetto alle altre arance rosse.
        <strong>Simbolo di tradizione e qualità</strong>
        <div class="foto"><img src="https://agrumilenzi.it/wp-content/uploads/2016/04/Arancio-Tarocco-Rosso-Citrus-sinensis-scaled.jpg"/></div>
	      <form><?php echo csrf_field(); ?><img id="like" src='<?php echo e(URL::to("IMG/dislike.png")); ?>'/></form>        
      </section>

      <section data-nome="Washington">
        <h1>WASHINGTON</h1>
        <h4><em>Washington Navel</em></h4>
        Sono il secondo tipo di arance più coltivate al mondo, anche se in Sicilia sono pochi i posti in cui sono presenti, tra cui Ribera e la mia proprietà. Presentano una forma sferica e un peso medio di 200g. Caratteristica è la presenza di un "ombelico" di dimensioni variabili nella parte inferiore del frutto. La buccia è liscia e di medio spessore fine, un contenuto di succo molto elevato non troppo acido ed un periodo di raccolta invernale (Dic-Mar). Il colore invece è generalmente arancione, con un intensità variabile a seconda del grado di maturazione.
        <strong>Equilibrato</strong>
        <div class="foto"><img src='<?php echo e(URL::to("IMG/washington.jpg")); ?>'/></div>
	      <form><?php echo csrf_field(); ?><img id="like" src='<?php echo e(URL::to("IMG/dislike.png")); ?>'/></form>  
      </section>

      <section data-nome="Moro">
        <h1>MORO</h1>
        <h4><em>MORO NL 58-8D-1</em></h4>
        Caratteristica della Sicilia Sud-Orientale presenta una polpa molto scura, da qui l'origine del nome. La sua buccia è di medio spessore e assenza di semi. Hanno una forma sferica ed un peso attorno ai 150g. Il suo sapore è intenso ma comunque dolce e molto ricca di acqua, quasi l'85%. Hanno un periodo di raccolta molto piccolo (Gen-Feb). Sono inoltre riconosciute dal Consorzio di Tutela dell’Arancia Rossa di Sicilia IGP.
        <strong>Di fuoco</strong>
        <div class="foto"><img src="https://i3z4t9a6.rocketcdn.me/wp-content/uploads/2018/06/moro2-1-1024x768.jpg"/></div>
     	  <form><?php echo csrf_field(); ?><img id="like" src='<?php echo e(URL::to("IMG/dislike.png")); ?>'/></form>  
      </section>

       <section data-nome="Novellino">
        <h1>NOVELLINO</h1>
        <h4><em>Novellino Navel</em></h4>
        Detta anche Navel di Francofonte è una delle cosidette polpe bianche. Il succo che vi si ricava infatti è molto dolce e poco aspro. il frutto presenta una froma ovoidale e la buccia sottile e liscia. è adatta soprattutto per le spremute, grazie all'alto contenuto di succo e vitamina C. Sono tipiche della Piana di Catania e, a differenza di altre varietà, presenta una maturazione relativamente precoce (Nov-Gen).
        <strong>Delicato</strong>
        <div class="foto"><img src='<?php echo e(URL::to("IMG/novellino.jpg")); ?>'/></div>
        <form><?php echo csrf_field(); ?><img id="like" src='<?php echo e(URL::to("IMG/dislike.png")); ?>'/></form>  
	</section>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\utente\Desktop\hw2_PINO\resources\views/hw2-home.blade.php ENDPATH**/ ?>