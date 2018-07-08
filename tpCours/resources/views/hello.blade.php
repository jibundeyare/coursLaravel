@extends('layout')

@section('contenu')

    <h2>Voici ma liste d'étudiants :</h2>

    <h2>Ajouter un étudiant ici :</h2>
    <form action="/students" method="post">
        {{ csrf_field() }}

        <input type="text" name="firstname" placeholder="Nom">
        <input type="text" name="lastname" placeholder="Prénom">
        <input type="submit" value="Ajout d'un étudiant">
    </form>
    <a href="/students">Afficher la liste des étudiants</a>
@endsection