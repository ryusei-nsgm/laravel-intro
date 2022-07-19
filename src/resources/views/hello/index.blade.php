@extends('layouts.helloapp')
<style>
tr th a:link { color: white; }
tr th a:visited { color: white; }
tr th a:hover { color: white; }
tr th a:active { color: white; }
</style>
@section('title', 'Index')
@section('menubar')
@parent
インデックスページ
@endsection
@section('content')
<table>
    <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
    </tr>
    @if($items)
    @foreach ($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
    </tr>
    @endforeach
    @endif
</table>
@endsection
@section('footer')
@endsection