@extends('mysite.index')

@section('title')
    @parent
    Новости
@endsection

@section('content')
<div>
<div>
    {{$item->news_name}}
</div>
    <div>
        {{$item->news_description}}
    </div>
</div>
@endsection
