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
                                <input type="text" class="form-control" name="namateam" required autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Formasi</label>
                            <div class="col-md-6">
                              <select name="formasi" class="form-control">
                                  @foreach($formasi as $formasi1)
                                  <option value= {{$formasi1->ID_FORMASI}} > {{$formasi1->BELAKANG}} - {{$formasi1->TENGAH}} - {{$formasi1->DEPAN}} </option>
                                      @endforeach
                                  </select>
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
