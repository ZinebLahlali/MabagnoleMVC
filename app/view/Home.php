<?php
 require_once './app/controllers/CategoriesController.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MaBagnole | Location de voitures au Maroc</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans">

  <section class="relative bg-gray-900 text-white py-20">
    <div class="absolute inset-0 opacity-40">
      <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=1920" alt="Background" class="w-full h-full object-cover">
    </div>
    <div class="container mx-auto px-6 relative z-10 text-center">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Louez la voiture idéale</h1>
      <p class="text-xl mb-8 text-gray-200">Large choix de véhicules au meilleur prix à Casablanca.</p>

    </div>
  </section>
  
  <section>
    <div class="grid grid-cols-3 gap-6 p-6">
    <?php foreach($showCate as $vehicule): ?>
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
            <div class="relative">
                <img src="<?= htmlspecialchars($vehicule->getImage()) ?>" 
                    alt="<?= htmlspecialchars($vehicule->getModele()) ?>" 
                    class="w-full h-48 object-cover">
            </div>
            <div class="p-4">
                <h3 class="text-lg font-semibold"><?= htmlspecialchars($vehicule->getMarque()) ?> <?= htmlspecialchars($vehicule->getModele()) ?></h3>
                <p class="text-gray-500 mt-1">Prix: <?= htmlspecialchars($vehicule->getPrix()) ?> DH</p>
                <p class="text-gray-500 mt-1">Disponibilité: <?= htmlspecialchars($vehicule->getDisponible()) ?></p>
                <div class="flex justify-between mt-2 text-sm text-gray-600">
                    <span>🚗 <?= htmlspecialchars($vehicule->getNbPlaces()) ?></span>
                    <span>🚪 <?= htmlspecialchars($vehicule->getBagages()) ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
  </section>

  <!--login-->

      <div id="loginModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4">
        
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden border border-gray-100">
            <div class="bg-red-600 p-6 text-white flex justify-between items-center">
                <h3 class="text-2xl font-bold">Connexion</h3>
                <button id="closeLogin" class="text-white hover:text-gray-200">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <form method="POST" class="p-8 space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email"  name="email" placeholder="exemple@mail.com" class="w-full px-4 py-3 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-red-500 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Mot de passe</label>
                    <input type="password" name="password" placeholder="••••••••" class="w-full px-4 py-3 bg-gray-50 border rounded-xl focus:ring-2 focus:ring-red-500 outline-none">
                </div>

                <button type="submit" name="login" class="w-full bg-red-600 text-white font-bold py-3 rounded-xl hover:bg-red-700 transition shadow-lg">
                    Valider
                </button>
            </form>
        </div>
    </div>

  <script>
        const modal = document.getElementById('loginModal');
        const btnOpen = document.getElementById('openLogin');
        const btnClose = document.getElementById('closeLogin');

        // Fonction pour OUVRIR (Retirer 'hidden' et ajouter 'flex')
        btnOpen.onclick = function() {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        // Fonction pour FERMER (Ajouter 'hidden' et retirer 'flex')
        btnClose.onclick = function() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // FERMER si on clique à l'extérieur du formulaire
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        }
    </script>
</body>
</html>