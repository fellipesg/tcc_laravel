
@extends('layout')

@section('content')
  <h1>Curso: {{ $course->nome }}</h1>

  <div><strong>Name: </strong> {{ $course->nome }}</div>
  <div><strong>Description: </strong> {{ $course->identificador }}</div>

@endsection
