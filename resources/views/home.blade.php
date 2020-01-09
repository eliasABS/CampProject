@extends('layouts.main')

@section('content')
<div class="container mt-5" style="background:#D4995B; margin-bottom:100px; padding-bottom:300px;">
    
    <p>welcome {{ Auth::user()->name }}<p>


                    You are logged in!
             
</div>
@endsection
