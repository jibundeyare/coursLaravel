@extends('layout')

@section('contenu')
    <h1>Liste des étudiants</h1>

    <ul>
        @foreach($students as $student)
            <li>{{ $student->firstname }} {{ $student->lastname }}</li>
        @endforeach
    </ul>
    <p><a href="/add-student">Ajouter un étudiant</a></p>
@endsection