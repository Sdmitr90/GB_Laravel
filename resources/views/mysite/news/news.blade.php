@extends('mysite.index')

@section('title')
    Категории Новостей
@endsection

@section('content')
    <div>
        @forelse($news as $id => $item)
            <div>
                <a href='{{route('news::category', ['id' => $id])}}'> {!! $item['title'] !!} </a>
            </div>
        @empty
            Новостей нет!!!
        @endforelse
    </div>
@endsection
