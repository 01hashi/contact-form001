<?php print_r($contact) ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>確認テスト</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/contacts" method="post">
      @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" first_name="first_name" placeholder="{{ $contact['first_name'] }}" readonly />
                <input type="text" last_name="last_name" placeholder="{{ $contact['last_name'] }}" readonly />
              </td>
            </tr>
            <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly />男性
                <input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly />女性
                <input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly />その他
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
              <input type="tel1" name="tel1" value="{{ $contact['tel1'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="address" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="building" name="building" value="{{ $contact['building'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                <select id="example" name="example">
                <option value="option1">選択してください</option>
                <option value="option1">商品のお届けについて</option>
                <option value="option1">商品の交換について</option>
                <option value="option1">商品トラブル</option>
                <option value="option1">ショップへのお問い合わせ</option>
                <option value="option1">その他</option>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>