@extends('master')

@section('meta_title','This is the page title')

@section('sidebar','')

@section('content')
    @if ($show_me)
        This will show if $show_me is true
    @elseif ($show_this)
        This will show if $show_me is false, but $show_this is true
    @else
        This will show if $show_me and $show_this are not true
    @endif

    @unless ($thing)
        This will show if $thing is not true
    @endunless

    @isset ($show_me)
        This will show if $show_me is set
    @endisset

    @empty ($records)
        There are no records to display!
    @endempty

    @auth
        You are logged in!
    @endauth

    @guest
        Would you like to register?
    @endguest

    @if (Auth::check())
        You are logged in to a Laravel <5.5 app!
    @endif

    @switch ($number)
        @case (1)
            I'm number one, so why try harder?
            @break
        @case (2)
            I'm a number two.
            @break
        @default
            I am neither a number one or a number two.
    @endswitch

    @for ($item = 1; $item <= 10; $item++)
        {{ $item }}<br />
    @endfor

    @foreach ($people as $person)
        {{ $person }}<br />
    @endforeach

    @forelse ($people as $person)
        {{ $person }}<br />
    @empty
        There are no people!
    @endforelse

    @while (true)
        Infinite loop!
    @endwhile

    @foreach ($people as $person)
        @if ($loop->first)
            The first person is {{ $person }}<br />
        @endif
        @if ($loop->last)
            The last person is {{ $person }}<br />
        @endif
    @endforeach
@endsection
