<link rel="stylesheet" href="/css/search.css">
@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>検索</h1>
    </div>

    <div class="row">
        <div class="col-ms-8 col-ms-offset-2 col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2 col-lg-8 col-lg-offset-2">

            {!! Form::open(['route' => 'search.get', 'method' => 'get']) !!}
                <div class="form-group">
                    {!! Form::label('keyword_career', '職種') !!}
                    {!! Form::select('keyword_career', [
                       ' ' => ' ',
                       'マーケティング' => 'マーケティング',
                       '営業・コンサルタント' => '営業・コンサルタント',
                       '戦略・経営企画' => '戦略・経営企画',
                       '物流・SCM' => '物流・SCM',
                       'アプリケーションエンジニア' => 'アプリケーションエンジニア',
                       'データサイエンティスト・リサーチャー' => 'データサイエンティスト・リサーチャー',
                       'その他' => 'その他'
                       ], null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('keyword_service', 'サービス') !!}
                    {!! Form::select('keyword_service', [
                       ' ' => ' ',
                        'EC' => 'EC',
                        'トラベル' => 'トラベル',
                        'FinTech' => 'FinTech',
                        '新サービス' => '新サービス',
                        'RIT' => 'RIT',
                        'コーポレート' => 'コーポレート'
                       ], null, ['class' => 'form-control']) !!}
                </div>
                
                <!--
                <div>
                     <label>{{Form::checkbox('keyword_shinsotsu', '新卒', null, ['class' => 'field'])}}新卒 </label>
                　
                     <label>{{Form::checkbox('keyword_tyuuto', '中途', null, ['class' => 'field'])}}中途 </label>
                </div>
                -->
                
                    <!-- フォームテスト -->
                    <script>
                    function btn3_click(){
                    	var d2 = document.getElementById('search_detail');
                    	// 要素の追加
                    	if (!d2.hasChildNodes()){
                    	    var div_element_1 = document.createElement("div");
                    	    var div_element_2 = document.createElement("div");
                    	    var div_element_3 = document.createElement("div");
                            var div_element_4 = document.createElement("div");
                    	    var div_element_5 = document.createElement("div");
        
                            div_element_1.innerHTML 
                            = '<br><label><input class="field" name="keyword_shinsotsu" type="checkbox" value="新卒">新卒</label>';
                    	    div_element_2.innerHTML 
                            = '<label><input class="field" name="keyword_tyuuto" type="checkbox" value="中途">中途</label>';
                            div_element_3.innerHTML 
                            = '<label><input class="field" name="keyword_mba" type="checkbox" value="MBA">MBA</label>';
                    	    div_element_4.innerHTML 
                            = '<label><input class="field" name="keyword_sankyuu" type="checkbox" value="sankyuu">産休・育休</label><br>';
                            div_element_5.innerHTML 
                            ='<input type="text" name="keyword_university" value="大学名" size="">';
        
                    	    d2.appendChild(div_element_1);
                    	    d2.appendChild(div_element_2);
                    	    d2.appendChild(div_element_3);
                    	    d2.appendChild(div_element_4);
                    	    d2.appendChild(div_element_5);
                    	}
                    }
                    function btn4_click(){
                    	var d2 = document.getElementById('search_detail');
                    	if (d2.hasChildNodes()){
                    		d2.removeChild(d2.firstChild);
                    	}
                    }
                    </script>
                    
                    <body >
                    <input type="button" value="詳細検索" onclick='btn3_click()'　class="btn bg-white">
                    <input type="button" value="×" onclick='btn4_click()'　class="btn trash_btn">
                    <div id="search_detail"></div>
                    </body>
                    <!-- フォームテスト -->
                    
                    <br>
                    
                    {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
            
            <br>
        </div>
        <div class="col-ms-12 col-md-12 col-xs-12 col-lg-12">
            
            <?php
            $time = microtime(true) - $time_start;
            ?>
            
            <div class="count_result">
            <h4>　検索結果：{{ count($result) }} 件 ({{ round ($time, 3) }} 秒)</h4>
            </div>
            
            <div class="result-list" >
            @include('users.users', ['users'=>$result])
            </div>
        </div>

    </div>
@endsection