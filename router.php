<?php 


//  $page =[
//      "about" =>"/views/about.php"
//      ,"contact" =>"/views/contact.php"
//      ,"home" =>"/views/home.php"
//      ,"services" =>"/views/services.php"
//      ,"404" =>"/views/404.php"
//  ];

// $x = $_SERVER["REQUEST_URI"];
// function router($x){

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

// }

// router($x);

 
$pages = [
    "/about" => "/views/about.php",
    "/contact" => "/views/contact.php",
    "/" => "/views/home.php",
    "/services" => "/views/services.php",
    "/404" => "/views/404.php"
];


echo $url;
function router($url, $pages) {
   
    if (array_key_exists($url, $pages)) {
        return $pages[$url];
        
    }
    
   
    if ($url === '/') {
        return $pages['/'];
       
    }
    
   
    http_response_code(404);
     return $pages['/404'];
}



$page = router($_SERVER["REQUEST_URI"], $pages);
// echo $_SERVER["REQUEST_URI"];
// echo $pages;
// echo $page;

require "templates/layout.php";