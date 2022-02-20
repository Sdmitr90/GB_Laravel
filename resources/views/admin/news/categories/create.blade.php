@extends('mysite.index')

@section('title')
    @parent
    Создание Категории
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row justify-content-center">
            <div class="col-md-6">
                {!! Form::open(['route' => 'admin::categories::create']) !!}
                <label class="form-label">
                    id Категории (необязательно)
                </label>
                <div class="form-group">
                    {!! Form::text('id', '', ['class' => 'form-control']) !!}
                </div>
                <label class="form-label">
                    {{__('label.title')}}
                </label>
                <div class="form-group">
                    {!! Form::text('title', '', ['class' => 'form-control']) !!}
                </div>
                <label class="form-label">
                    {{__('label.description')}}
                </label>
                <div class="form-group">
                    {!! Form::textarea('content', '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('send', ['class' => 'btn btn-success']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
@endsection
