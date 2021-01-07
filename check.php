<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset=utf-8">
    <title>確認</title>
  </head>
  <body>
    <?php
      session_start();

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
    <form action="done.php" method="post">
      <table>
        <tr>
          <td>名前</td>
          <td><?php echo $_SESSION['name']; ?></td>
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
      <input type="submit" value="送信">
    </form>
  </body>
</html>