@extends('layouts.default')

@section('title', 'task-list')

@section('content')
<br>
<div class="alert-light" role="alert">タスク一覧</div>
<br>


<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target="#complateModal">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">台所清掃</h5>
            <small>本日/2週</small>
        </div>
        <small>食洗器 換気栓 排水溝 冷蔵庫 食器棚の整理</small>　<br>
    </a>
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target="#complateModal">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">カーテン洗浄</h5>
            <small>2日前/半年</small>
        </div>
        <small>居間と2階のレースとカーテンを洗濯機で洗浄</small>　<br>
    </a>
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="modal" data-target="#complateModal">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">庭の手入れ</h5>
            <small>6日前/毎週</small>
        </div>
        <small>雑草取り</small>　<br>
    </a>
</div>
@include('posts/complate-modal')
@endsection('content')

