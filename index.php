<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('view'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
	'cache' => false
));
$template = $twig->loadTemplate('pageBootstrap.twig.html');
if (isset($_GET['message'])){
	$message = $_GET['message'];
	echo $_GET['message'];
} else {
	$message = 'Hello world';
}
echo $template->render(array(
	'titre' => 'Twig page','bootstrap'=>'ok', 'message'=>$message
    ));
	//kadiev
	//commentaire master
?>