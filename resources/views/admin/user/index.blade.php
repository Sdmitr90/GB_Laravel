@extends('layouts.main')

@section('content')
    <h1 class="mb-4">Все пользователи</h1>

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Дата регистрации</th>
            <th>Имя, фамилия</th>
            <th>Адрес почты</th>
            <th>Редактировать</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->created_at->format('d.m.Y H:i') }}</td>
                <td>{{ $user->name }}</td>
                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                <td>
                    <a href="{{ route('admin.user.edit', ['user' => $user->id]) }}">
                        Ред.
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
