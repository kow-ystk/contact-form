<?php
  // Twigライブラリの読み込み
  // autoload.phpを読み込むことでvendorディレクトリ以下のライブラリをアプリケーション内で使用可能になる
  require_once './vendor/autoload.php';

  // Twigを使用するテンプレートを読み込む
  $loader = new \Twig\Loader\FilesystemLoader('./templates');
  $twig = new \Twig\Environment($loader, [
    'cache' => './cache/compilation_cache',
  ]);

  // ③テンプレートのレンダリング
  $template = $twig->load('contact_twig.html');
  $twig->addGlobal("session", $_SESSION);
  echo $twig->render('contact_twig.html', array('message' => 'Hello World!'));
  // まずmessageをcontact_twig.htmlに表出されるようにする
  // それができたらPOSTされた値を表出できるようにする
?>