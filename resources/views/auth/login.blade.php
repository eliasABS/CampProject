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
    }
    .content{
        margin-top: 120px;
    }
    </style>
</head>
<body>
<div class="content">
                <div class="formhead" style="color:#fff">رائد الأعمال </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="alertms r9"></div>
                            <label for="email">{
                                <input id="email" placeholder="الإيميل" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="alertms r9"></div>

                            <label for="password">
                                <input id="password" type="password" placeholder="كلمة المرور" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
                            </label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      <div class="alertms r9"></div>
                       
                                <button type="submit" class="buttonsub">
                                    {{ __('تسجيل الدخول') }}
                                </button>
                        <div class="alertms r9"></div>
                                @if (Route::has('password.request'))
                                    <a class="forgpass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </form>
    </div>
</body>            
