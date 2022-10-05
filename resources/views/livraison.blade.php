
@extends('layouts.app')

@section('content')

    <h1> formulaire de livraison</h1>
    <form action="{{route('sendliv')}}" method="POST">
    {{ csrf_field() }} 
        <input type="text" name="nom" id="" placeholder="Saisie nom">
        <input type="text" name="adresse" id="" placeholder="Saisie adresse">
        <input type="text" name="numero" id="" placeholder="Saisie numero">
        <input type="text" name="num_user" id="" placeholder="Saisie numero"  hidden value="{{ Auth::user()->name }}">
        <button type="submit">ok</button>
    </form>

@endsection