<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{asset('css/styleLogin.css')}}">
</head>
<body>
<div class="login-form" id="login-form">
  <div class="pre">
    <h2>Bienvenido</h2>
    <span>Ingrese sus datos por favor.</span>
  </div>
  <div class="row-dyn">
    <input type="text" id="username" placeholder="Usuario o Correo Electronico" autofocus>
    <input  class="nonActive" type="password" placeholder="Contraseña" id="password">
  </div>
  <div class="row-stat">
    <button id="loginBtn">Siguiente</button>
  </div>
  <div class="post">

  </div>
</div>

 <script src="{{asset('js/styleLogin.js')}}"></script>
</body>
</html>
