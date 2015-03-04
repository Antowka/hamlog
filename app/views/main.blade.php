@include('header')
<div class="container container-fluid">
    <div class="row">
        <div class="col-sm-3 login-form">
            {{ Form::open(array('url' => '/')) }}
                        <h1>Login</h1>

                        <!-- if there are login errors, show them here -->
                        <p>
                                {{ $errors->first('email') }}
                                {{ $errors->first('password') }}
                        </p>

                        <div class="row">
                           {{ Form::text('email', Input::old('email'), array('placeholder' => 'email', 'class'=>'form-control')) }}
                        </div>

                        <div class="row">
                           {{ Form::password('password', array('placeholder' => 'password', 'class'=>'form-control')) }}
                        </div>
                        
                        <div class="row">
                           {{ Form::submit('LogIn', array("class"=>"btn btn-primary")) }}
                        </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@include('footer')
