@extends('layouts.app')
@section('contenido')

<div class="container-login">
    <h1>Entrar</h1>

    <form method="POST" action="{{route('login')}}">
        @csrf

        <input type="text" placeholder="Ingrese su email" name="email">
        <input type="password" placeholder="Contraseña" name="password">

        <button type="submit">Iniciar sesion</button>
    </form>

    <div class="help">
        <div>
            <input type="radio" id="me">
            <label for="me">Lembre-se de mim</label>
        </div>

        <a href="">Precisa de ajuda?</a>
    </div>

    <a href="" class="facebook"><img src="./assets/img/facebook.png" class="icon"/> Conectar com Facebook</a>

    <div class="connect">
        <p>Novo por aqui? <span id="span01">Assine agora</span>.</p>
        <p>Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <span id="span02">Saiba mais.</span></p>
    </div>
</div>
@endsection
