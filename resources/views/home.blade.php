@extends('layouts.app')

@section('content')
    <hero-banner></hero-banner>
    <how-works></how-works>
    <category-list :location='@json($location)' :categories='@json($data)'></category-list>
@endsection
