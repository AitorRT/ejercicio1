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
        <li><a class="active" href="loginCookie.php">Iniciar sesión</a></li>
        <li style="float:right"><a  href="register.html">Registrar</a></li>
    </ul>
  </nav>
  <section>
    
    <article>
      <form action="../controllers/login.php" method="post">
        
        <div class="container">
          <div class="title"></div><h2>Iniciar sesión</h2>
          <label for="uname"><p><b><?php echo "Usuario: " . $_COOKIE['username']; ?></b></p></label>
          <button name="startSession">Iniciar sesión con el usuario recordado</button>
          <button name="endSession">Cerrar Sesión y iniciar con otro usuario</button>
          
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