<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <header>
        <h1>Blog de Aitor</h1>
    </header>
    <nav>
        <ul>
            <li><a href="../views/homeVerifyed.php">Inicio</a></li> 
            <li><a href="../views/about.html">Sobre mí</a></li>
            <li><a href="../views/articles.html">Articulos</a></li>
            <li><a class="active" href="profile.php">Mi perfil</a></li>
            <li style="float:right"><a href="../views/endSession.html">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section>

        <div class="title"><h2>Perfil</h2></div>

        <article>
            
            <p>Usuario: <?php echo htmlspecialchars($_COOKIE['username']) ?></p>
            <p>Ultima sesión: <?php echo htmlspecialchars($_COOKIE['date']) ?></p>

        </article>


    </section>

    <footer>
        <p>Autor: Aitor Ruiz Torralbo</p>
    </footer>
</body>
</html>