@extends('layouts.main_layout')
@section('content')
    <div id="createOspite">
        <div class="container flex_col align_cen">
            <h1>Modifica Dati Dipendente</h1>

            <form class="form_container flex_col" action="{{ route('update', $employee->id) }}" method="post">

                @csrf
                @method('POST')

                <div class="label_row flex">
                    <label for="firstname">Nome: </label>
                    <input type="text" name="firstname" id="firstname" value="{{ $employee->firstname }}">
                </div>

                <div class="label_row flex">
                    <label for="lastname">Cognome: </label>
                    <input type="text" name="lastname" id="lastname" value="{{ $employee->lastname }}">
                </div>

                <div class="label_row flex">
                    <label for="role">Ruolo: </label>
                    <input type="text" name="role" id="role" value="{{ $employee->role }}">
                </div>

                <div class="label_row flex">
                    <label for="ral">Ral: </label>
                    <input type="text" name="ral" id="document_type" value="{{ $employee->ral }}">
                </div>

                <button class="new" type="submit">Aggiorna</button>
            </form>

        </div>
    </div>
    </div>
@endsection
