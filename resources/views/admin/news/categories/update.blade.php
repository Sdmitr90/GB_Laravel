@extends('mysite.index')

@section('title')
    @parent
    Редактирование новости
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
    @foreach($categories as $item)
    <div class="row justify-content-center">
        <div class="col-md-6">
            {!! Form::open(['route' => 'admin::categories::create']) !!}
            <label class="form-label">
            Заголовок категории id = {!! $item->id !!}
            </label>
            {!! Form::hidden('id', $item->id , ['class' => 'form-control']) !!}
            <div class="form-group">
                {!! Form::text('title', $item->category_name, ['class' => 'form-control']) !!}
            </div>
            <label class="form-label">
                Содержимое
            </label>
            <div class="form-group">
                {!! Form::textarea('content', $item->category_description, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('send', ['class' => 'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    @endforeach
@endsection
