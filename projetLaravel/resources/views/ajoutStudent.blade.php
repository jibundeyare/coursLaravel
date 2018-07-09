@extends('layout')

@section('contenu')

    <h1>Ajouter un étudiant ici :</h1>
    <form action="/students" method="post">
        {{ csrf_field() }}

        <input type="text" name="lastname" placeholder="Nom" value="{{ old('lastname')}}">
        @if($errors->has('lastname'))
            <p>{{ $errors->first('lastname') }}</p>
        @endif
        <input type="text" name="firstname" placeholder="Prénom" value="{{ old('firstname')}}">
        @if($errors->has('firstname'))
            <p>{{ $errors->first('firstname') }}</p>
        @endif
        <input type="submit" value="Ajout d'un étudiant">
    </form>
    
    <p><a href="/students">Afficher la liste des étudiants</a></p>
@endsection