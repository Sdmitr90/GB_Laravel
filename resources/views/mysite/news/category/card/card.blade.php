@extends('mysite.index')

@section('title')
    Категория {{$id}} Новость {{$cardId}}
@endsection

@section('content')
    <div>
        <h4>{{$news[$id][$cardId][0]}}</h4>
        <p>{!!$news[$id][$cardId][1]!!}</p>

    </div>
@endsection
