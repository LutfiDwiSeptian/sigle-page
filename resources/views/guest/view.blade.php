@extends('layouts.guest.guestlayout')

@section('title', 'Home Page')

@section('content')

    @if($isMobile)

    @elseif($isTablet)

    @elseif($isDesktop)

    @endif

@endsection
