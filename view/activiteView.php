<?php
$title = "Activités";

ob_start();
if (!empty($_SESSION['activite'])) {


    ?>
    <div style="margin-top: 100px" class="container">
        <div class="banner" style="width:100%;">
            <img style="width:100%;" src="<?php echo ($_SESSION['activite']['img']); ?>" class="fit banner-image">
            <div class="banner-title">
                <h1><?php echo ($_SESSION['activite']['titre']); ?></h1>
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
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Nos activités
        </h3>
        <div class="row">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">Training</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=training">Nigerielles Training</a>
                        </h6>
                        <p class="card-text mb-auto">C’est le volet formation de l’organisation. En partenariat avec des institutions...</p>
                        <a class="ac-btn btn btn-outline-primary btn-sm" role="button" href="index.php?action=activite&activite=training">Lire plus</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/training.jpg" style="width: 200px; height: 250px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Business Club</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=business">Nigerielles Business Club</a>
                        </h6>
                        <p class="card-text mb-auto"> Notre organisation est composée de dynamiques femmes d’affaires et des femmes leaders en devenir...</p>
                        <a class="ac-btn btn btn-outline-success btn-sm" href="index.php?action=activite&activite=business">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/business-3639450_1920.jpg" style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card border-primary flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">Events</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=event">Nigerielles Events</a>
                        </h6>
                        <div class="mb-1 text-muted small">Nov 12</div>
                        <p class="card-text mb-auto">Nigerielles Events est le pôle événementiel de l’organisation. Tout au long de l’année...</p>
                        <a class=" ac-btn btn btn-outline-primary btn-sm" role="button" href="index.php?action=activite&activite=event">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/wedding.jpg" style="width: 200px; height: 250px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-success flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Le Magazine</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=magazin">Nigerielles Le Magazine </a>
                        </h6>
                        <div class="mb-1 text-muted small">Nov 11</div>
                        <p class="card-text mb-auto">Au sortir de chaque édition du Salon National de l’entrepreneuriat féminin, un magazine...</p>
                        <a class=" ac-btn btn btn-outline-success btn-sm" href="index.php?action=activite&activite=magazin">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/magazine.jpg" style="width: 200px; height: 250px;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">La Smart House</strong>
                        <h6 class="mb-0">
                            <a class="text-dark" href="index.php?action=activite&activite=maison">La Smart House : pépinière pour les femmes entrepreneures</a>
                        </h6>
                        <p class="card-text mb-auto">La Smart House de Nigerielles est le projet de la mise en place d’un centre incubateur pour femmes entrepreneures...</p>
                        <a class="ac-btn btn btn-outline-primary btn-sm" role="button" href="index.php?action=activite&activite=maison">Lire plus</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="public/img/houses.jpg" style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>


    </div>
<?php
}
$content = ob_get_clean();
require('template.php');
?>