<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset=utf-8">
    <title>確認</title>
  </head>
  <body>
    <h1>問い合わせ内容</h1>
    <form action="mailto.php" method="post">
      <table>
      <tr>
        <td>名前</td>
        <td><?php echo $_POST["name"]; ?></td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td><?php echo $_POST["mail"]; ?></td>
      </tr>
      <tr>
        <td>問い合わせ内容</td>
        <td><?php echo $_POST["inquiry"]; ?></td>
      </tr>
      </table>
      <input type="submit" value="送信" />
    </form>
  </body>
</html>