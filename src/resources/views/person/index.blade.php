@extends('layouts.helloapp')
@section('title', 'Person.index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>name</th><th>mail</th><th>age</th>
        </tr>
        @foreach ($hasItems as $item)
        <tr>
            <!-- <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td> -->
            <td>{{$item->getData()}}</td>
            <td>
                @if ($item->board != null)
                <table width="100%">
                    @foreach ($item->board as $obj)
                        <tr><td>{{$obj->getData()}}</td></tr>
                    @endforeach
                </table>
                @endif
            </td>
        </tr>
        @endforeach

        <table>
            <tr><th>Person</th></tr>
            @foreach($noItems as $item)
            <tr><td>{{$item->getData()}}</td></tr>
            @endforeach
        </table>
    </table>
@endsection
