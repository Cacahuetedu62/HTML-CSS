<?php 
require_once('Asset/templates/header.php')
?>    

<div><a class="retourAcceuil" href="/">🏊‍♀️ Retour à l'acceuil</a></div>


<body>
    <div class="container-contact-form">
        <div class="contact-image">
            <img src="/Asset/images/deepak-rastogi-pSzT3X9jLtc-unsplash.jpg" alt="rocket_contact"/>
        <form method="post">
            <h3>Enovyez moi un message</h3>
        </form>
    </div>
    </div>

     <div class="container">
        <div class="form-group">
             <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Prenom" required>
       </div>
        <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Adresse Email" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Numéro de téléphone" required>
        </div>
            <div class="form-group">
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Objet" required>
            </div>
            <div class="form-group">
        <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>                   
            </div>
                                
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">C'est envoyé !!</button>
        </form>
        </div>
       </div>
         </div>
    </div>


    <?php 
require_once('Asset/templates/footer.php')
?>