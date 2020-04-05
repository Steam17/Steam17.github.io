@extends('layouts.simple')

@section('content')
  <div class="h-100 bg-primary">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col d-flex justify-content-center align-items-center">
          <div>
            <div>
              <h1 class="display-5 text-white">
                Please select your location
              </h1>
            </div>
            <div class="row">
              @foreach ($data as $location)
                <div class="col">
                  <a href='/{{ $location->id }}'>
                    <div class="card shadow-none border-0 pt-4 pb-4 text-center h4">
                      {{ $location->name }}
                    </div>
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
