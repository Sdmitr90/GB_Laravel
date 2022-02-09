@extends('mysite.index')

@section('title')
    @parent
    Новости
@endsection

@section('content')
<div>
    @forelse($news as $item)
        <div>
            <a href='{{route('news::card', ['news' => $item->id])}}'> {!! $item->news_name !!} </a>
        </div>
    @empty
        Новостей нет!!!
    @endforelse
</div>
@endsection
