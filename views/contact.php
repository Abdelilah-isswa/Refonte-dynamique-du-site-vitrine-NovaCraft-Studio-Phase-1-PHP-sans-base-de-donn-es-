<?php 

$success = "";
$errors = [
    'name' => '',
    'email' => '',
    'message' => ''
];


$nameValue = "";
$emailValue = "";
$messageValue = "";

if($_SERVER["REQUEST_METHOD"] === 'POST'){
 
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $nameValue = htmlspecialchars($name);
    $emailValue = htmlspecialchars($email);
    $messageValue = htmlspecialchars($message);
    $hasError = false;
    
  
    if(empty($name)){
        $errors['name'] = "Le nom est obligatoire";
        $hasError = true;
    } elseif(strlen($name) < 2){
        $errors['name'] = "Le nom doit contenir au moins 2 caractères";
        $hasError = true;
    }
    
  
    if(empty($email)){
        $errors['email'] = "L'email est obligatoire";
        $hasError = true;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Format d'email invalide";
        $hasError = true;
    }
    
   
    if(empty($message)){
        $errors['message'] = "Le message est obligatoire";
        $hasError = true;
    } elseif(strlen($message) < 10){
        $errors['message'] = "Le message doit contenir au moins 10 caractères";
        $hasError = true;
    }
    
   
    if(!$hasError){
        $success = "✅ Votre message a été envoyé avec succès!";
        $nameValue = "";
        $emailValue = "";
        $messageValue = "";
        
     
    }
}
?>

<section class="container mx-auto py-16">
    <h2 class="text-3xl font-bold mb-6 text-center">Contactez-nous</h2>
    
    <form class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-6" method="POST">
     
        <?php if(!empty($success)): ?>
            <div class="bg-green-50 border-l-4 border-green-500 p-4">
                <p class="text-green-700"><?= htmlspecialchars($success) ?></p>
            </div>
        <?php endif; ?>
        
        
        <div>
            <input type="text" name="name" placeholder="Votre nom" 
                   class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 
                          <?php echo !empty($errors['name']) ? 'border-red-500' : '' ?>"
                   value="<?= $nameValue ?>">
            <?php if(!empty($errors['name'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= $errors['name'] ?></p>
            <?php endif; ?>
        </div>
        
       
        <div>
            <input type="email" name="email" placeholder="Votre email" 
                   class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 
                          <?php echo !empty($errors['email']) ? 'border-red-500' : '' ?>"
                   value="<?= $emailValue ?>">
            <?php if(!empty($errors['email'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= $errors['email'] ?></p>
            <?php endif; ?>
        </div>
        
       
        <div>
            <textarea placeholder="Votre message" name="message" 
                      class="w-full border px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 h-40
                             <?php echo !empty($errors['message']) ? 'border-red-500' : '' ?>"><?= $messageValue ?></textarea>
            <?php if(!empty($errors['message'])): ?>
                <p class="text-red-500 text-sm mt-1"><?= $errors['message'] ?></p>
            <?php endif; ?>
        </div>
        
     
        <button type="submit" name="submit" 
                class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-medium text-lg">
            Envoyer
        </button>
    </form>
</section>