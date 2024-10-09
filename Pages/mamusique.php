<?php 
require_once('Asset/templates/header.php');

$musique = [
["title" => "Next To You", "album" => "Outlandos d'Amour", "pochette"=> "Homme-guitare.jpg"],
["title" => "So Lonely", "album" => "Outlandos d'Amour", "pochette"=> "Homme-guitare.jpg"],
["title" => "Roxanne", "album" => "Outlandos d'Amour", "pochette"=> "Homme-guitare.jpg"],
];

var_dump($musique);

?>
        
     

<div><a class="retourAcceuil" href="/">🏊‍♀️ Retour à l'acceuil</a></div>

 <body>

    <h1> la la la la</h1>

    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


    <?php 
require_once('Asset/templates/footer.php')
?>