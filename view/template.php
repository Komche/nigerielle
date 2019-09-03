<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
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
            <li class="acc"><a href="index.php">Accueil</a></li>
            <li><a href="index.php?action=presentation">Présentation</a></li>
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

    <?php echo $content ?>
    <!-- Footer -->
    <section id="footer">
      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Liens</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>A propos</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Aide</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Services</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Liens</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>A propos</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Aide</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Services</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Liens</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Accueil</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>A propos</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Aide</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Services</a></li>
              <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
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
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
            <p><u><a href="https://www.nationaltransaction.com/">Lorem ipsum dolor sit amet</a></u> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel tincidunt nunc.</p>
            <p class="h6">&copy Tout droit reservé.<a class="text-green ml-2" href="http://www.nigerielle.ne" target="_blank">Nigerielle</a></p>
          </div>
          </hr>
        </div>
      </div>
    </section>
    <!-- ./Footer -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="public/js/script.js"></script>
</body>

</html>