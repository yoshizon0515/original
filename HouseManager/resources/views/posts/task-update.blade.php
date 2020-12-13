@extends('layouts.default')

@section('title', 'task-update')

@section('content')
<br>
<div class="alert-light" role="alert">タスク更新</div>
<br>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col-1">ID</th>
            <th scope="col-2">名称</th>
            <th scope="col-5">詳細</th>
            <th scope="col-1">開始日</th>
            <th scope="col-1">周期</th>
            <th scope="col-1">状態</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td name="task-id">0001</td>
            <td>台所清掃</td>
            <td>食洗器 換気栓 排水溝 冷蔵庫 食器棚の整理</td>
            <td>本日</td>
            <td>2週</td>
            <td>〇</td>
        </tr>
        <tr>
            <td name="task-id">0002</td>
            <td>カーテン洗浄</td>
            <td>居間と2階のレースとカーテンを洗濯機で洗浄</td>
            <td>2日前</td>
            <td>毎週</td>
            <td>〇</td>
        </tr>
        <tr>
            <td>0003</td>
            <td>庭の手入れ</td>
            <td>雑草取り</td>
            <td>6日前</td>
            <td>毎週</td>
            <td>×</td>
        </tr>
    </tbody>
</table>
@endsection('content')
