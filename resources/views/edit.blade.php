@extends('layout')

@section('content')
    <h1>{{$shop->name}}を編集する</h1>
    {{ Form::model($shop, ['route' => ['shop.update', $shop->id]]) }}
        <div class='form-group'>
            {{ Form::label('name', '店名:') }}
            {{ Form::text('name', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('address', '住所:') }}
            {{ Form::text('address', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('category_id', 'カテゴリ:') }}
            {{ Form::select('category_id', $categories) }}
        </div>
        <div class="form-group">
            {{ Form::submit('更新する', ['class' => 'btn btn-outline-primary']) }}
        </div>
        <div class="form-group" style="padding: 5px;">
            {{ Form::label('item', 'おすすめの一品:') }}
            {{ Form::text('item', null) }}
        </div>
        <div class="form-group input-lg" style="padding: 5px;" >
            {{ Form::label('reason', '理由:') }}
            {{ Form::text('reason', null, ['class' => 'form-control  input-lg', 'rows' => '3', 'style' => 'width: 100%;']) }}
        </div>
    {{ Form::close() }}

    <div>
        <a class='btn btn-info'href={{ route('shop.list') }}>一覧に戻る</a>
    </div>

@endsection