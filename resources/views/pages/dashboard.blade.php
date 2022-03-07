@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
<x-page-title>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item active">Welcome</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="avatar-sm font-size-20 mr-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-account-supervisor"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <div class="font-size-16">Murid</div>
                        <h6>{{ App\Models\Murid::count() }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="avatar-sm font-size-20 mr-3">
                        <span class="avatar-title bg-soft-danger text-danger rounded">
                            <i class="mdi mdi-account-tie"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <div class="font-size-16">Guru</div>
                        <h6>{{ App\Models\Guru::count() }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="avatar-sm font-size-20 mr-3">
                        <span class="avatar-title bg-soft-warning text-warning rounded">
                            <i class="mdi mdi-google-classroom"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <div class="font-size-16">Kelas</div>
                        <h6>{{ App\Models\Kelas::count() }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Jumlah Siswa</h4>
                <div id="column_chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
    <script src="{{ asset('/libs/apexcharts/apexcharts.min.js') }}"></script>

@endsection