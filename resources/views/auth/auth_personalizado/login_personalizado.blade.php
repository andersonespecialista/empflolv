<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/ico-hm.ico">

    <title>Login hosting manager</title>
	
    <!-- Bootstrap core CSS -->
    <link href="css/app.css" rel="stylesheet">  
	

    <!-- Custom styles for this template -->
	  <link href="css/floating-labels.css" rel="stylesheet">
	
    <!--
	
	-->
  </head>

  <body style="background-color: white">
    <form class="form-signin" action='login_validation' method='post'>
      <input type="hidden" name="_token" value=" {{ csrf_token() }}">
      <div class="text-center mb-4">
	  
		<!--
        
		
		<img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		-->
        <h1>Empregos Floriano</h1>
		<img class="" src="imagem/logo-hm/logo.png" alt="" width="180" height="180" style="margin-top: -85px; margin-bottom: -50px">
    
		<img src="imagem/logo-hm/logo-letreiro-fundo-preto.png" alt="" width="300" style="margin-bottom: -5px">
        
		<!--
		<h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
		-->
        
        <!--
        <p>Gerenciamento de hoteis e pousadas <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
        -->
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" name="email" @if(old('email')) value="{{old('email')}}" @endif placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>
      
      
      @if($errors->all() && $errors->all() != 'null')
      <div class="alert alert-danger">
        <ul class="">
          @foreach($errors->all() as $key => $erro)
            @if($key == 'msg')
              <p style="color:#e3342f; font-size:12px; font-family:Nunito,sans-serif; Weight:700">Usuário ou senha invalido</p>
            @else
              <li style="color:#e3342f; font-size:12px; font-family:Nunito,sans-serif; Weight:700">{{$erro}}</li>
            @endif
          @endforeach
        </ul>
      </div>
      @endif 
      <?php 
        
        /*
        if(old('msg')){
          
          echo '<p style="color:#e3342f; font-size:12px; font-family:Nunito,sans-serif; Weight:700">Usuário ou senha invalido</p>';
        }
        */

        
      ?>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-block" style="background-color: #04a4e8; color: white" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
    
  </body>
</html>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



@section('content')
{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}


<form class="form-signin" action='login_validation' method='post'>
      <!--
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      -->
      <img class="mb-4" src="imagem/avante_restobeer_gray.jpg" alt="" width="300" height="">
      <!--<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>-->
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="hidden" name="_token" value=" {{ csrf_token() }}">
      <?php 
        if(isset($dados['msg'])){   
          echo '<input style="box-shadow-color:#f8cccb; background-color:white" value="'. $dados["email"] .'" type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>';
        }else{
          echo '<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>';
        }
        // <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      ?>
      
      <label for="inputPassword" class="sr-only">Password</label>
      <?php 
        if(isset($dados['msg'])){   
          
          echo '<input style="" type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>';
        }else{
        echo '<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>';
        }
      ?>

      <?php 
        if(isset($dados['msg'])){
          echo '<p style="color:#e3342f; font-size:14px; font-family:Nunito,sans-serif; Weight:700">Usuário ou senha invalido</p>';
        }
        // <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      ?>
      
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
@endsection




