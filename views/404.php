
  <section class="container mx-auto py-20 text-center">
    <h2 class="text-4xl font-bold mb-6">page not found </h2>
    <a href="/" >back to home</a>
  </section>
<?php 



// echo "your name :".$name;
 if( isset($_POST['name']) ){
    $name =$_POST['name'];
 echo "your name : {$_POST['name']}";



 }

?>