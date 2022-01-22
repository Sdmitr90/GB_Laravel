@extends('mysite.index')

@section('menu')
    @foreach($pages as $item)
        <div>

            <div>
                <a href="{{($item['title'])}}">
                    {{$item['title']}}
                </a>
            </div>

        </div>
    @endforeach
@endsection
