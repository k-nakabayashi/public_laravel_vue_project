<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        <link href="{{ asset('css/reboot.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body id="top">
        <header class="l-header">
            <div class="top-Nav u-container">
                <nav class="u-row">

                    <div class="u-col-1 tops-Nav__img">
                      <figure class="u-row-center u-h-100">
                            <img src="{{ asset('images/icons/main-logo.png')}}" alt="logo:main">
                        </figure>
                    </div>

                    <div class="tops-Nav__actions u-col-2">
                        <div class="u-row u-h-100">
                        @auth
                            <a class="menu u-col-6" href="{{ url('/home') }}"><span>Home</span></a>
                        @else
                            <p class="menu u-col-6 js-Modal__btn--register"><span>新規登録</span></p>

                            <p class="menu u-col-6 js-Modal__btn--login"><span>ログイン</span></p>
                        @endauth
                        </div>
                    </div>
                </nav>
            </div>


        </header>
        <div class="u-mt-40" style="height: 80px;"></div>

        <div class="c-modal-Form register u-mx-a js-Modal">
            <dl class="u-rel u-p-40" style="z-index: 1;">
                <i class="cancel fas fa-times js-Modal__close"></i>
                <dt>神ったー</dt>
                <dt class="u-mt-16 u-mb-40">新規登録</dt>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
        
                        <div class="c-modal-Formu-ch-block u-ch-w1 u-ch-mt-16 ">
                            <input type="text" placeholder="名前" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="text" name="company" placeholder="会社名">
                            <input type="email" placeholder="メールアドレス" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="password" placeholder="パワワード" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input type="password" placeholder="確認ため、もう一度パスワードを入力してください" class="form-control" name="password_confirmation" required autocomplete="new-password">                        
                        </div>


                        <button class="a-Btn--large u-mt-32" type="submit"><p>登録</p></button>

                    </form>
        
                <div class="c-modal-Form__links u-ch-block u-mt-40 u-mb-16">
                    <p class="js-Modal__btn--login"><span>登録済みの方はログイン画面へ</span></p>
                    <p class="u-mt-16 js-Modal__btn--repass"><span>パスワードを忘れた方はこちらへ</span></p>
                </div>

                <p style="font-size: 8px;">Term of use. Privacy policy</p>
            </dl>
        </div>

        <div class="c-modal-Form login u-mx-a js-Modal">
            <dl class="u-rel u-p-40" style="z-index: 1;">
                <i class="cancel fas fa-times js-Modal__close"></i>
                <dt>神ったー</dt>
                <dt class="u-mt-16 u-mb-40">ログイン</dt>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
        
                        <div class="c-modal-Formu-ch-block u-ch-w1 u-ch-mt-16 ">
                            <input type="email" placeholder="メールアドレス" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <input type="password" placeholder="パワワード"  class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                        <button class="a-Btn--large u-mt-32" type="submit"><p>ログイン</p></button>

                    </form>
        
                <div class="c-modal-Form__links u-ch-block u-mt-40 u-mb-16">
                    <p class="js-Modal__btn--register"><span>新規登録はこちら</span></p>
                    <p class="u-mt-16 js-Modal__btn--repass"><span>パスワードを忘れた方はこちらへ</span></p>
                </div>

                <p style="font-size: 8px;">Term of use. Privacy policy</p>
            </dl>
        </div>

        <div class="c-modal-Form repass u-mx-a js-Modal">
            <dl class="u-rel u-p-40" style="z-index: 1;">
                <i class="cancel fas fa-times js-Modal__close"></i>
                <dt>神ったー</dt>
                <dt class="u-mt-16 u-mb-40">パスワード再発行</dt>

                   <form method="POST" action="{{ route('password.email') }}">
                        @csrf
        
                        <div class="c-modal-Formu-ch-block u-ch-w1 u-ch-mt-16 ">
                            <input placeholder="メールアドレス" id="email" type="email" name="email" value="" required="required" autocomplete="email" autofocus="autofocus" class="form-control ">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button class="a-Btn--large u-mt-32" type="submit"><p>再発行</p></button>

                    </form>
        
                <div class="c-modal-Form__links u-ch-block u-mt-40 u-mb-16">
                    <p class="js-Modal__btn--register"><span>新規登録はこちら</span></p>
                    <p class="js-Modal__btn--login u-mt-16"><span>登録済みの方はログイン画面へ</span></p>
                </div>

                <p style="font-size: 8px;">Term of use. Privacy policy</p>
            </dl>
        </div>

        <div class="js-Modal__cover js-Modal__close">&nbsp;</div>

        <main class="l-main">
            
            <header class="top-Hero">
                <div class="u-container">
                    <div class="top-Hero__Wrapper u-w-50">
                        <div class="top-Hero-Wrapper">
                            <div class="top-Hero-Wrapper__inner u-py-40">
                                <p>text text</p>
                                <p>text<strong>text text</strong></p>
                                <p>text<strong>text text</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <article>
                <section>aaa</section>
            </article>
        </main>
        <footer></footer>
    </body>
</html>
