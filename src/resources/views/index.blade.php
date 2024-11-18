@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{asset('index.css')}}">
@endsection

@section('content')

<div class="todo-form__content">
    <div class="todo-form__heading">
        <h2>Todoを作成しました</h2>
    </div>
    <form action="/index" class="form" method="post">
        @csrf
        <input type="text" name="text" id="">
        <input type="button" value="">
        <button class="form__button-submit" type="submit">作成</button>
    </form>
    <table class="todo-table">
        <tr class="todo-table__title">Todo</tr>
        <tr>
            <th>test1</th>
            <td><input type="button" value="">更新</td>
            <td><input type="button" value="">削除</td>
        </tr>
        <tr>
            <th>test1</th>
            <td><input type="button" value="">更新</td>
            <td><input type="button" value="">削除</td>
        </tr>
    </table>

</div>