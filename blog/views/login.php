<?php 

  if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        header("location:../views/loginCookie.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Aitor</title>
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
  <header>
    <h1>Blog de Aitor</h1>
  </header>
  
  <nav>
    <ul>
        <li><a  href="home.html" >Inicio</a></li>
        <li><a class="active" href="login.php">Iniciar sesión</a></li>
        <li style="float:right"><a  href="register.html">Registrar</a></li>
    </ul>
  </nav>
  <section>
    
    <article>
      <form action="../controllers/login.php" method="post">
        
        <div class="container">
          <div class="title"></div><h2>Iniciar sesión</h2>
          <label for="uname"><b>Usuario</b></label>
          <input type="text" placeholder="Introducir usuario" name="uname" required>
    
          <label for="psw"><b>Contraseña</b></label>
          <input type="password" placeholder="Introducir contraseña" name="psw" required>
    
          <button type="submit">Iniciar sesión</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Recordeu-me en aquest equip.
          </label>
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <a href="home.html"><button type="button" class="cancelbtn">Cancelar</button></a>
        </div>
      </form> 
    </article>
  </section>
  
  <footer>
    <p>Autor: Aitor Ruiz Torralbo</p>
</footer>
</body>
</html>