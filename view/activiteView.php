<?php 
    $title = "Activté";

    ob_start();
?>
<div style="margin-top: 100px" class="container">
    <div class="banner" style="width:100%;">
        <img style="width:100%;" src="<?php echo($_SESSION['activite']['img']); ?>" class="fit banner-image" >
        <div class="banner-title">
            <h1><?php echo($_SESSION['activite']['titre']); ?></h1>
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
    <?php echo($_SESSION['activite']['description']); ?>
    </div>
    </div>
</div>

<?php 
    $content = ob_get_clean();
    require('template.php');
?>