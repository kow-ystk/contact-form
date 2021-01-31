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
## 備考
