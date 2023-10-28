@extends('layouts.app')

@section('title', 'INDEX CRUD')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection




@section('content')

<div class="login-root">
    <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9000;">
        <div class="div_de_a">
            <a href="{{ route('note.create') }}" class="enlace">NUEVA NOTA</a>
        </div>
        <h1>LISTADO DE LAS NOTAS</h1>
        <table class="zigzag">
            {{-- @dd('NOTES: ', $notes) --}}
            @if( $notes )
                <thead>
                    <tr>
                        <th class="header">ID</th>
                        <th class="header">Título</th>
                        <th class="header">Descripción</th>
                        <th class="header" colspan="3">ACCIONES</th>

                    </tr>
                </thead>
                @endif
            <tbody>
            @forelse ($notes as $note)
                        <tr></tr>
                        <tr></tr>
                        <tr class="first">
                            <td>{{ $note->id }}</td>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->description }}</td>
                            <td class="verde">   <a href="{{ route('note.show', $note->id) }}">SHOW</a></td>
                            <td class="amarillo"><a href="{{ route('note.edit', $note->id) }}">EDIT</a></td>
                            <td class="rojo">
                                <form action="{{ route('note.destroy', $note->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="DELETE" class="delete">
                                </form>

                            </td>
                        </tr>
            @empty
                <p class="alert-danger"> * La lista de usuarios está vacia.</p>
            @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        {{-- <p class="pagination my-2 text-sm-center text-indigo-700">

                        </p> --}}
                        <div class="pagination">
                            {{ $notes->links() }}
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>

</div>
@endsection




@section('scripts')
    {{-- <script type="text/javascript" src=""></script> --}}
@endsection
