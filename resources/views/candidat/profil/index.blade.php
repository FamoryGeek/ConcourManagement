@extends('layouts.candidat')
@section('content')
    @livewire('candidat.profil.index', ['id' => $candidats->id])
@endsection
