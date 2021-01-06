<!DOCTYPE html>
<html lang="jp">
  <head>
      <meta charset="utf-8">
      <title>お問い合わせフォーム</title>
  </head>
  <body>
    <section>
      <h1>お問い合わせ</h1>
      <form method="post">
          <div>
            <input type="text" name="name" placeholder="お名前" value="">
          </div>
          <div>
            <input type="email" name="email" placeholder="メールアドレス" value="">
          </div>
          <div>
            <input type="email" name="email" placeholder="確認用メールアドレス" value="">
          </div>
          </div>
          <div>
            <input type="number" name="age" placeholder="年齢" value="">
          </div>
          </div>
          <div>
            <input type="radio" name="gender" placeholder="性別" value="">
          </div>
          <div>
            <input type="text" name="subject" placeholder="件名" value="">
          </div>
          <div>
            <textarea name="message" placeholder="本文"></textarea>
          </div>
          <button type="submit">送信</button>
      </form>
    </section>
  </body>
</html>