@extends('master')

@section('meta_title','This is the page title')

@section('sidebar','')

@section('content')
    @include('includes.basic')

    @include('includes.data',[
        'text' => 'This is the data',
    ])

    @include('includes.headings',[
        'heading' => 'Title',
        'subheading' => 'Subtitle'
    ])

    @includeIf('includes.fourohfour',[
        'this' => 'view',
        'does_not' => 'exist'
    ])

    @includeWhen($logged_in,'includes.logged-in',[
        'name' => 'Mikky'
    ])

    @includeWhen(!$logged_in,'includes.guest')

    @each('includes.each',$people,'person','includes.each-empty')
@endsection