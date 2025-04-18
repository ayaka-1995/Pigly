<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contact-form">
        <div class="contact-form__form">
            <div class="contact-form__heading">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
            </div>
            <div class="contact-form__step">
                <p>STEP1 アカウント情報の登録</p>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input">
                            <input type="text" name="name" placeholder="名前を入力" >
                        </div>
                        <div class="form__error">
                            名前を入力してください
                        </div>
                    </div>
                </div>
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
                    <button class="form__button-submit" type="submit">次に進む</button>
                    <p class="login-link"><a href="#">ログインはこちら</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>