<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset=utf-8">
    <title>確認</title>
  </head>
  <body>
    <?php
      session_start();

      if ($_POST['name'] === '') {
        $_SESSION['error'] = 'お名前を入力してください。';//エラーテキストをsessionに代入する
        header('Location: contact.php');//header関数でリダイレクト処理を行う
        exit;//違うページにいくため、それ以後の処理を行わないように処理を終わらせる
      }

      // htmlspecialcharsについて
      // XXS（クロスサイトスクリプティング）対策。個人情報やセキュリティ上重要な情報を抜き取るプログラムだったり、同じリンクでも悪意のあるサイトにリンクするなど、悪意のあるプログラムが仕込まれないようにする。
      // エスケープ処理。htmlで特別な意味を持つ記号(“<“とか”>”とか…)を普通の文字列として扱う(=HTMLエンティティ化)という処理
      // フォームなどでユーザーが悪意のあるスクリプトを送信しようとするのを防具ため、セキュリティ上必須
      if (isset($_POST['name'])) {
        $_SESSION['name'] = htmlspecialchars($_POST['name']);
      }
      $name=($_SESSION['name']);
      $email=htmlspecialchars($_POST['email']);
      $checkEmail=htmlspecialchars($_POST['checkEmail']);
      $age=htmlspecialchars($_POST['age']);
      $gender=htmlspecialchars($_POST['gender']);
      $subject=htmlspecialchars($_POST['subject']);
      $message=htmlspecialchars($_POST['message']);
    ?>
    <h1>問い合わせ内容</h1>
    <form action="done.php" method="post" novalidate>
      <table>
        <tr>
          <td>名前</td>
          <td><?php echo $name; ?></td>
        </tr>
        <tr>
          <td>メールアドレス</td>
          <td><?php echo $email; ?></td>
        </tr>
        <tr>
          <td>確認表メールアドレス</td>
          <td><?php echo $checkEmail; ?></td>
        </tr>
        <tr>
          <td>年齢</td>
          <td><?php echo $age; ?></td>
        </tr>
        <tr>
          <td>性別</td>
          <td><?php echo $gender; ?></td>
        </tr>
        <tr>
          <td>件名</td>
          <td><?php echo $subject; ?></td>
        </tr>
        <tr>
          <td>問い合わせ内容</td>
          <td><?php echo $message; ?></td>
        </tr>
      </table>
      <a href="contact.php">入力画面へ戻る</a>
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="checkEmail" value="<?php echo $checkEmail; ?>">
      <input type="hidden" name="age" value="<?php echo $age; ?>">
      <input type="hidden" name="gender" value="<?php echo $gender; ?>">
      <input type="hidden" name="subject" value="<?php echo $subject; ?>">
      <input type="hidden" name="message" value="<?php echo $message; ?>">
      <input type="submit" value="送信">
    </form>
  </body>
</html>