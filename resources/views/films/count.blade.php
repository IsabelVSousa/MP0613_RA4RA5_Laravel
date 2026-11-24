<h1>{{$title}}</h1>

@if(empty($count))
    <FONT COLOR="red">No se ha encontrado ninguna película</FONT>
@else
    <div align="center">
        <h1>{{$count}}</h1>
    </div>
@endif