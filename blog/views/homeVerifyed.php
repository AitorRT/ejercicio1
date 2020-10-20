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
            <li><a class="active" href="homeVerifyed.php">Inicio</a></li>
            <li><a href="about.html">Sobre mí</a></li>
            <li><a href="articles.html">Articulos</a></li>
            <li ><a href="../controllers/profile.php">Mi perfil</a></li>
            <li style="float:right"><a href="endSession.html">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section>
        <article>
            <div class="title"><h2>Inicio</h2></div>
            <?php 
            if(isset($_COOKIE['username'])){
                            echo "<p>Bienvenido <b>" . $_COOKIE['username'] . "</b>, gracias por iniciar sesión.</p>";
            }
            if(isset($_COOKIE['date'])){
                echo "Ultima sesión iniciada: <b>" . $_COOKIE['date'] . "</b>.";
            }
            ?>
            <p>Un blog dónde encontraras información varía sobre videojuegos y streams.</p>
            <p>Para encontrar la información completa, porfavor, registrate o inicia sesión con tu cuenta.</p>
        </article>
        <article>
            <iframe src="https://educaciodigital.cat/escolesnuria/moodle/" style="height:450px;width:1000px;"  title="Iframe User"></iframe>
        </article>
    </section>
    <footer>
        <p>Autor: Aitor Ruiz Torralbo</p>
    </footer>
</body>
</html>