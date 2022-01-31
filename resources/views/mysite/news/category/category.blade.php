@extends('mysite.index')

@section('title')
    Категория {{ $id }}
@endsection

@section('content')
    <div>
        @forelse($news as $item)
           @if($item->categories_id == $id)
                <div>
                    <a href='{{route('news::category', ['id' => $id])}}/card/{!!$item->news_id!!}'> {!!$item->news!!} </a>
                </div>
            @endif
        @empty
            Новостей нет!!!
        @endforelse
    </div>
@endsection

