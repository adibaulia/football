@extends('layouts.master')
@section('title')
  Tambah Team
@endsection
@section('headerwrap')
  <br><br>
<div class="container">
    <div class="row">

        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Team</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/addTeam">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Nama Team</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="namateam" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="team" class="col-md-4 control-label">ID Team</label>

                            <div class="col-md-6">
                                <input id="team" type="number" class="form-control" name="idteam" required autofocus>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-6">
                                <button type="submit" class="btn btn-primary">
                                    Tambah!
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
