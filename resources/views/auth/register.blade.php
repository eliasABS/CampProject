<head>
    <meta charset="utf-8"/>
    <title></title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('http://fonts.googleapis.com/earlyaccess/droidarabickufi.css') }}"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>

    <style>
    body{
        background:url('{{ asset('img/wallpaper.jpg') }}');
        color:white;
        background-size:cover;
        background-repeat: no-repeat;
        overflow:hidden;
    }
    .formhead{
        margin-bottom: 10px;
        color:#fff;
    }
    .content{
        margin-top: 100px;
    }
    </style>
</head>
<body>
<div class="content">
                <div class="formhead">التسجيل</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="alertms r9"></div>
                            <label for="name">
                                <input id="name" type="text" placeholder="الإسم" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </label>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="alertms r9"></div>    
                            <label for="email">
                                <input id="email" type="email" placeholder="الإيميل" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">
                            </label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="alertms r9"></div>
                            <label for="password">
                                <input id="password" type="password" placeholder="كلمة المرور" @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
                            </label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        <div class="alertms r9"></div>
                            <label for="password-confirm">
                                <input id="password-confirm" type="password" placeholder="إعادة كلمة المرور" name="password_confirmation" required autocomplete="new-password">
                            </label>

                        <div class="alertms r9"></div>
                                <button type="submit" class="buttonsub">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</body>
