<?php
session_start();
if (isset($_GET['action'])) {
    extract($_GET);
    if ($action == 'presentation') {
        require_once('view/presentationView.php');
    }elseif ($action == 'activite') {
        
        if (isset($_GET['activite'])) {
            extract($_GET);
            if ($activite=='training') {
                $_SESSION['activite']['img'] = 'public/img/training.jpg' ;
                $_SESSION['activite']['titre'] = 'Nigerielles Training' ;
                $_SESSION['activite']['description'] = "<p>
                C’est le volet formation de l’organisation. En partenariat avec des institutions et des cabinets de formation de la place, Nigerielles s’engage à former ‘’autrement’’ les femmes entrepreneurs, les porteuses de projets ou leaders du Niger dans toutes les régions. Il s’agit principalement des formations de développement personnel et professionnel, des formations techniques et managériales en entrepreneuriat et création d’entreprise et des coachings personnalisés. A travers ces formations, nous souhaiterons rehausser le nombre de femmes entrepreneurs dynamiques avec des idées innovantes et un système de gestion inégalé en vue de pérenniser les activités des femmes.
                </p>";
            }elseif ($activite='business') {
                $_SESSION['activite']['img'] = 'public/img/business.jpg' ;
                $_SESSION['activite']['titre'] = 'Nigerielles Business Club' ;
                $_SESSION['activite']['description'] = "<p>
                Notre organisation est composée de dynamiques femmes d’affaires et des femmes leaders en devenir, regroupées en business club. Ces femmes se retrouvent chaque mois autour de diverses activités à savoir des déjeuners ou rendez-vous d’affaires, des activités diverses allant des dons aux orphelins ou femmes défavorisées, a des activités de développement communautaire. Elles discutent, échangent des idées de développement durable, s’entraident, se soutiennent mais surtout elles forment entre elles un réseau de clients/prestataires au sein duquel chaque femme entrepreneure est sollicitée.  </p>";
            }
        }
        require('view/activiteView.php');
    }
}else {
    require_once('view/homeView.php');    
}