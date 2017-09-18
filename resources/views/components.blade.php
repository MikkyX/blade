@extends('master')

@section('meta_title','This is the page title')

@section('sidebar','')

@section('content')
    @component('banner')
        Welcome!
    @endcomponent

    @component('headings')
        @slot('subheading')
            This is the subheading
        @endslot

        This is the H1
    @endcomponent
@endsection