@extends('master')
@inject('widget','App\Services\WidgetService')

@section('meta_title','This is the page title')

@section('sidebar','')

@section('content')
    We stock {{ $widget->count() }} widgets.
@endsection