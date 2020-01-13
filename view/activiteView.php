<?php
$title = "Activités";
ob_start();
if (!empty($_SESSION['activite'])) {
    ?>
    <div style="margin-top: 100px" class="container">
        <div class="banner" style="width:100%;">
            <img style="width:100%;" src="<?php echo ($_SESSION['activite']['img']); ?>" class="fit banner-image">
            <div class="banner-title">
                <h1><?php echo ($_SESSION['activités']['titre']); ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!--<div class="element-nav">
        <div class="row">
            <div class="tab-option col-md-3 text-center">Option 1</div>
            <div class="tab-option col-md-3 text-center">Option 1</div>
            <div class="tab-option col-md-3 text-center">Option 1</div>
            <div class="tab-option col-md-3 text-center">Option 1</div>
        </div>
    </div>-->
            <div class="content col-md-10" style="font-size: 16px">
                <?php echo ($_SESSION['activite']['description']); ?>
            </div>
        </div>
    </div>
<?php
} else {
    ?>
    <div class="container">
        <h3 class="pb-3 mb-4 text-center border-bottom">
            Nos activités
        </h3>
        <div class="row">
            <div style="margin-bottom: 20px" class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Training</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=training">Nigerielles Training</a>
                        </h6>
                        <p class="card-text mb-auto">C’est le volet formation de l’organisation. En partenariat avec des institutions...</p>
                        <a class="ac-btn btn btn-outline-success btn-sm" role="button" href="index.php?action=activite&activite=training">Lire plus</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/img.jpg" style="width: 200px; height: 250px;">
                </div>
            </div>
            <div style="margin-bottom: 20px" class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Business Club</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=business">Nigerielles Business Club</a>
                        </h6>
                        <p class="card-text mb-auto"> Notre organisation est composée de dynamiques femmes d’affaires et des femmes leaders en devenir...</p>
                        <a class="ac-btn btn btn-outline-success btn-sm" href="index.php?action=activite&activite=business">Lire plus</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/n11.jpg" style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div style="margin-bottom: 20px" class="col-md-6">
                <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Events</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=event">Nigerielles Events</a>
                        </h6>
                        <div class="mb-1 text-muted small">Nov 12</div>
                        <p class="card-text mb-auto">Nigerielles Events est le pôle événementiel de l’organisation. Tout au long de l’année...</p>
                        <a class=" ac-btn btn btn-outline-success btn-sm" role="button" href="index.php?action=activite&activite=event">Lire plus</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/femme.JPG" style="width: 200px; height: 250px;">
                </div>
            </div>
            <div style="margin-bottom: 20px" class="col-md-6">
                <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Le Magazine</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=magazin">Nigerielles Le Magazine </a>
                        </h6>
                        <div class="mb-1 text-muted small">Nov 11</div>
                        <p class="card-text mb-auto">Au sortir de chaque édition du Salon National de l’entrepreneuriat féminin, un magazine...</p>
                        <a class=" ac-btn btn btn-outline-success btn-sm" href="index.php?action=activite&activite=magazin">Lire plus</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/n4.JPG" style="width: 200px; height: 250px;">
                </div>
            </div>
            <div class="col-md-3"></div>
            <div style="margin-bottom: 20px" class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">La Smart House</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=maison">La Smart House : pépinière pour les femmes entrepreneures</a>
                        </h6>
                        <p class="card-text mb-auto">La Smart House de Nigerielles est le projet de la mise en place d’un centre incubateur pour femmes entrepreneures...</p>
                        <a class="ac-btn btn btn-outline-success btn-sm" role="button" href="index.php?action=activite&activite=maison">Lire plus</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/n5.JPG" style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>


    </div>
<?php
}
$content = ob_get_clean();
require('template.php');
?>