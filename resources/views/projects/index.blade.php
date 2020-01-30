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
    
}
.profie-box h4{
    margin-top: 25px;
margin-bottom: 5px;
color: #2196f3;

}
strong{
    color: #555;

}
.profie-box p{
    margin-top: 10px;
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
.profie-box:hover strong{
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
    text-decoration:none;
}
h4 a:hover{
    text-decoration: none;
}

.btn1{
    appearance: none;
    background-color: #fff;
    border-radius: 10px;
    color: #D4995B;
    padding: 1.2em 2.8em;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    margin-left:41%;
    transition: background 0.7s;
}
.btn1:hover{
    background-color: #D4995B;
    color: #fff;
}
.mul{
    float: left;
    style: none;
    margin-top:25px;
}
.mul li{
    text-decoration:none;
    background-color: #D4995B;
    border-radius: 0px 5px 20px 0px;
    list-style-type:none;
    padding:5px;
}
.mul li a{
    color:#fff;
}
.mul li a:hover{
    text-decoration:none;
    color: #fff;
}
.litem{
    margin-top:2px;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>اصحاب المشاريع</title>
</head>
<body dir="rtl">
@extends('layouts/main')

@section('content')
    <ul class="mul">
          @foreach ($categories as $category)
              <li class="litem">
                <a  href="{{ url('/projects?category_id=' . $category->id) }}">{{ $category->name }}</a>
              </li>
          @endforeach
        </ul>
<div class="maindiv">
    <div class="team-row">
            
            @foreach($projects as $project)
        <div class=" profie-box">
            
            <h4><a href="{{ url("/projects/$project->id") }}">{{ $project->project_name }}</a></h4>
            <br><br>
            <strong>{{ $project->category->name }}</strong>
                <p>{{ $project->bio }}</p>
            <img src={{ asset('img/icon.jpg') }} height="100px" width="40px">
        
        </div>  
            @endforeach
              
        
            
        
    </div>
    @auth
        <a href="{{ url('/projects/create')}}"><button id="addproject" class="btn1">add new project</button></a>
    @endauth
</div>
@endsection
</body>
</html> 






  