@extends('mysite.index')

@section('title')
    @parent
    Создание новости
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            {!! Form::open(['route' => 'about::create']) !!}
            <label class="form-label">
                Заголовок
            </label>
            <div class="form-group">
                {!! Form::text('title', '', ['class' => 'form-control']) !!}
            </div>
            <label class="form-label">
                Содержимое
            </label>
            <div class="form-group">
                {!! Form::textarea('content', '', ['class' => 'form-control']) !!}
            </div>
            <label class="form-label">
                Ваш E-Mail:
            </label>
            <div class="form-group">
                {!! Form::input('email', 'email','', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('send', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
