<?php
$title = "Galerie";
ob_start();
?>
<div style="background-image: url(public/img/n8.JPG); background-repeat: no-repeat;background-size: 1500px; height: 400px"  class=" mx-auto text-center">
                  <div  class="section-title mb-100">
                     <h4>GALERIE PHOTOS</h4>
                  </div>
               </div>
<div id="gallery">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a title="playa" class="link-gallery">
                            <img class="img-gallery modal-img" src="public/img/n1.JPG" width="90px" height="60px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="flores" class="link-gallery">
                            <img class="img-gallery" src="public/img/n11.jpg" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <!--</div>-->
                <!--<div class="row">-->
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cascada" class="link-gallery">
                            <img class="img-gallery" src="public/img/n12.jpg" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="rocas" class="link-gallery">
                            <img class="img-gallery" src="public/img/n9.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="rocas" class="link-gallery">
                            <img class="img-gallery" src="public/img/n8.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <!--</div>
                <div class="row">-->
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cascada" class="link-gallery">
                            <img class="img-gallery" src="public/img/n10.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cancha en el bosque" class="link-gallery">
                            <img class="img-gallery" src="public/img/n2.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>


                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a title="playa" class="link-gallery">
                            <img class="img-gallery modal-img" src="public/img/n3.JPG" width="90px" height="60px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="flores" class="link-gallery">
                            <img class="img-gallery" src="public/img/n4.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <!--</div>-->
                <!--<div class="row">-->
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cascada" class="link-gallery">
                            <img class="img-gallery" src="public/img/n5.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="rocas" class="link-gallery">
                            <img class="img-gallery" src="public/img/n6.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="rocas" class="link-gallery">
                            <img class="img-gallery" src="public/img/n7.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <!--</div>
                <div class="row">-->
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cascada" class="link-gallery">
                            <img class="img-gallery" src="public/img/n13.jpg" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cancha en el bosque" class="link-gallery">
                            <img class="img-gallery" src="public/img/n14.jpg" width="90px" height="60px">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Modal -->
    <div id="myModal" class="modal">
        <!-- Boton para cerrar el modal -->
        <span class="close">×</span>
        <!-- Imagen a mostrar -->
        <span class="zoom" id="img-zoom" style="position: relative; overflow: hidden;">
            <img class="modal-content" id="img01">
        </span>
        <!-- Descripcion de la imagen -->
        <div id="caption">hola</div>
    </div>
</div>

<?php 
    $content = ob_get_clean();
    require('template.php');
?>