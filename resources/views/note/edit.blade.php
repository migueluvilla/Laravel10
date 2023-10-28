@extends('layouts.app')

@section('title', 'EDIT CRUD')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
@endsection




@section('content')
<div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9000;">
    <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        <h1><a href="#" rel="dofollow">FORMULARIO DE ACTUALIZACIÓN</a></h1>
    </div>
    <div class="formbg-outer">
        <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
                <span class="padding-bottom--15">Puedes modificar estos valores</span>
                <form id="stripe-login" action="{{ route('note.update', $note->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="field padding-bottom--24">
                    <label for="title">Título</label>
                    <input  type="text"
                            name="title"
                            value="{{ old('title', $note->title) }}"
                            class="@error('title') is-invalid @enderror"
                            >

                            @error('title')
                                <p class="alert-danger">* {{ $message }}</p>
                            @enderror
                    </div>
                    <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                        <label for="description">Descripción</label>
                        {{-- <div class="reset-pass">
                            <span>description</span>
                        </div> --}}
                    </div>
                    <input  type="text"
                            name="description"
                            value="{{ old('description', $note->description) }}"
                            class="@error('description') is-invalid @enderror"
                            >

                            @error('description')
                                <p class="alert-danger">* {{ $message }}</p>
                            @enderror
                    </div>

                    <div class="field padding-bottom--24">
                    <input type="submit" name="submit" value="Actualizar nota">
                    </div>

                </form>
            </div>
        </div>
        <div class="footer-link padding-top--24">
            <span>Este formulario permite actualizar los datos de la Nota seleccionada</span>
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
