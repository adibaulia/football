<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">register Admin</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="/postRegister">
                  {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-4 control-label">Username</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" required>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-5 col-md-offset-6">
                            <button type="submit" class="btn btn-primary">
                                Regist
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
