<?php
$title = "Missions";
ob_start();
?>
<div style="background-image: url(public/img/n9.JPG); background-repeat: no-repeat;background-size: 1500px; height: 700px" class=" mx-auto text-center">
    <div class="section-title mb-100">
        <h4>Nos valeurs</h4>
    </div>
</div>
<div class="row blog">
    <div class="col-md-12">
    <div id="myPageContent" class="container-fluid">
<section id="home">
	
	

	
<div id="textSlider" class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 iamCol">
						<p>Nos</p>
						<p>Valeurs</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 slideCol">
						<div class="scroller">
							<div class="inner">
								<p>Crédibilité</p>
								<p>Confiance</p>
								<p>Professionnalisme</p>
							</div>
						</div>
					</div>
	
				</div>
	
	
	
	
	
</section>
</div>
        <?php
        $content = ob_get_clean();
        require('template.php');
        ?>