<?php
$title = "Missions";
ob_start();
?>
<div style="background-image: url(public/img/n13.jpg); background-repeat: no-repeat;background-size: 1500px; height: 400px" class=" mx-auto text-center">
    <div class="section-title mb-100">
        <h4>Notre mission</h4>
    </div>
</div>
<div class="row blog">
    <div class="col-md-12">
        <div class="container">
            <h2 class="text-center">Notre mission</h2>
        <p class="text-justify desc">
        Nigerielles a pour mission d’accompagner les femmes nigériennes, qu’elles soient porteuses de projets ou déjà chefs d’entreprises, dans l’atteinte de leurs objectifs professionnels. Nous les amènerons à gagner en confiance, en assurance et en leadership ainsi qu’à élaborer des stratégies gagnantes pour leurs entreprises, en leur créant un cadre propice de rencontres et d’échanges selon leurs centres d’intérêt. Nous souhaitons contribuer à une plus grande mixité au niveau économique et sociétal pour faire face aux enjeux de compétitivité et de performance, en permettant aux femmes d’y prendre la place qui leur revient.
Notre volonté est de permettre à toutes les femmes nigériennes d’oser. Oser entreprendre sa vie, oser affronter les autres, oser s’affronter soi-même, oser s’affirmer, avoir confiance en soi, en son influence et en ses capacités. Oser la Différence.
        </p>
        </div>
        <?php
        $content = ob_get_clean();
        require('template.php');
        ?>