@extends('common/admins')

@section('title','后台的首页')

@section('content')
    <h1>这是后台的首页</h1>

    <h1>{{session('success')}}</h1>
@stop