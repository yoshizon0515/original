@extends('layouts.default')

@section('title', 'task-insert')

@section('content')
<br>
<div class="alert-light" role="alert">タスク登録</div>
<br>

<form>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="task-name">タスク名</label>
            <input type="text" class="form-control" id="task-name">
        </div>
        <div class="form-group col-12">
            <label for="task-details">タスク詳細</label>
            <textarea class="form-control" id="task-details"></textarea>
        </div>
        <div class="form-group col-12">
            <label for="start-date">開始日</label>
            <input type="text" class="form-control" id="start-date" readonly>
        </div>

        <div class="form-group col-12">
            <label for="period">周期</label>
            <select class="form-control" id="period">
                <option value="00">単発</option>
                <option value="01">1日</option>
                <option value="02">2日</option>
                <option value="03">3日</option>
                <option value="04">1週間</option>
                <option value="05">2週間</option>
                <option value="06">1ヵ月</option>
                <option value="07">2ヵ月</option>
                <option value="08">3ヵ月</option>
                <option value="09">半年</option>
                <option value="10">1年</option>
                <option value="11">3年</option>
            </select>
        </div>

        <div class="form-group col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="enable" checked>
                <label class="form-check-label" for="enable">
                    有効化
                </label>
            </div>
        </div>
    </div>
</form>
@endsection('content')
