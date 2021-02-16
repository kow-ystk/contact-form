<!DOCTYPE html>
<html lang="jp">
  <head>
      <meta charset="utf-8">
      <title>お問い合わせフォーム</title>
  </head>
  <body>

    <!-- セッション(コンピュータのサーバー側に一時的にデータを保存する仕組み)を開始させる -->
    <?php session_start(); ?>

    <section>
      <h1>お問い合わせ</h1>
      <!--
        method：データを送信する方法の指定 送り方にはGETとPOSTがある
        GETはURLに付加してデータを送るので、内容が丸見え
        個人情報などを含む場合はPOST
      -->
      <!-- action：フォームに入力された値を渡す先を指定 -->
      <!-- novalidate：フォームの入力内容の検証を無効化 -->
      <form method="post" name="contactForm" action="check.php" novalidate>

          <div>
            <label for="name">名前</label>
            <input type="text" name="name" placeholder="お名前" value="<?php if(isset($name)){echo $name;} ?>" maxlength='20'>
            <!-- もしセッションにデータが入っていたら、そのデータを出力する -->
            <p><?php if(isset($_SESSION['error'])){echo $_SESSION['error'];} ?></p>
          </div>

          <div>
            <label for="email">メールアドレス</label>
            <!-- name属性の値と入力されたデータ（またはvalue属性の値）がセットでプログラム側に送信される -->
            <input type="email" name="email" placeholder="メールアドレス" value="">
          </div>

          <div>
            <label for="checkEmail">確認用メールアドレス</label>
            <input type="email" name="checkEmail" placeholder="確認用メールアドレス" value="">
          </div>

          <div>
            <label for="age">年齢</label>
            <input type="number" name="age" placeholder="年齢を数字で入力" value="">
          </div>

          <div>
            <p>性別</p>
            <input type="radio" name="gender" value="male" id="male">
            <!-- labelのfor属性にinputのid属性の値を入れ、フォーム部品とラベルを関連付け。 -->
            <!-- labelの文字をクリックしても、選択が有効になる -->
            <label for="male">男性</label>
            <!-- type属性でラジオボタンを指定 -->
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">女性</label>
          </div>

          <div>
            <label for="subject">件名</label>
            <input type="text" name="subject" placeholder="件名" value="">
          </div>

          <div>
            <label for="message">本文</label>
            <textarea name="message" placeholder="本文"></textarea>
          </div>

          <!-- フォーム内容をプログラム側に送信するためのボタン -->
          <!-- ボタンを押すと<form>タグ内にある各フォーム関連タグをすべてまとめて送信 -->
          <button type="submit">送信</button>

      </form>
    </section>
    <!-- 現在のセッションに関連づけられたデータを破棄する -->
    <?php session_destroy(); ?>
  </body>
</html>