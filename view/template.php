<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="public/vendor/slideshow/src/css/slideWiz.css">
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
        </div>
        <div class="menu">
          <ul class="navb">
            <li class="acc"><a href="index.php"><img src="public/img/nigerielle1.png" width="140px" height="75px" alt="logo nigerielle"></a></li>
            <li class="acc"><a class="animate" href="index.php">Accueil</a></li>
            <li><a class="animate" href="#">Présentation</a>
              <ul class ="sub">
              <li><a class="animate" href="#">Vision</a></li> 
                <li><a class="animate" href="#">Objectif</a></li>
                <li><a class="animate" href="#">Valeur</a></li>
                </ul>
            </li>
            <li><a class="animate" href="index.php?action=activite">Activités</a></li>
            <li><a class="animate" href="#">Actualités</a></li>
            <li><a class="animate" href="#">Galerie</a></li>
            <li><a class="animate" href="#">Contact</a></li>
            <li>
              <div class="search">
                <input type="text" class="form-control input-sm" maxlength="64" placeholder="rechercher" />
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-search"></i></button>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <?php echo $content ?>
    <!-- Footer -->
    <section id="footer">
      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-12 col-sm-3 col-md-4">
            <h5>Nigerielles</h5>
            <p style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel felis maximus nibh tincidunt porta. Fusce tincidunt erat laoreet dolor aliquet porta.</p>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-4">
            <h5>Adresse</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-map-marker"></i>Niamey, Niamey</a></li>
              <li><a href="javascript:void();"><i class="fa fa-phone"></i>+227 96 26 76 90</a></li>
              <li><a href="javascript:void();"><i class="fa fa-envelope"></i><a href="Contact@nigerielles.ne">Contact@nigerielles.ne</a></li>
              
            </ul>
            <ul class="list-unstyled list-inline social text-left">
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-4">
            <h5>Newsletter</h5>
	<div class="row justify-content-center">
		<div class="col-xs-12 pb-5">


                    <!--Form with header-->

                    <form action="#" method="post">
                        <div style="height: 370px" class="card border-success rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-success text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contactez-nous</h3>
                                    <p class="m-0">Vous pouvez nous contacter à partir du formulaire</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-success"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-success"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="Votre adresse mail" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-success"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Votre message" required></textarea>
                                    </div>
                                </div>

                                <div style="position: relative" class="text-center">
                                    <input type="submit" value="Envoyer" class="btn btn-success btn-block rounded-0">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->
	</div>
</div>
          </div>
          
        <!--<div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
          </hr>
        </div>-->
        <div style="width: 100%" class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
            <p class="text-center">Développé par <u><a href="www.novatech.ne">NOVATECH</a></u> </p>
            <p class="h6">&copy Tout droit reservé.<a class="text-green ml-2" href="http://www.nigerielle.ne" target="_blank">Nigerielles 2019</a></p>
          </div>
          </hr>
        </div>
      </div>
    </section>
    <!-- ./Footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="public/vendor/slideshow/src/js/slideWiz.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="public/js/script.js"></script>
</body>

</html>