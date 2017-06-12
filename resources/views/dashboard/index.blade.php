@extends('layouts.master')
@section('title')
  Dashboard Admin
@endsection
@section('headerwrap')
  <br><br><br>
  <div class="container">
     @include('flash::message')
    <div class="row centered">
      <div class="col-md-4 col-md-offset-2">
        <i class="fa fa-sign-in" style="font-size:100px"></i>

            <div class="top-right links">
                    <p><br><a href="/insertPertandingan" class="btn btn-theme">Insert Pertandingan</a></p>
            </div>

      </div>
      <div class="col-md-4">
        <i class="fa fa-flask" style="font-size:100px"></i>
        <p><br/><a href="/insertTeam" class="btn btn-theme">Insert Team</a></p>
      </div>
    </div>
  </div><! --/container -->

@endsection
