<head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
<style>
.active-4 input[type=text]:focus:not([readonly]) {
border: 1px solid #D4995B;
box-shadow: 0 0 0 1px #D4995B;

}
.searchB{
  margin-left:350px;
}
.home{
  margin-top:0px;
}
ul{
  margin-top:10px;
}
footer{
  margin-bottom:0;
}


</style>
</head>
<body dir="rtl">
<nav  class="navbar navbar-expand-lg bg-dark fixed">
  <a class="navbar-brand text-light home" href="{{ url('/home') }}">الرئيسية</a>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
    <ul class="navbar-nav mr-auto">
      <li  class="searchB"><div class="active-4 mb-4 ">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
</div></li>
 
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ url('/projects') }}">المشاريع</a>
      </li>
      @guest
      <li class="nav-item">
         <a class="nav-link text-light" href="{{ url('/login') }}"> تسجيل الدخول</a>
      </li>
      @if (Route::has('register'))
              <li>
                  <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
        @else
        <li>
              <a class="nav-link text-light" href="{{url('#}')}}">
                  {{ Auth::user()->name }}
              </a>
        </li>  
         <li>
                  <a class="nav-link text-light" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>  
         </li>
                  </div>
      @endguest
    </ul>
  </div>
</nav>

@yield('content')

<footer class="footer">
                
<p>.  حقوق النشر 2019 &copy; مولني &reg;  .</p>
                <p>tec camp                                    </p>
</footer>
</body>