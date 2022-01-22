@extends('mysite.index')

@section('title')
    Категория {{ $id }}
@endsection

@section('content')
    <div>
        @forelse($news[$id] as $cardId => $news)
           @if(is_array($news)) {{-- Знаю, что Г.Код, до начала работы с базами данных, нет желания заморачиваться--}}
                <div>
                    <a href='{{route('news::category', ['id' => $id])}}/card/{{$cardId}}'> {!!$news[0]!!} </a>
                </div>
            @endif
        @empty
            Новостей нет!!!
        @endforelse
    </div>
@endsection
