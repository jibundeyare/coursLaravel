@extends('layout')

@section('contenu')
    <h1>Ajouter un étudiant</h1>

    <form action="/students" method="POST">
        {{ csrf_field() }}

        <input type="text" name="lastname" placeholder="Nom">
        <input type="text" name="firstname" placeholder="Prénom">
    </form>
@endsection