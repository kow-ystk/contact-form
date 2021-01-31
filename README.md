## 学習の進め方
- バックエンド言語の選択 > **PHP**
- サーバーの用意が必要? > ローカルで動作させるため、不要。
- DBも不要。DBに保存する直前まで
- CSSスタイリング > appearance
- HTML > FORM > バックエンド > DB
  - まずは、Form送信してPHPで扱うまで
    - お問い合わせフォーム
      - 実装内容
        - 入力画面、確認画面、完了画面
        - 名前(text) 最大20文字
        - メールアドレス(email)
        - 確認用メールアドレス(email)
        - 年齢(number)
        - 性別(radio)
      - トピック
        - method, action, name, value などの属性どうするか
        - バリデーション
        - セキュリティ（XSS, SQLInjection, CSRF）
        - セッション と Cookie
        - ダブルサブミットの禁止
        - アクセシビリティ: tabindex, wai-aria
        - 遷移確認
  - 余裕があれば、DB保存
## 作業の進め方
- PHPをインストールする (MAMP)
- HTMLをつくる
- MAMPで作ったHTMLを表示する
- FormでPHPにポストする
- PHP でポストされた値を見てみる
## 軌道のさせ方
- アプリケーションからMAMPを軌道
- 右上のStart (Server)をクリック
- http://localhost/contact.phpへアクセス
## 参考リンク
### 環境構築
- Qiita: MacにPHP環境を構築する（MAMP）
https://qiita.com/kutarou197/items/9ea4c7539f869a2959d2
- TECH ACADEMY: 誰でもできる！MAMPのインストール方法【初心者向け】
https://techacademy.jp/magazine/5102
### コーディング
- 【PHP】コンタクトフォームの作り方
https://codeforfun.jp/php-contact-form-1/
https://codeforfun.jp/php-contact-form-2/
- PHPのhtmlspecialcharsでのHTMLエンティティ化と、一文字に簡略化方法
https://www.flatflag.nir87.com/htmlspecialchars-555
- phpでメールフォームをつくる①
https://blog.tabme.me/?p=38
### セッション保持について
- 侍エンジニア: 【PHP入門】徹底解説！PHPでセッションを使う方法～基本から応用まで
https://www.sejuku.net/blog/25276
- 【PHP】フォームを作ってセッションを理解する（データを引き継ぐ方法）
https://michiweb.net/php-form/

## 1/7【お問い合わせフォーム: FBメモ】
- formにnovalidateをつける
  - HTMLのデフォルトのバリデートを禁止する
- 完了時に送信した内容を表示させる
- checkの内容をdoneに渡す記述を追記する
  - check.phpのformの中にinputを入れておかないと、doneに渡せない
  - input type="hidden"とかで調べる
- 戻るときもaタグではなくmethodをpost
- 入力値の保持のためにsessionを使わない(sessionで保持するものは最小限にする)
- htmlspecial XSS対策
  - 文字コードを明示的にいれておく。(シングルクォートなどでの脆弱性対策)
- PHPのテンプレートエンジンを使ってみる
  - twig
## 備考
- aaa
