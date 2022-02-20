@extends('mysite.index')

@section('title')
    @parent
    Категории
@endsection

@section('content')
    <div style="margin-bottom: 30px">
        <a href='{{route('admin::categories::new')}}'> Создать Категорию!</a>
    </div>
    @foreach($categories as $item)
        <div>
            <a href='{{route('admin::categories::update', ['id' => $item->id])}}'> {!! $item->category_name !!} </a>
        </div>
        <div>
        {!! $item->category_description !!}
        <p><a href='{{route('admin::categories::update', ['id' => $item->id])}}'> Редактировать</a>  <a href='{{route('admin::categories::delete', ['id' => $item->id])}}'> Удалить </a></p>
        </div>
    @endforeach
@endsection

