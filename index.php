<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>

<?php 
    $app = JFactory::getApplication();
    $menu = $app->getMenu();

    if ($menu->getActive() == $menu->getDefault()) {
        include_once 'layouts/base.php';
    }
    else{
        include_once 'layouts/page.php';
    }
?>