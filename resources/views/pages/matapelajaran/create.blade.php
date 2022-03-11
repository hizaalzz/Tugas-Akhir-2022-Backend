@extends('layouts.dashboard')
@section('title', 'Edit mata pelajaran')
@section('content')
<x-page-title>
    <x-slot name="title">Mata Pelajaran</x-slot>
    <x-slot name="item">
        <li class="breadcrumb-item">Mata Pelajaran</li>
        <li class="breadcrumb-item active">Tambah Mata Pelajaran</li>
    </x-slot>
</x-page-title>
<div class="row">
    <div class="col-12">
        @include('messages.alert')
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Tambah Matapelajaran</h3>
                <p class="card-title-desc">Buat matapelajaran baru</p>
                {!! Form::open(['route' => 'matapelajaran.store']) !!}
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Matapelajaran</label>
                    {!! Form::text('nama', null, ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => 'Nama matapelajaran', 'required']) !!}
                </div>
                <div class="form-group">
                    <div class="text-center">
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#guru-table').DataTable();
        }); 

        let form = $('#form-matapelajaran');

        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); }
        })
    </script>
@endsection