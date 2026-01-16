
 <section id="fleet" class="container mx-auto px-6 py-16">
    <div class="flex justify-between items-end mb-12">
      <div>
        <h2 class="text-3xl font-bold text-gray-800">Véhicules disponibles</h2>
        <div class="h-1 w-20 bg-red-600 mt-2"></div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach($vehicules as $vehicule): ?>
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow group">
        <div class="relative overflow-hidden">
          <img src="<?php echo htmlspecialchars($vehicule["image"]);  ?>" class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500">
          <span   class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-sm font-bold shadow-sm"><?php echo htmlspecialchars($vehicule["prix"]); ?>DH</span>
        </div>
        <div class="p-6">

          <h4 class="text-xl font-bold text-gray-800 mb-2"><?php echo htmlspecialchars($vehicule["marque"]);  ?></h4>
          <h4 class="text-xl font-bold text-gray-800 mb-2"><?php echo htmlspecialchars($vehicule["categorie"]);  ?></h4>
          
          <a href="details.php?id=<?= $vehicule['id_car'] ?>" class="block text-center bg-gray-100 text-gray-800 font-bold py-3 rounded-xl hover:bg-red-600 hover:text-white transition-colors">Voir détails</a>
        </div>
      </div>
      <?php endforeach;?>
    </div>
  </section>