@extends('master')

@section('content')
<h1>{{ $title }}</h1>

{!! $content !!}

{{-- This is a Blade comment. --}}

<p>{{ date('jS F Y') }} {{-- 19th September 2017 --}}</p>

<p>@{{ order_total }}</p>

@verbatim
    Postage: {{ postage_total }}<br />
    Order: {{ order_total }}
@endverbatim

@php
    for ($i = 1; $i <= 10; $i++) {
        echo $i.'<br />';
    }
@endphp
@endsection