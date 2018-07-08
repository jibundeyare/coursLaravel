@extends('layout')

@section('contenu')
<h1>Liste des étudiants</h1>

<br>

<ul>
    @foreach($students as $student)
        <li>{{ $student->firstname }} {{ $student->lastname }}</li>
    @endforeach
</ul>
<a href="/">Afficher la page d'accueil</a>
@endsection