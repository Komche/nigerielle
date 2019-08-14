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
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-16">
                            <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories16.jpg">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories01.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories02.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories03.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories04.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories05.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories06.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories07.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories08.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories09.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories10.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories11.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories12.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories13.jpg"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories14.jpg"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/Thumb/falko_gallery_accessories15.jpg"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="16">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories16.jpg"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories01.jpg"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories02.jpg"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories03.jpg"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories04.jpg"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories05.jpg"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories06.jpg"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories07.jpg"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories08.jpg"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories09.jpg"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories10.jpg"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories11.jpg"></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories12.jpg"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories13.jpg"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories14.jpg"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="https://bufiles.blob.core.windows.net/co3628/gallery/accessories/falko_gallery_accessories15.jpg"></div>
                                </div>
                                <!-- Carousel nav -->
                                <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

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