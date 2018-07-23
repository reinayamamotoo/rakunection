@extends('layouts.app')
<link rel="stylesheet" href="/css/pandapicture.css">
@section('content')
  
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>Select Your Profile Picutre</h2>
        </div>    
            <br>
        <div class="panda-list col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <div class="panda-list">
                   <div>
                       {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda1') !!}
                           <label>
                               <img src="/panda-picture/panda1.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Hero', ['class' => 'panda-button']) !!}
                           </label>
                       {!! Form::close() !!}
                   </div>
               </div>
               <div class="panda-list">    
                   <div>
                       {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda2') !!}
                           <label>
                               <img src="/panda-picture/panda2.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Thumbs-up', ['class' => 'panda-button']) !!}
                           </label>
                       {!! Form::close() !!}
                   </div>
               </div>
               <div class="panda-list">    
                   <div>
                       {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda3') !!}
                           <label>
                               <img src="/panda-picture/panda3.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Ski', ['class' => 'panda-button']) !!}
                           </label>
                       {!! Form::close() !!}
                   </div>
               </div>
               <div class="panda-list">    
                   <div>
                       {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda4') !!}
                           <label>
                               <img src="/panda-picture/panda4.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Golf', ['class' => 'panda-button']) !!}
                           </label>
                       {!! Form::close() !!}
                   </div>
               </div>
               <div class="panda-list">    
                   <div>
                       {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda5') !!}
                           <label>
                               <img src="/panda-picture/panda5.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Donut', ['class' => 'panda-button']) !!}
                           </label>
                       {!! Form::close() !!}
                   </div>
               </div>
               <div class="panda-list">    
                   <div>
                       {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda6') !!}
                           <label>
                               <img src="/panda-picture/panda6.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Card-man', ['class' => 'panda-button']) !!}
                           </label>
                       {!! Form::close() !!}
                   </div>
               </div>
               <div class="panda-list">    
                   <div>
                            {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                            {!! Form::hidden('user_picture', 'panda7') !!}
                            <label>
                               <img src="/panda-picture/panda7.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Shopping', ['class' => 'panda-button']) !!}
                            </label>
                       {!! Form::close() !!}
                   </div>
               </div>
               <div class="panda-list">    
                   <div>
                       {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda8') !!}
                           <label>
                               <img src="/panda-picture/panda8.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Singing', ['class' => 'panda-button']) !!}
                           </label>
                       {!! Form::close() !!}
                   </div>
               </div>
               <div class="panda-list">    
                   <div>
                       {!! Form::open(['route' => ['users.pictures', $id]]) !!}
                           {!! Form::hidden('user_picture', 'panda9') !!}
                           <label>
                               <img src="/panda-picture/panda9.png" width="10%" height="10%" alt="" class="panda-detail">
                               {!! Form::submit('Panda Rainy-day', ['class' => 'panda-button']) !!}
                           </label>
                       {!! Form::close() !!}
                   </div>
               </div>
        </div> 
            <br>
    </div>
@endsection