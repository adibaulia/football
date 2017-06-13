@extends('layouts.master')
@section('title')
  Pilih Team
@endsection
@section('headerwrap')
  <br><br>
<div class="container">
    <div class="row">

        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Pertandingan</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/addPilihTeam">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Team Home</label>
                            <div class="col-md-6">
                              <select name="teamhome" class="form-control">
                                  @foreach($pilihTeam as $team)
                                  <option value= {{$team->ID_CLUB}} > {{$team->NAMA_CLUB}} </option>
                                      @endforeach
                                  </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Team Away</label>
                            <div class="col-md-6">
                              <select name="teamaway" class="form-control">
                                  @foreach ($pilihTeam as $team)
                                    <option value={{$team->ID_CLUB}}> {{$team->NAMA_CLUB}}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-lg-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Pertandingan
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
