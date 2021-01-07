<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset=utf-8">
    <title>確認</title>
  </head>
  <body>
    <?php
      $name=$_POST['name'];
      $email=$_POST['email'];
      $checkEmail=$_POST['checkEmail'];
      $age=$_POST['age'];
      $gender=$_POST['gender'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
    ?>
    <h1>問い合わせ内容</h1>
    <form action="mailto.php" method="post">
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
      <input type="submit" value="送信">
    </form>
  </body>
</html>