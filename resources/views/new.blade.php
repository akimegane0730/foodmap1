@extends('layout')

@section('content')
    <h1>新しいお店を登録する</h1>
    {{ Form::open(['route' => 'shop.store']) }}
        <div class="form-group" style="padding: 5px;">
            {{ Form::label('name', '店名(⚠︎必須):') }}
            {{ Form::text('name', null) }}
        </div>
        <div class="form-group" style="padding: 5px;">
            {{ Form::label('address', '住所(⚠︎必須):') }}
            {{ Form::text('address', null) }}
        </div>
        <div class="form-group" style="padding: 5px;">
            {{ Form::label('category_id', 'カテゴリ(⚠︎必須):') }}
            {{ Form::select('category_id', $categories) }}
        </div>
        <div class="form-group" style="padding: 5px;">
            {{ Form::label('item', 'おすすめの一品(⚠︎必須):') }}
            {{ Form::text('item', null) }}
        </div>
        <div class="form-group input-lg" style="padding: 5px;" >
            {{ Form::label('reason', '理由(⚠︎必須):') }}
            {{ Form::text('reason', null, ['class' => 'form-control  input-lg', 'rows' => '3', 'style' => 'width: 100%;']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-outline-primary']) }}
        </div>
    {{ Form::close() }}

    <div>
        <a class='btn btn-info'href={{ route('shop.list') }}>一覧に戻る</a>
    </div>
@endsection