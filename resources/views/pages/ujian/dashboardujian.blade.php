@extends('layouts.test')
@section('title', 'Persiapan')
@section('content')
    <div class="w-full bg-blue-500 marquee text-white z-30">
        <p>{{ $sambutan ?? 'Selamat datang ' . auth()->user()->nama . ' Jangan lupa berdoa sebelum mengerjakan ujian, dan kerjakanlah dengan jujur' }}</p>
    </div>
    <div id="container">
        <x-alert-test />
        
    </div>
@endsection