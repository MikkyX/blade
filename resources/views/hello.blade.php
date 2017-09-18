@extends('master')

@section('meta_title','This is the page title')

@section('sidebar')
    This adds to the sidebar
    @parent
@endsection

@section('content')
    Hello!
@endsection

@push('js')
    <script src="/path/to/vue.js"></script>
@endpush