@extends('mysite.index')

@section('title')
    Категория {{ $id }}  Новость {{ $cardId }}
@endsection

@section('content')
    @forelse($news as $item)
    <div>
        @if($item->news_id == $cardId)
        <h4>{{$item->news}}</h4>
        <p>{!!$item->news_description!!}</p>
        @endif
        @empty
            <p>{!!'Dummy'!!}</p>
    </div>
    @endforelse
@endsection

