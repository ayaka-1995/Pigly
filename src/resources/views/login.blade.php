<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contact-form" action="/contacts/register2" method="get">
        <div class="contact-form__form">
            <div class="contact-form__heading">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
            </div>
            <div class="contact-form__step">
                <p>ログイン</p>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input">
                            <input type="email" name="email" placeholder="メールアドレスを入力">
                        </div>
                        <div class="form__error">
                            メールアドレスを入力してください
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">パスワード</span>
                    </div>
                    <div class="form__input">
                        <input type="password" name="password" placeholder="パスワードを入力">
                    </div>
                    <div class="form__error">
                        パスワードを入力してください
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">ログイン</button>
                    <p class="login-link"><a href="#">アカウント作成はこちら</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>