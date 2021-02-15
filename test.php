<?php
  require_once './vendor/autoload.php';
  $loader = new \Twig\Loader\FilesystemLoader('./templates');
  $twig = new \Twig\Environment($loader, [
    'cache' => './cache/compilation_cache',
  ]);
  $template = $twig->load('test.html');
  echo $template->render(array('name' => 'testText'));
?>