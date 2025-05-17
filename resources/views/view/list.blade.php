@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
<table class="table">
    <tr>
        <td>書籍</td>
        <td>価格</td>
        <td>出版社</td>
        <td>刊行日</td>
    </tr>
    @each('subviews.book', $records, 'record', 'subviews.empty')
</table>
@endsection