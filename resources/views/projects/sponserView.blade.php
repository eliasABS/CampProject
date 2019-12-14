<style>
*{
margin: 0;
padding: 0;
}

body{
    background:#efefef;
    font-family: sans-serif;

}
.profie-box{
    width: 280px;
    height: 320px;
    background: #fff;
    border-radius: 4px;
    margin-bottom: 30px;
    box-shadow: 0 10px 10px 10px rgba(115, 193, 225, 0.1) ;
    padding: 20px;
    position: relative;
    transition: background 0.7s;
    overflow:hidden;

}

.profie-box img{
    width: 100px;
    position: absolute;
    top: 20px;
    right: 10px ;
    border-radius: 4px;
    transition: 5s;
    
}
.profie-box h4{
    margin-top: 25px;
margin-bottom: 5px;
color: #2196f3;

}
small{
    color: #555;

}
.profie-box p{
    text-align: center;
    line-height: 177px;
    color:#555 ;


     

}
.team-row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 65%;
    margin: auto;
     
}

.profie-box:hover{
    background: #D4995B;
}
.profie-box:hover h4 a{
    color: #ffffff;

}
.profie-box:hover p{
    color: #efefef;
}
.profie-box:hover small{
    color: #efefef;
}
.profie-box:hover.team-row{
     background: #fff;

}
.maindiv{
    margin-top :25px;
}
h4 a{
   color: #D4995B;
}
h4 a:hover{
    text-decoration: none;
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>اصحاب المشاريع</title>
</head>
<body>
<nav  class="navbar navbar-expand-lg bg-dark fixed">
  <a class="navbar-brand text-light home" href="home.php">الرئيسية</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li  class="searchB"><div class="active-pink-4 mb-4 ">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
</div></li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="projectProfile.php">صفحتي <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-light" href="client.php">المشاريع</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="sponser.php">الداعمين</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light active" href="../index.php">تسجيل الدخول</a>
      </li>
    </ul>
  </div>
</nav>
<div class="maindiv">
<div class="team-row">
<div class=" profie-box">
            
            <h4> <a href="">مصرف الجمهورية</a></h4>
            <small>الوجبات السريعة</small>
<br>
<small>طرابلس</small>
                                
            <img src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg">
        
        
        </div>
    
        
        
        </div>
    </div>
    <footer " class="footer">
                
                <p>.  حقوق النشر 2019 &copy; مولني &reg;  .</p>
                                <p>tec camp                                    </p>
                </footer>

</body>
</html> 