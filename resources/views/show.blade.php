@extends('layout')

@section('content')
    <h1 class="title">{{ $shop->name }}</h1>
    <div>
        <p class="category">カテゴリー：{{ $shop->category->name }}</p>
        <p>住所：{{ $shop->address }}</p>
        <p>投稿者：{{ $shop->user->name }}</p>
    </div>

    <iframe id='map' src='https://www.google.com/maps/embed/v1/place?key=AIzaSyAHwA6lVZYOXuAddQ0WvfWoVLWw4FBvYhs&amp;q={{ $shop->address }}'
    width='100%'
    height='320'
    frameborder='0'>
    </iframe>
    <h2>{{ $shop->user->name }} さんのおすすめの一品</h2>
    <div>
        <h1 class="item">{{ $shop->item }}</h1>
        <h3>理由</h3>
        <div class="reason"> {{ $shop->reason }}</div>
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
    <p></p>
    <div>
        <a class='btn btn-info'href={{ route('shop.list') }}>一覧に戻る</a>
    </div>
@endsection

