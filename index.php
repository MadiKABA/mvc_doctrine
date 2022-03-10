<?php
    require_once "config/autoload.php";
    use src\controller\RegionController;
    $regiondb=new RegionController();
    $regiondb->add()
?>