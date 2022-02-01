@extends('mysite.index')

@section('title')
    @parent
    Редактирование новости
@endsection

@section('content')
    @foreach($news as $item)
    <div class="row justify-content-center">
        <div class="col-md-6">
            {!! Form::open(['route' => 'admin::news::create']) !!}
            <label class="form-label">
                Категория id = {!! $item->categories_id !!}
            </label>
            <div class="form-group">
                {!! Form::text('category', $item->categories_id, ['class' => 'form-control']) !!}
            </div>
            <label class="form-label">
            Заголовок Новости id = {!! $item->id !!}
            </label>
            {!! Form::hidden('news_id', $item->id , ['class' => 'form-control']) !!}
            <div class="form-group">
                {!! Form::text('title', $item->news_name, ['class' => 'form-control']) !!}
            </div>
            <label class="form-label">
                Содержимое
            </label>
            <div class="form-group">
                {!! Form::textarea('content', $item->news_description, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('send', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    @endforeach
@endsection
