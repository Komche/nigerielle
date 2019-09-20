<?php 
$title = "Contact";
ob_start();
?>
    <section style="padding-top: 0;" class="contact pt-100 pb-100" id="contact">
    <div style="background-image: url(public/img/n3.JPG); height: 400px" class=" mx-auto text-center">
                  <div  class="section-title mb-100">
                     <h4>Contactez-nous</h4>
                  </div>
               </div>
         <div class="container">
            <div class="row">
            </div>
            <div class="row text-center">
                  <div class="col-md-8">
                     <form action="#" class="contact-form">
                        <div class="row">
                           <div class="col-xl-6">
                              <input type="text" placeholder="Nom">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="Prenom">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="email">
                           </div>

                           <div class="col-xl-6">
                              <input type="text" placeholder="telephone">
                           </div>
                           <div class="col-xl-6">
                              <input type="text" placeholder="Objet">
                           </div>
                           <div class="col-xl-12">
                              <textarea placeholder="message" cols="30" rows="10"></textarea>
                              <input type="submit" value="Envoyer message">
                           </div>
                        </div>
                     </form>
                     </div>
                  <div class="col-md-4">
                     <div class="single-contact">
                        <i class="fa fa-map-marker"></i>
                        <h5>Adresse</h5>
                        <p>Niamey-Niger</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-phone"></i>
                        <h5>Telephone</h5>
                        <p>93906364/90956364</p>
                     </div>
                     <div class="single-contact">
                        <i class="fa fa-envelope"></i>
                        <h5>Email</h5>
                        <p>contact.nigerielles@.ne</p>
                     </div>
                  </div>
                  </div>
            </div>
         </div>
      </section>
<?php
$content = ob_get_clean();
require('template.php');
?>