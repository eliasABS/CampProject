<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title></title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('http://fonts.googleapis.com/earlyaccess/droidarabickufi.css') }}"/>
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>

    <style>
    body{
        background-image: url('../img/wallpaper.jpg');
        color:white;
        background-size:cover;
        background-repeat: no-repeat;
        overflow:hidden;
    }
    .formhead{
        margin-bottom: 10px;
    }
    .content{
        margin-top: 1px;
    }
    textarea{
        width:100%;
    }
    button a{
        color:white;
        text-decoration:none;
    }
    button a:hover{
        text-decoration:none;
        color:white;
    }
    </style>
</head>
<body>
    

    
    <div class="content">

        
        <!-- LOGIN FORM START -->
            <div class="formhead">رائد الأعمال </div>
            <form action="{{ url('/projects') }}" method="POST">
            @csrf
            
                <div class="alertms r9"></div>
                <label>
                    <input type="text" id="username" name="project_name" placeholder="إسم المشروع"/><span class="fa fa-user icons"></span>
                </label>
                <div class="alertms r10"></div>
                <label>
                    <input type="address" id="" name="address" placeholder="العنوان"/><span class="fa fa-user icons"></span>
                </label><div class="alertms r10"></div>
                <label>
                    <input type="text" id="username" name="budget" placeholder="الميزانية المطلوبة "/><span class="fa fa-user icons"></span>
                </label>
                <div class="alertms r11"></div>
                <select>
                    <option>تقنية المعلومات</option>
                    <option>التعليم</option>
                    <option>السيارات</option>
                    <option>الوجبات السريعة</option>
                    <option>...</option>
                </select>
                <div class="alertms r6"></div>
                <textarea id="message" placeholder="نبذة عن المشروع" name="text"></textarea>
                <div class="alertms r13"></div>
                <input class="buttonsub" type="submit" value="التسجيل">
            </form>
        



    </div>

    
</body>
</html>