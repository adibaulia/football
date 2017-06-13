@extends('layouts.noNav')
@section('title')
  Landing Page
@endsection
@section('navbar')
  <li><a href="/register">Register Admin</a></li>
@endsection
@section('headerwrap')
  <br><br><br>
  <div class="container">
    <div class="row centered">
      <div class="col-md-4 col-md-offset-2">
        <i class="fa fa-sign-in" style="font-size:100px"></i>
            <div class="top-right links">
                    <p><br><a href="{{ url('/login') }}" class="btn btn-theme">Login Admin</a></p>
            </div>
      </div>
      <div class="col-md-4">
        <i class="fa fa-th-list" aria-hidden="true" style="font-size:100px"></i>
        <p><br/><a href="/listPertandingan" class="btn btn-theme">List Pertandingan</a></p>
      </div>
    </div>
  </div><! --/container -->

@endsection
