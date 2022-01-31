@extends('mysite.index')

@section('title')
    @parent
    Новости
@endsection

@section('content')
    <div style="margin-bottom: 30px">
        <a href='{{route('admin::news::new')}}'> Создать Новость!</a>
    </div>
    @foreach($news as $item)
        <div>
            <a href='{{route('admin::news::update', ['id' => $item->id])}}'> {!! $item->news_name !!} </a>
            <p><a href='{{route('admin::news::update', ['id' => $item->id])}}'> Редактировать</a>  <a href='{{route('admin::news::delete', ['id' => $item->id])}}'> Удалить </a></p>
        </div>
    @endforeach
@endsection

