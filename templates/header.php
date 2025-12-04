 
<!-- <?php  

 
?> -->
 
 <header class="bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4">
      <h1  class="text-2xl font-bold text-blue-600"><a href="/" class="hover:text-blue-600">DigitalWave</a></h1>
      <ul class="flex space-x-6">
        <li><a href="/"  class="<?php if($page ==="/views/home.php"){echo "text-blue-600" ;}else{ echo "text-black-600";}?> hover:text-blue-200">Accueil</a></li>
        <li><a href="/services" class="<?php if($page =="/views/services.php"){echo "text-blue-600" ;}else{ echo "text-black-600";}?> hover:text-blue-600">Services</a></li>
        <li><a href="/about" class="<?php if($page =="/views/about.php"){echo "text-blue-600" ;}else{ echo "text-black-600";} ?> hover:text-blue-600">À propos</a></li>
        <li><a href="/contact" class="<?php if($page =="/views/contact.php"){echo "text-blue-600" ;}else{ echo "text-black-600";} ?> hover:text-blue-600">Contact</a></li>
      </ul>
    </nav>
  </header>
