@extends('layout')

@section('contenu')

    <h1>Ajouter un étudiant ici :</h1>
    <form action="/students" method="post">
        {{ csrf_field() }}

        <input type="text" name="firstname" placeholder="Nom">
        <input type="text" name="lastname" placeholder="Prénom">
        <input type="submit" value="Ajout d'un étudiant">
    </form>
    <a href="/students">Afficher la liste des étudiants</a>
@endsection