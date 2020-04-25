@extends('layout')

@section('content')
    <h1 class="title">{{ $shop->name }}</h1>
    <div>
        <p class="category">カテゴリー：{{ $shop->category->name }}</p>
        <p>住所：{{ $shop->address }}</p>
    </div>

    <iframe id='map' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyAHwA6lVZYOXuAddQ0WvfWoVLWw4FBvYhs&amp;q={{ $shop->address }}'
    width='100%'
    height='320'
    frameborder='0'>
    </iframe>
    <h2>おすすめの一品</h2>
    <div>
        <h1 class="item">{{ $shop->item }}</h1>
        <h3>理由</h3>
        <h4> {{ $shop->reason }}</h4>
    </div>

    <div>
    @auth
        @if ($shop->user_id === $login_user_id)
            <a class='btn btn-success'href={{ route('shop.edit', ['id' =>  $shop->id]) }}>編集</a>
            <p></p>
            {{ Form::open(['method' => 'delete', 'route' => ['shop.destroy', $shop->id]]) }}
                {{ Form::submit('削除', ['class' => 'btn btn-outline-danger']) }}
            {{ Form::close() }}
        @endif
    @endauth
    </div>
@endsection

