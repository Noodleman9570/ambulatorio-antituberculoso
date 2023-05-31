<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

 <style>
  body {
  background-color: #071014;
  background-image: -webkit-linear-gradient(160deg, #071014 0%, #47e79c 100%);
  background-image: -moz-linear-gradient(160deg, #071014 0%, #47e79c 100%);
  background-image: -o-linear-gradient(160deg, #071014 0%, #47e79c 100%);
  background-image: linear-gradient(160deg, #071014 0%, #47e79c 100%);  
    font-family: 'Arial', sans-serif;
    height: 100vh;
}
.login-box {
    margin-top: 75px;
    background: #1A2226;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    border-radius: 15px;
}
.login-title {
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    margin-top: 35px;
    font-weight: bold;
    color: #47e79c;
}
.login-form {
    margin-top: 25px;
    text-align: left;
}
input[type=text] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #47e79c;
    border-top: 0px;
    border-radius: 0px;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: #ECF0F5;
}
input[type=password] {
    background-color: #1A2226;
    border: none;
    border-bottom: 2px solid #47e79c;
    border-radius: 0px;
    margin-bottom: 20px;
    color: #ECF0F5;
}
.form-group {
margin: 30px;
}
.form-control:focus {
    box-shadow: none;
    background-color: #1A2226;
    color: #ECF0F5;
}
.form-control-label {
    font-size: 15px;
    color: #6C6C6C;
    letter-spacing: 1px;
}
.btn-outline-primary {
  width: 200px;
  height: 50px;
  border-radius: 15px;
  cursor: pointer;
  border-color:#47e79c!important;
  color:#47e79c;
  margin-top: 30px;
}
.btn-outline-primary:hover{
  background-color: #071014!important;
  background-image: -webkit-linear-gradient(160deg, #071014 0%, #47e79c 100%)!important;
  background-image: -moz-linear-gradient(160deg, #071014 0%, #47e79c 100%)!important;
  background-image: -o-linear-gradient(160deg, #071014 0%, #47e79c 100%)!important;
  background-image: linear-gradient(160deg, #071014 0%, #47e79c 100%)!important;
  
  color: #ffffff!important;
}
.login-button {
    padding-right: 0px;
    text-align: right;
    margin-bottom: 25px;
}
.login-text {
    padding-left: 0px;
    color: #A2A4A4;
}
.enlace{
    text-decoration: none;
    color: #47e79c;
}

.enlace p{
    margin-left: 20px;
}

 </style>
</head>
<body class="d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center" style="margin:20px;">
      <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-title">
          Regístrate
        </div>
        <div class="col-lg-12 login-form">
          <form method="POST" action="{{ route('validar-registro') }}">
            @csrf
            <div class="form-group">
              <label class="form-control-label">Nombre</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-control-label">Apellido</label>
                <input type="text" name="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-control-label">Cedula</label>
                <input type="text" name="cedula" class="form-control">
            </div>
            <div class="form-group">
              <label class="form-control-label">Email - correo</label>
              <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label class="form-control-label">Número de telefono</label>
              <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-control-label">Contraseña</label>
                <input type="password" name="password" class="form-control" i>
            </div>
            <div class="form-group">
                <label class="form-control-label">Confirmar contraseña</label>
                <input type="password" name="password_confirm" class="form-control" i>
            </div>
            <div class="col-12 login-btm login-button justify-content-center d-flex">
                <button type="submit" class="btn btn-outline-primary">Register</button>
            </div>
            <a class="enlace" href="{{ route('login') }}"><p>Iniciar Sesión</p></a>
        </form>
        </div>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>
