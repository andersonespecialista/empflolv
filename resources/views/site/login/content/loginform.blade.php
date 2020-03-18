@extends('site.layouts.floriano-layout')

@section('content')

<div id="form">
    
    <form class="form-signin" action='login' method='post'>
      <input type="hidden" name="_token" value=" {{ csrf_token() }}">
        <div class="text-center mb-4">
	  
        <!--    		
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        -->
        
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
          <input type="email" id="inputEmail" style="border: .5px solid #ced4da; border-radius: .25rem; transition: all .1s ease-in-out;" class="form-control" name="email" @if(old('email')) value="{{old('email')}}" @endif placeholder="Email address" required autofocus>
          <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
          <input type="password" id="inputPassword" name="password" style="border: .5px solid #ced4da; border-radius: .25rem; transition: all .1s ease-in-out;" class="form-control" placeholder="Password" required>
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
        <button class="btn btn-lg btn-block" style="background-color: #04a4e8; color: white" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>

</div>

@endsection


@push('styles')
    <link rel="stylesheet" href="css/floating-labels.css" type="text/css">
@endpush


{{--

O arquivo que direciona para login
nome arquivo: AuthenticatesUsers
path: vendor\laravel\ui\auth-backend\AuthenticatesUsers.php

--}}

