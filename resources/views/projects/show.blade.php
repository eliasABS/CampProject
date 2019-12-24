<html>
<head> 
<style>
    body{
        overflow:hidden;
        
    }
    .pic{
        float: right;
    }
    h1{
        color: black;
    }
    .container{
        -webkit-border-radius:3px;
    -moz-border-radius:3px;
    border-radius:10px;
    }
    button a{
        color:white;
        
    }
    button a:hover{
        text-decoration:none;
        color:white;
    }
    form{
    }
</style>
</head>    
<body dir="rtl"> 
    @extends('layouts/main')

    @section('content')
            <br>
    <div style=" background-color: #D4995B;;"class="container mt-3 mb-3">
        <form class="pt-3 pb-5">
            <div class="pic"><img  width="175px" height="175px" src="../img/depositphotos_115690756-stock-illustration-young-and-elegant-woman-avatar.jpg"></div> 
            <h2>{{ $project->project_name }}</h2>
            <h4>{{ $project->category->name }}</h4>
            <p>{{ $project->budget }}</p>
            <p>{{ $project->city->name }}</p>
            <p>{{ $project->bio}}</p></br></br>

            <button type="button" class="btn btn-info">price</button></br></br></br>
            <button type="button" class="btn btn-dark"><a href="#">تعديل البيانات</a></button>
            <button type="button" class="btn btn-danger"><a href="#">تسجيل الخروج</a></button>
            <button type="button" class="btn btn-success"><a href="#">محادثة </a></button>
            
            <form>
    </div>
    @endsection

</body>
</html>
