@extends('layouts.master')
@section('title', 'Mi Formulario')

@section('header')
@stop

@section('navbar')
@parent
@stop

@section('contenido')
        <h1>Login</h1>
        <br>
        <form action="{{action('UserController@login')}}" method="post" >
        @csrf
        <label for="user">Usuario</label>
        <input type="text" name="user" ><br>

        <label for="password">Password</label>
        <input type="password" name="password"><br>
        
        <input type="submit" value="Submit">
    </form>
@stop

@section('footer')

@parent
@stop