@extends('layouts.app')

@section('title', 'CREATE CRUD')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
@endsection




@section('content')
    <div class="login-root margin-top-150">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--64">
                <div class="loginbackground-gridContainer">
                <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                    <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                    </div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                    <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 6;">
                    <div class="box-root box-background--blue800 animationRightLeft" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                    <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                    <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                    <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                    <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                    <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                </div>
                <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                    <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
                </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9000;">
                <div class="box-root padding-top--36 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="#" rel="dofollow" style="z-index: 99999;">FORMULARIO</a></h1>
                </div>

                <div class="formbg-outer">
                    <div class="formbg">
                        <div class="formbg-inner padding-horizontal--48">
                            <span class="padding-bottom--15">Introduce una nueva nota</span>
                            <form id="stripe-login" action="{{ route('note.store') }}" method="POST">
                                @csrf
                                <div class="field padding-bottom--24">
                                    <label for="title">Título</label>
                                    <input  type="text"
                                            name="title"
                                            class="@error('title') is-invalid @enderror"
                                            value="{{ old('title') }}">

                                    @error('title')
                                        <p class="alert-danger">* {{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <label for="description">Descripción</label>
                                    </div>
                                    <input  type="text"
                                            name="description"
                                            class="@error('description') is-invalid @enderror"
                                            value="{{ old('description') }}">

                                    @error('description')
                                        <p class="alert-danger">* {{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                <input type="submit" name="submit" value="Nueva nota">
                                </div>

                            </form>
                        </div>
                        @if($errors->any())
                        <div class="alert-danger-div">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>* {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div class="footer-link padding-top--24">
                        <span>Este formulario permite crear una nueva Nota</span>
                        <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                            <span></span>
                            <span class="volver"><a href="{{ route('note.index') }}">VOLVER</a></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




@section('scripts')
    {{-- <script type="text/javascript" src=""></script> --}}
@endsection
