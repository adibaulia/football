@extends('layouts.master')
@section('title')
  Tambah Pertandingan
@endsection
@section('headerwrap')
  <br><br>
<div class="container">
    <div class="row">

        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Pertandingan</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Pertandingan</label>
                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="pertandingan" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Stadion</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="stadion" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tanggal Pertandingan</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-6">
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
