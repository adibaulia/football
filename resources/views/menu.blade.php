@extends('layouts.noNav')
@section('headerwrap')
  <br><br><br>
  <div class="container">
    <div class="row centered">
      <div class="col-md-4 col-md-offset-2">
        <i class="fa fa-sign-in" style="font-size:100px"></i>
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}" class="btn btn-theme">Home</a>
                @else
                    <p><br><a href="{{ url('/login') }}" class="btn btn-theme">Login</a></p>
                @endif
            </div>
        @endif
      </div>
      <div class="col-md-4">
        <i class="fa fa-flask" style="font-size:100px"></i>
        <p><br/><a href="#" class="btn btn-theme">List Pertandingan</a></p>
      </div>
    </div>
  </div><! --/container -->



@endsection
