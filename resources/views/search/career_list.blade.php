<ul class="media-list">
    
@foreach ($careers as $career)
   
    <li class="media">
        
        <div class="media-body">    
            在籍期間：
            {{$career->start}}
            ～
            {{$career->end}}
            <br>
            職種：
            {{$career->career}}
            <br>
            サービス：
            {{$career->service}}
            <br>
            
        </div>
    </li>
@endforeach
</ul>
{!! $careers->render() !!}