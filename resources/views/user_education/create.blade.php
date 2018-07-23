@extends('layouts.app')

@section('content')
  
    <div class="parent">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <h2>Add University</h2>
            <br>
            
            {!! Form::open(['route' => ['user_education.store', $id]]) !!}
                      <div class="form-group">
                          {!! Form::label('university', '大学') !!}
                          {!! Form::textarea('university', old('university'), ['class' => 'form-control', 'rows' => '1', 'placeholder'=>'大学名']) !!}
                          {!! Form::label('major', '専攻') !!}
                          {!! Form::textarea('major', old('major'), ['class' => 'form-control', 'rows' => '1', 'placeholder'=>'専攻名']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
            {!! Form::close() !!}
            
        </div>
        
        
    </div>
   
   
    
    <!-- ボタンでフォーム追加 (JaveScript) -->
<script>
            $( function() {
            	"use strict";
            	var $content = $( '.field:last-child' );
            	$( '.add_btn' ).on( 'click', function() {
            		$content.clone( true ).appendTo( '.parent' );
            		$('#people').val("");
    
            	} );
            	$( '.parent' ).on( 'click', '.trash_btn', function() {
            		$( this ).parents( '.field' ).remove();
            	} );
            } );
       
            function myFunction() {
            setTimeout(function(){ document.getElementById("form1").submit();}, 3000);   
            setTimeout(function(){ document.getElementById("form2").submit();}, 6000);   
            }
</script>
<!-- ボタンでフォーム追加 (JaveScript) 終了 -->
  
<!-- ボタンでフォーム追加 -->
<body>
    <div class="col-xs-offset-1 col-xs-10 col-lg-offset-4 col-lg-4" id="hontai">
        <center><h1>学歴を追加</h1></center>
      　<br>
      　
      　<!-- ルート書き換え -->
        {!! Form::model($user, ['route' => 'users.index']) !!}
          <div class="parent">
                <div class="field form-inline" style="padding-bottom:4px; margin-bottom:10px;">
                    <div class="form-group">
                      {!! Form::label('people_name', '大学:',['class']) !!}
                      <input type="text" id="people" name="people_name[]" value="" placeholder='例:あいうえお大学' class='form-control doukousya' >
                      </input>
                      <button type="button" class="btn trash_btn ml10" value="" name="">
                              削除
                      </button>
                  </div>
                </div>
           </div>
           <button type="button" class="btn bg-white mt10 miw100 add_btn" value="" name="">出身大学を追加</button><br>
          <br>
          
         
        {!! Form::submit('投稿', ['class' => 'btn btn-info']) !!}
        {!! Form::close() !!}
    </div>
</body>
<!-- ボタンでフォーム追加終了 -->
       
@endsection