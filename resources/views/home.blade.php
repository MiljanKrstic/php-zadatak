@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div id="app">
        <form id="form-id">
            <div class=flex-container>
                <div class="info">
                    <h1>Contacts</h1>
                    <div class="info-flex">
                        <h2>First name</h2>
                        <h2>Last name</h2>
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="position-div">
                    <button id="buttonAdd" type="button" class="btn-add-style">Add a Contact</button>
                    <button id="buttonSave" type="submit" class="btn-add-style">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
