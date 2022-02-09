@extends('mysite.index')

@section('title')
    @parent
    Категории
@endsection

@section('content')
    <div>
        @forelse($categories as $item)
            <div>
                <a href='{{route('category::list', ['category_id' => $item->id])}}'> {!! $item->category_name !!} </a>
            </div>
            <div>
                {!! $item->category_description !!} </a>
            </div>
        @empty
            Категорий нет!!!
        @endforelse
    </div>
@endsection
