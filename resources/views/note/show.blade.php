@extends('layouts.app')

@section('title', 'SHOW CRUD')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/show.css') }}">
@endsection




@section('content')
<div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9000;">
    <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        <h1>DETALLES DE LA NOTA</h1>
    </div>
    <div class="formbg-outer">
        <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
                <h1 class="centrado circle flex flex-center">#{{ $note->id }}</h1>
                <h2>{{ $note->title }}</h2>
                <p>{{ $note->description }}</p>

            </div>
            <p class="my-4">
                {{--   --}}
                <span class="text-xs">Entrada creada el
                    <strong class="text-indigo-700 font-bold">{{$note->created_at->format('d-m-Y')}}</strong>
                    a las <strong class="text-indigo-700 font-bold">{{$note->created_at->format('H:m:s')}} hs.</strong>
                </span>
            </p>
        </div>
        <div class="footer-link padding-top--24">






            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
            <span></span>
            <span class="volver"><a href="{{ route('note.index') }}">VOLVER</a></span>
            <span></span>
            </div>
        </div>
    </div>
</div>


@endsection




@section('scripts')
    {{-- <script type="text/javascript" src=""></script> --}}
@endsection
