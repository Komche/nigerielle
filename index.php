<?php
session_start();
unset($_SESSION['activite']);
if (isset($_GET['action'])) {
    extract($_GET);
    if ($action == 'presentation') {
        require('view/presentationView.php');
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
            }elseif ($activite=='business') {
                $_SESSION['activite']['img'] = 'public/img/business-3639450_1920.jpg' ;
                $_SESSION['activite']['titre'] = 'Nigerielles Business Club' ;
                $_SESSION['activite']['description'] = "<p>
                Notre organisation est composée de dynamiques femmes d’affaires et des femmes leaders en devenir, regroupées en business club. Ces femmes se retrouvent chaque mois autour de diverses activités à savoir des déjeuners ou rendez-vous d’affaires, des activités diverses allant des dons aux orphelins ou femmes défavorisées, a des activités de développement communautaire. Elles discutent, échangent des idées de développement durable, s’entraident, se soutiennent mais surtout elles forment entre elles un réseau de clients/prestataires au sein duquel chaque femme entrepreneure est sollicitée. 
                 </p>";
            }elseif ($activite=='event') {
                $_SESSION['activite']['img'] = 'public/img/wedding.jpg' ;
                $_SESSION['activite']['titre'] = 'Nigerielles Events' ;
                $_SESSION['activite']['description'] = "<p>
                Nigerielles Events est le pôle événementiel de l’organisation. Tout au long de l’année, nous organisons des séries d’événements d’envergure nationale et sous-régionale pour créer un cadre d’échange et de partenariat entre femmes entrepreneures et potentiels partenaires/investisseurs. Notre principal cible étant les femmes, nous menons des campagnes de sensibilisations aux femmes de toutes les couches sociales, mais aussi des campagnes de leadership adressées aux jeunes filles pour les motiver à donner le meilleur d’elles-mêmes dans la société, le tout commençant par une meilleure scolarisation. Notre événement phare de l’année est le Salon National de l’Entrepreneuriat Féminin organisé en fin d’année qui mobilise entre 3.000 et 5.000 visiteurs à chaque édition. 
                 </p>";
            }elseif ($activite=='magazine') {
                $_SESSION['activite']['img'] = 'public/img/magazine.jpg' ;
                $_SESSION['activite']['titre'] = 'Nigerielles Le Magazine ' ;
                $_SESSION['activite']['description'] = "<p>
                Au sortir de chaque édition du Salon National de l’entrepreneuriat féminin, un magazine d’éducation entrepreneuriale, est conçu en format papier et électronique pour édifier la population sur les différents acteurs de l’entrepreneuriat féminin, mais aussi le déroulé du Salon. Le magazine récence aussi toutes les activités organisées par des femmes nigériennes tout au long de l’année en vue de les promouvoir. Il s’agit-là, de vulgariser l’entrepreneuriat féminin à travers un magazine au design inégalé pour séduire le lecteur et attirer les potentiels partenaires.
                </p>";
            }elseif ($activite=='house') {
                $_SESSION['activite']['img'] = 'public/img/houses.jpg' ;
                $_SESSION['activite']['titre'] = 'La Smart House : pépinière pour les femmes entrepreneures' ;
                $_SESSION['activite']['description'] = "<p>
                La Smart House de Nigerielles est le projet de la mise en place d’un centre incubateur pour femmes entrepreneures courant 2019. Il s’agira de la réalisation et la concrétisation de toutes les actions menées par Nigerielles pour le développement des compétences des femmes. Le centre accueillera pour la première année 25 femmes avec des entreprises ou des projets d’entreprises innovants à fort impact sociétal. En partenariat avec d’autres centres du Niger et de la sous-région, nous relèverons les défis de l’entreprenariat féminin en Afrique afin d’enrichir le potentiel personnel et entrepreneurial des femmes. 
                </p>";
            }
        }
        require('view/activiteView.php');
    }
} else {
    require_once('view/homeView.php');    
}