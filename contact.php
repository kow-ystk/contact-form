<!DOCTYPE html>
<html lang="jp">
  <head>
      <meta charset="utf-8">
      <title>お問い合わせフォーム</title>
  </head>
  <body>
    <section>
      <h1>お問い合わせ</h1>
      <form method="post" name="contactForm">
          <div>
            <label for="name">名前</label>
            <input type="text" name="name" placeholder="お名前" value="">
          </div>
          <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" placeholder="メールアドレス" value="">
          </div>
          <div>
            <label for="email">確認用メールアドレス</label>
            <input type="email" name="email" placeholder="確認用メールアドレス" value="">
          </div>
          </div>
          <div>
            <label for="age">年齢</label>
            <input type="number" name="age" placeholder="年齢を数字で入力" value="">
          </div>
          </div>
          <div>
            <p>性別</p>
            <input type="radio" name="gender" value="1" id="male">
            <label for="male">男性</label>
            <input type="radio" name="gender" value="2" id="female">
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
          <button type="submit">送信</button>
      </form>
    </section>
  </body>
</html>