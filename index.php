<?php
if (isset($_GET['action'])) {
    extract($_GET);
    if ($action = 'presentation') {
        require_once('view/presentationView.php');
    }
}else {
    require_once('view/homeView.php');    
}