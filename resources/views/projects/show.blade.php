<html>
<head> 
<style>
    *{
        color:#ffffff;
    }
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
    img{
        float:right;
    }
    #con{
        padding-bottom:175px;
    }
</style>
</head>    
<body dir="rtl"> 
    @extends('layouts/main')

    @section('content')
            <br>
    <div id="con" style=" background-color: #D4995B;;"class="container mt-3 mb-5">
            <img  width="175px" height="175px" src={{ asset("img/icon.jpg")}}>
           <h2>Project name : {{ $project->project_name }}</h2>
            <h4>category : {{ $project->category->name }}</h4>
            <p>budget : {{ $project->budget }}</p>
            <p>city : {{ $project->city->name }}</p>
            <p>Bio :{{ $project->bio}}</p><br><br>

    </div>
    @endsection

</body>
</html>
