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
                    <a href="proyectos">Nuestros proyectos</a>
                </div>
            <?php endif; ?>
        </nav>
    </header>

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
