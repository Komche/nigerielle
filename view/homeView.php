<?php
$title = "Accueil";
ob_start();
?>
<div class="slideWiz" style="width: 100%; height: 650px;"></div>
<div style="margin-top: 30px" class="container-fluid h-100 arriere">
    <div class="row justify-content-center h-100">
        <div class="col-md-8 text-center wow bounceInUp duration-2s">
            <div class="card-deck">
                <div class="card bg">
                    <a href="index.php?action=activite&activite=training"><i class="fa fa-child fa-5x text-success" aria-hidden="true"></i></a>
                    <div class="card-body">
                        <h5 class="card-title">Training</h5>
                    </div>
                </div>
                <div class="card bg">
                    <a href="index.php?action=activite&activite=business"><i class="fa fa-line-chart fa-5x text-success" aria-hidden="true"></i></a>
                    <div class="card-body">
                        <h5 class="card-title">Business Club</h5>
                    </div>
                </div>
                <div class="card bg">
                    <a href="index.php?action=activite&activite=event"><i class="fa fa-tags fa-5x text-success" aria-hidden="true"></i></a>
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                    </div>
                </div>
            </div>
            <br>
            <div class="card-deck">
                <div class="card bg">
                    <a href="index.php?action=activite&activite=magazin"><i class="fa fa-shopping-cart fa-4x text-success" aria-hidden="true"></i></a>
                    <div class="card-body">
                        <h5 class="card-title">Le Magazine</h5>
                    </div>
                </div>
                <div class="card bg">
                    <a href="index.php?action=activite&activite=maison"><i class="fa fa-university fa-4x text-success" aria-hidden="true"></i></a>
                    <div class="card-body">
                        <h5 class="card-title">La Smart House </h5>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4 wow bounceInUp duration-2s">
            <div class="card-deck">
                <div class="card bg-border">
                    <img class="card-img-top" src="public/img/presentation.JPG" alt="Image directrice">
                    <div class="card-body">
                        <h5 class="card-title text-center"><b>L'entrepreneur du mois</b></h5>
                        <p class="card-text">Nigerielles est une association de jeunes femmes nigériennes entrepreneures et porteuses de projets qui a été créé en Mai 2017 dans le but de promouvoir l’entreprenariat et le leadership féminin au Niger <a href="#">lire plus...</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div style="margin-bottom: 30px" class="container arriere">
    <div class="row blog wow bounceInUp duration-2s">
        <div class="col-md-12">
            <h2 class="text-center">Actualités</h2>
            <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <!--  <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                 Carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                        <!--Date-->

                                        <!--Image-->
                                        <figure><img alt="" src="public/img/actu1.JPG"></figure>
                                    </div>
                                    <div class="item-box-blog-body">
                                        <!--Heading-->
                                        <div class="item-box-blog-heading">
                                            <a href="#" tabindex="0">
                                                <h5>Actualités</h5>
                                            </a>
                                        </div>
                                        <!--Data-->
                                        <div class="item-box-blog-data" style="padding: px 15px;">

                                        </div>
                                        <!--Text-->
                                        <div class="item-box-blog-text">
                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                        <!--Date-->
                                        <!--Image-->
                                        <figure> <img alt="" src="public/img/actu2.JPG"> </figure>
                                    </div>
                                    <div class="item-box-blog-body">
                                        <!--Heading-->
                                        <div class="item-box-blog-heading">
                                            <a href="#" tabindex="0">
                                                <h5>Actualités</h5>
                                            </a>
                                        </div>
                                        <!--Data-->
                                        <div class="item-box-blog-data" style="padding: px 15px;">
                                        </div>
                                        <!--Text-->
                                        <div class="item-box-blog-text">
                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                        <!--Read More Button-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                        <!--Date-->
                                        <!--Image-->
                                        <figure> <img alt="" src="public/img/actu3.JPG"> </figure>
                                    </div>
                                    <div class="item-box-blog-body">
                                        <!--Heading-->
                                        <div class="item-box-blog-heading">
                                            <a href="#" tabindex="0">
                                                <h5>Actualités</h5>
                                            </a>
                                        </div>
                                        <!--Data-->
                                        <div class="item-box-blog-data" style="padding: px 15px;">

                                        </div>
                                        <!--Text-->
                                        <div class="item-box-blog-text">
                                            <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                        </div>
                                        <!--Read More Button-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.row-->
                    </div>
                </div>
            </div>
            <button type="button" name="button" class="btn login_btn voir-plus">Plus d'actualités</button>
        </div>
    </div>
    <div><br>
        <h1 class="text-center">Partenaires</h1>
        <!------ Include the above in your HEAD tag ---------->
        <div class="container wow bounceInUp duration-2s">
            <div class="row">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <div class="item">
                            <div class="pad15">
                                <a target="_blank" href="https://www.seen-niger.com/fr"><img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/seen.jpeg" width="100%" height="90%"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a target="_blank" href="https://www.sonibank.com"><img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/sonibank.jpeg" width="100%" height="90%"></a>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a target="_blank" href="https://www.banqueatlantique.net/ner/"><img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/banque.png" width="100%" height="90%"></a>     
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a target="_blank" href="https://www.orano.group"><img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/orano.png" width="100%" height="90%"></a>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="pad15">
                                <a target="_blank" href="www.initiative3n.ne"><img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/haut.jpg" width="100%" height="90%"></a>
                                
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success leftLst">
                        <</button> <button class="btn btn-success rightLst">>
                    </button>
                </div>
            </div>
        </div>
    </div><br>
    <div>
        <h2 class="text-center">GALERIE PHOTOS</h2>
        <div id="gallery">
            <section class="wow bounceInUp duration-2s">
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
        <br>
        <h1 class="text-center"> Retrouvez-nous <h1><br>
                </h3>
                <div class="row">
                    <div style="background-color: #741b47; padding: 20px" class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.8807384598886!2d2.0901718497753445!3d13.542906805703378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11da9f741f03c03f%3A0xb7df0e3b0a2a5aac!2sNigerielles!5e0!3m2!1sfr!2sne!4v1568832175108!5m2!1sfr!2sne" style="width: 100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <hr>
                </a>
    </div>
</div>
<?php
$content = ob_get_clean();
require('template.php');
?>