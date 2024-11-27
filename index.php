<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
    <a href="index.php">
    <img src="img\logoLetras.png" style="width: 200px; height: auto;">
</a>
        <nav>
            <?php if (isset($user)): ?>
                <p>Hello, <?= htmlspecialchars($user["name"]) ?> | <a class="logout-link" href="logout.php">Log out</a></p>
            <?php else: ?>
                <div class="auth-links">
                    <a href="login.php">Log in</a>
                    <a href="signup.html">Sign up</a>
                    <a href="formulario">Formulario</a>
                    <a href="proyectos.html">Nuestros proyectos</a>
                </div>
            <?php endif; ?>
        </nav>
    </header>

    <div class="news-cards">
            <div>
                <img src="img/vision.jpg" alt="News 1">
                <h3>Innovación Educativa.</h3>
                <p>Explora las últimas innovaciones educativas en TutorTree. Desde recursos interactivos hasta sesiones de tutoría en línea, estamos transformando la forma de aprender.</p>
                <a href="#">Leer más</a> <i class="fas fa-angle-double-right"></i>
            </div>
            <div>
                <img src="img/spect.jpeg" alt="News 1">
                <h3>Conoce a Nuestros Tutores</h3>
                <p>Descubre las historias inspiradoras de nuestros tutores destacados. Expertos dedicados que guían a los estudiantes hacia el éxito académico. ¡Conócelos ahora!</p>
                <a href="Productos.html">Conocer a los tutores</a> <i class="fas fa-angle-double-right"></i>
            </div>
            <div>
                <img src="img/spect2.jpeg" alt="News 1">
                <h3>Crecimiento Educativo: Raíces de Éxito</h3>
                <p>Explora cómo un estudiante en TutorTree expande sus horizontes, explorando nuevas ramas del conocimiento. Descubre cómo nuestras tutorías cultivan la curiosidad y el aprendizaje continuo.</p>
                <a href="#">Leer más</a> <i class="fas fa-angle-double-right"></i>
            </div>
            <div>
                <img src="img/spect3.jpeg" alt="News 1">
                <h3>Colaboración Estudiantil</h3>
                <p>¡Uniendo mentes brillantes! Lee cómo la colaboración estudiantil en TutorTree está creando comunidades de aprendizaje efectivas y amigables.</p>
                <a href="#">Leer más</a> <i class="fas fa-angle-double-right"></i>
            </div>
        </div>

    <div class="container">
        <div class="section">
            <h2>Nuestra Visión</h2>
            <p>
                Conectar ideas y construir un planeta sostenible para todos. Nuestro objetivo es fomentar la innovación y apoyar proyectos que marquen una diferencia positiva en la sociedad.
            </p>
        </div>

        <div class="section">
            <h2>Nuestra Misión</h2>
            <p>
                Empoderar a las comunidades mediante herramientas tecnológicas, impulsando la colaboración para crear soluciones innovadoras y sostenibles en infraestructura e industria.
            </p>
        </div>
    </div>

    <footer>
        ¡Síguenos en nuestras redes sociales!
    </footer>
</body>
</html>
