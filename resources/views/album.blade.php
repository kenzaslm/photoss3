@extends("app")
@section("content")        
@foreach($photos as $p)
<div id ="photos">
    <h3>{{$p->titre}}</h3>
    <img src ="{{$p->url}}" alt ="{{$p->titre}}" />
    <h3>{{$p->tags}}</h3>
</div>
@endforeach
@endsection