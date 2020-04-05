@extends('layouts.simple')

@section('content')
    <div class="container">
      <h1 class="mb-5">
        Get your giftcard for {{ $data->name }}
      </h1>
      <gift-card :business='@json($data)'></gift-card>
      <div class="mt-5">
        <a href="/">Back to SuppBiz</a>
      </div>
    </div>
@endsection