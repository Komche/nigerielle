<?php
$title = "Missions";
ob_start();
?>
<div style="background-image: url(public/img/n13.jpg); background-repeat: no-repeat;background-size: 1500px; height: 400px" class=" mx-auto text-center">
    <div class="section-title mb-100">
        <h4>Nos Objectifs</h4>
    </div>
</div>
<div class="row blog">
    <div class="col-md-12">
        <div class="container">
            <h2 class="text-center">Nos Objectifs</h2>
        <p class="text-justify desc">
        L’objectif principal de l’association Nigerielles est de promouvoir et d’appuyer l’entrepreneuriat et le leadership féminin au Niger à travers plusieurs projets dont celui de la mise en place d’un centre incubateur spécialement dédié aux entreprises des femmes et la tenue du premier salon de l’entreprenariat féminin au Niger. En ce sens, nous visons à :
        <ol class="list">
            <li>Encourager la création d’entreprise par les femmes, vulgariser l’entreprenariat féminin et Promouvoir l’image de la Femme Chef d’Entreprise nigérienne au Niger et à l’étranger</li>
            <li>Orienter, encadrer, informer et assister la Femme Chef d’Entreprise dans la recherche de la compétitivité.</li>
            <li>Créer un réseau de femmes entrepreneures, qui permettra l’échange de bonnes pratiques, d’expériences, et mutualiser les moyens et les compétences</li>
            <li>Mettre en place un centre incubateur des entreprises féminines au Niger afin d’accompagner les jeunes femmes porteuses de projets à se lancer dans l’entreprenariat.</li>
            <li>Initier et mettre en œuvre tous projets ou actions visant le développement des compétences professionnelles des membres, la mise à disposition à l’attention des membres de tout dispositif offrant une assistance technique, une formation et information et de toutes actions contribuant au développement de leurs business</li>
            <li>Développer des partenariats sur le plan national et international avec différentes associations, entreprises et institutions portant sur des projets et actions qui sont susceptibles de contribuer au développement des femmes entrepreneures et de leurs entreprises.</li>
        </ol>
</p>
        </div>
        <?php
        $content = ob_get_clean();
        require('template.php');
        ?>