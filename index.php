<?php
require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('view'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
	'cache' => false
));
$template = $twig->loadTemplate('model.twig.html');
echo $template->render(array(
	'titre' => 'Twig page'
    ));
?>