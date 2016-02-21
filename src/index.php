<?php


/**
*
*/
require_once '../vendor/autoload.php';
require_once 'class/classUser.php';

/**
 * initalization twig
 */
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'debug' => true,
    // ...
));
$twig->addExtension(new Twig_Extension_Debug());


$user = new user('Adam',18);

echo $user->getName().' ';
echo $user->getAge();

$userStr =  serialize($user);
echo $userStr;
echo "<br>";
var_dump(unserialize($userStr));
echo "<br>";

$title = 'index';
 echo $twig->render('home.html.twig', array('title' => $title,'user'=>$user));



?>