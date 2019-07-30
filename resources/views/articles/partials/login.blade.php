<form action="{{route('login')}}" class="form-horizontal" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Login</label>
        <div class="col-md-6">
            <input id="name" type="text" name="name" value="" required="required" autofocus="autofocus"
                   class="form-control ">

        </div>
    </div>

    <div class="form-group">
        <label for="password" class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
            <input id="password" type="password" name="password" required="required" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </div>
    </div>
</form>