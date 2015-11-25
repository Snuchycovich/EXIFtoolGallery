<?php
// Ensure we have session
if (session_id() === "") {
    session_start();
}

use App\Controller\ImagesController;
require_once "app/Controller/ImagesController.php";

$action = null;
if(isset($_GET['a']))
    $action = $_GET['a'];
$imagesController = new ImagesController($action);
$fragment = $imagesController->dispatch();

require_once "app/View/fragments/header.html";
echo $fragment;
require_once "app/View/fragments/footer.html";
