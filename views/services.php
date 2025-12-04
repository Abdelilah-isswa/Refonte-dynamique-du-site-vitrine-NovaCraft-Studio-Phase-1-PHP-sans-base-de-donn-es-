
<?php $info=[   
['title' =>'Création de sites Web','info'=>'Sites vitrines, e-commerce, applications modernes.']
,['title'=>'Développement sur mesure','info'=>'Outils internes, solutions métiers spécifiques.']
,['title'=>'Automatisation & API','info'=>'Automatisation des tâches, intégration dAPI.']
,['title'=>'Automatisation & API','info'=>'Automatisation des tâches, intégration dAPI.']


  ] ?>
  <section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-8 text-center">Nos Services</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <?php foreach($info as $job ): ?>
      <div class="bg-white p-6 shadow-md rounded-lg" >
        <h3 class="text-xl font-bold mb-2"> <?php echo $job['title']; ?> </h3>
        <p class="text-gray-600"><?php echo $job['info']; ?></p>
      </div>
      <?php endforeach; ?>
      <!-- <div class="bg-white p-6 shadow-md rounded-lg">
        <h3 class="text-xl font-bold mb-2">Développement sur mesure</h3>
        <p class="text-gray-600">Outils internes, solutions métiers spécifiques.</p>
      </div>
      <div class="bg-white p-6 shadow-md rounded-lg">
        <h3 class="text-xl font-bold mb-2">Automatisation & API</h3>
        <p class="text-gray-600">Automatisation des tâches, intégration d'API.</p>
      </div> -->
    </div>
  </section>
