@extends('layouts.noNav')
@section('title')
  Profile Team {{$team->NAMA_CLUB}}
@endsection
@section('navbar')
  <li><a href="/register">Register Admin</a></li>
@endsection
@section('headerwrap')
  <br><br><br>
  <div class="container">
    <div class="row">


      <h3>  {{$team->NAMA_CLUB}} </h3>
      <h3> Formasi : {{$team->BELAKANG}} - {{$team->TENGAH}} - {{$team->DEPAN}} </h3>

      <table class="table table-responsive table-stripped table-hover" >
      <thead>
        <tr>
          <th>
            Nama Pemain
          </th>
          <th>
            No Punggung
          </th>
          <th>
            Posisi
          </th>
        </tr>
      </thead>
      <tbody

        @foreach ($players as $player)


        <tr>
          <td>
            {{$player->NAMA_PEMAIN}}
          </td>
          <td>
            {{$player->NO_PUNGGUNG}}
          </td>
          <td>
            {{$player->POSISI}}
          </td>

        </tr>

        @endforeach



      </tbody>
      </table>



    </div>
  </div><! --/container -->

@endsection
