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

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="public/js/script.js"></script>
   </body>
</html>