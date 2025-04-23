<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register2.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Serif+JP:wght@900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contact-form" action="/contacts/register2" method="post">
        @csrf
        <div class="contact-form__form">
            <div class="contact-form__heading">
            <h1>PiGLy</h1>
            <h2>新規会員登録</h2>
            </div>
            <div class="contact-form__step">
                <p>STEP2 体重データの入力</p>
            </div>
            <form class="form" action="{{ route('register.step2.post') }}" method="POST">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">現在の体重</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input">
                            <input type="text" name="name" placeholder="現在の体重を入力" >kg
                        </div>
                        <div class="form__error">
                            現在の体重を入力してください<br />
                            4桁までの数字で入力してください<br />
                            小数点は1桁で入力してください
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">目標の体重</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input">
                            <input type="email" name="email" placeholder="目標の体重を入力">kg
                        </div>
                        <div class="form__error">
                            目標の体重を入力してください<br />
                            4桁までの数字で入力してください<br />
                            小数点は1桁で入力してください
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">アカウント作成</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>