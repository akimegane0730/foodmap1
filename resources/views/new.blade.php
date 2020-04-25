@extends('layout')

@section('content')
    <h1>新しいお店を登録する</h1>
    {{ Form::open(['route' => 'shop.store']) }}
        <div class="form-group">
            {{ Form::label('name', '店名:') }}
            {{ Form::text('name', null) }}
        </div>
        <div class="form-group">
            {{ Form::label('address', '住所:') }}
            {{ Form::text('address', null) }}
        </div>
        <div class="form-group">
            {{ Form::label('category_id', 'カテゴリ:') }}
            {{ Form::select('category_id', $categories) }}
        </div>
        <div class="form-group">
            {{ Form::label('item', 'おすすめの一品:') }}
            {{ Form::text('item', null) }}
        </div>
        <div class="form-group">
            {{ Form::label('reason', '理由:') }}
            {{ Form::text('reason', null) }}
        </div>
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-outline-primary']) }}
        </div>
    {{ Form::close() }}

    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
    </div>
@endsection