@extends('layouts.app')

@section('content')
    <business-list :businesses='@json($data)'></business-list>
@endsection
