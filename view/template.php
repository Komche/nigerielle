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
                     <li><a href="#">Accueil</a></li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navdrop" role="button" data-toggle="dropdown" data-hover="dropdown">Services</a>
                        <div class="dropdown-menu" aria-labelledby="navdrop">
                            <a href="#" class="dropdown-item">Service1</a>
                            <a href="#" class="dropdown-item">Service2</a>
                            <a href="#" class="dropdown-item">Service3</a>
                        </div>
                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prèsentations <span class="caret"></span></a>				
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Objectif</a></li>
                            <li><a href="#">Valeur</a></li>
                        </ul>                
                    </li>
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
         <div class="content">
            <p>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
         </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="public/js/script.js"></script>
   </body>
</html>