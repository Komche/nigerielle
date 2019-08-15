<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Sticky Navbar</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="public/css/style.css">
   </head>
   <body>
       
      <div class="wrapper">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  <img src="public/img/nigerielle1.png" width="140px" height="75px" alt="logo nigerielle">
               </div>
               <div class="menu">
                  <ul>
                     <li class="acc"><a href="#" >Accueil</a></li>  
                     <li><a href="#">Activités</a></li>
                     <li><a href="#">Produits et Services</a></li>
                     <li><a href="#">Partenaires</a></li>
                     <li><a href="#">Galerie</a></li>
                     <li><a href="#">Contact</a></li>
                     <li>
                        <div class="search">
                            <input type="text" class="form-control input-sm" maxlength="64" placeholder="rechercher" />
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></button>
                        </div>   
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
    
   <div style="margin-top: 30px" class="container-fluid h-100 arriere">
    <div class="row justify-content-center h-100">
   <div class="col-md-8 text-center">
      <h2>Domaine/Activités</h2>
      <div class="card-deck">
        <div class="card bg">
         <a href="#"><i class="fa fa-ambulance fa-5x" aria-hidden="true"></i></a>
          <div class="card-body">
            <h5 class="card-title">Santé</h5>
          </div>
        </div>
        <div class="card bg">
           <a href="#"><i class="fa fa-plug fa-5x" aria-hidden="true"></i></a>
          <div class="card-body">
            <h5 class="card-title">Environnement</h5>
            </div>
        </div>
        <div class="card bg">
           <a href="#"><i class="fa fa-heartbeat fa-5x" aria-hidden="true"></i></a>
          <div class="card-body">
            <h5 class="card-title">Hygiene</h5>
            </div>
        </div>
      </div>
      <br>
      <div class="card-deck">
        <div class="card bg">
           <a href="#"><i class="fa fa-leaf fa-4x" aria-hidden="true"></i></a>
          <div class="card-body">
            <h5 class="card-title">Transformation</h5>
            </div>
        </div>
        <div class="card bg">
           <a href="#"><i class="fa fa-recycle fa-5x" aria-hidden="true"></i></a>
          <div class="card-body">
            <h5 class="card-title">Recyclage</h5>
            </div>
        </div>
        <div class="card bg">
           <a href="#"><i class="fa fa-life-ring fa-5x" aria-hidden="true"></i></a>
          <div class="card-body">
            <h5 class="card-title">Energie</h5>
            </div>
        </div>
      </div>
   </div>
   <div class="col-md-4">
      <div class="card-deck">
        <div class="card bg-border">
          <img class="card-img-top" src="public/img/femme.jpg" alt="Image directrice">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Promotrice de Nigerielles</b></h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
     </div>
  </div>
</div>
   </div>
              
   </div>
</div>
        <div style="margin-bottom: 30px" class="container arriere">
          <div class="row blog">
            <div class="col-md-12">
              <h2 class="text-center">Produit et service</h2>
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
              <!--  <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                 Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            
                            <!--Image-->
                            <figure><img alt="" src="public/img/imag.jpg"></figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>Produit</h5>
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
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            
                            <!--Image-->
                            <figure> <img alt="" src="public/img/imag.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>Produit</h5>
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
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <!--Image-->
                            <figure> <img alt="" src="public/img/imag.jpg"> </figure>                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="#" tabindex="0">
                                <h5>Produit</h5>
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
					<button type="button" name="button" class="btn login_btn voir-plus">Savoir plus</button>
        </div>
        
</div>
<div><br>
<h1>Partenaires</h1><br>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <div class="item">
                    <div class="pad15">
                         <img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/pn1.jpg" width="100%" height="90%">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                          
                      <img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/par2.jpg" width="100%" height="90%">

                        
                       
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/par3.jpg" width="100%" height="90%">
                       
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                         <img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/pa5.jpg" width="100%" height="90%">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                         <img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/par4.jpg" width="100%" height="90%">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                         <img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/femme.jpg" width="100%" height="90%">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                         <img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/pn3.jpg" width="100%" height="90%">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                         <img class="img-gallery modal-img" alt="" sizes="80%" src="public/img/p5.jpg" width="100%" height="90%">
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                      <img src="public\img\pa1 width=">
                        <p class="lead">Multi Item Carousel</p>
                        <p>₹ 1</p>
                        <p>₹ 6000</p>
                        <p>50% off</p>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
  </div>
 
</div>
</div><br>


      <div>
       <h2>GALERIE PHOTOS</h2><br>


               <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="gallery">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">                            
                            <a title="playa" class="link-gallery">
                                <img class="img-gallery modal-img"  src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">                            
                            <a title="flores" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1515362778563-6a8d0e44bc0b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                <!--</div>-->
                <!--<div class="row">-->
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">                            
                            <a  title="cascada" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1444201983204-c43cbd584d93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">                                                        
                            <a title="rocas" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1549294413-26f195200c16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">                            
                            <a title="rocas" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1531003300514-1976481c521e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjUzMjV9&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                <!--</div>
                <div class="row">-->
                    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                        <div class="box">
                            <a title="cascada" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1488805990569-3c9e1d76d51c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                        <div class="box">                            
                            <a title="cancha en el bosque" class="link-gallery">
                                <img class="img-gallery" src="https://images.unsplash.com/photo-1560200353-ce0a76b1d438?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=50">
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
      <h1> Cartes <h1><br>
   </h3>
   <div class="row">
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="//placeimg.com/280/180/tech" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Card title <a href="#" class="float-right d-inline-flex share"><i class="fas fa-share-alt text-primary"></i></a></h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="//placeimg.com/280/180/tech" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Card title <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-sm btn-info float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card bg-light">
            <img class="card-img-top" src="//placeimg.com/280/180/tech" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title border-bottom pb-3">Card title <a href="#" class="float-right btn btn-sm btn-info d-inline-flex share"><i class="fas fa-share-alt"></i></a></h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="#" class="btn btn-sm btn-info float-right">Read more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>
   <hr>
   <a href="http://www.jquery2dotnet.com/" class="mx-auto pb-3 text-center">
   <img alt="jQuery 2 DotNet" class="rounded mx-auto d-block" height="52px;" src="http://1.bp.blogspot.com/-z27K-NYYSi4/Vsg9Mdl1A_I/AAAAAAAAEbo/SbDbMENIiVQ/s1600-r/jQuery2DotNet.png" style="display: block" width="208px; ">
   </a>
</div>
       </div>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="public/js/script.js"></script>
   </body>
</html>