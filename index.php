<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knet</title>
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
                    <a href="formulario.php">Formulario</a>
                    <a href="proyectos.html">Nuestros proyectos</a>
                </div>
            <?php endif; ?>
        </nav>
    </header>

    <div class="news-cards">
            <div>
                <img src="img/vision.jpg" alt="News 1">
                <h3>Visión</h3>
                <p>"Convertirnos en el referente estatal y universitario en la creación e implementación de proyectos que impulsen el desarrollo industrial, la innovación tecnológica y la mejora de la infraestructura social. Aspiramos a ser líderes en la construcción de un futuro sostenible, promoviendo una comunidad más inclusiva, conectada y orientada al bienestar común."</p>
            </div>
            <div>
                <img src="img/mision.png" alt="News 1">
                <h3>Misión</h3>
                <p>"Impulsar la colaboración entre la comunidad estatal y universitaria para desarrollar proyectos que fortalezcan la infraestructura, promuevan la innovación y generen soluciones sostenibles a los desafíos sociales, alineados con los principios del Objetivo de Desarrollo Sostenible 9. Trabajamos para integrar el conocimiento académico y las necesidades locales en iniciativas que transformen positivamente nuestro entorno."</p>
            </div>
            <div>
                <img src="img/proyectos.png" alt="News 1">
                <h3>Proyectos</h3>
                <p>KNET se especializa en el diseño, desarrollo y ejecución de proyectos orientados a resolver problemáticas sociales, con un enfoque particular en infraestructura, innovación y sostenibilidad, alineados al Objetivo de Desarrollo Sostenible 9. Los proyectos que desarrolla esta empresa abarcan diversas áreas estratégicas, integrando a la comunidad estatal y universitaria para maximizar el impacto positivo en el entorno..</p>
                <a href="proyectos.html">Conoce "Construye-T"</a> <i class="fas fa-angle-double-right"></i>
            </div>
            <div>
                <img src="img/problemas.png" alt="News 1">
                <h3>¿Tienes una problematica?</h3>
                <p>KNET ofrece a la comunidad estatal y universitaria un espacio para identificar, analizar y proponer soluciones a problemáticas de infraestructura en sus ciudades, localidades o colonias. Esta iniciativa busca empoderar a las personas permitiéndoles participar activamente en la mejora de su entorno mediante una herramienta de solicitud y colaboración.

A través de esta plataforma, cualquier ciudadano, grupo comunitario o institución puede realizar una petición detallando las dificultades de infraestructura que enfrentan.</p>
                <a href="formulario.html">Leer más</a> <i class="fas fa-angle-double-right"></i>
            </div>
        </div>

        <div class="container">
    <div class="section">
        <h2>Nuestra objetivo de desarrollo sustentable</h2>
        <img src="img/ods9.jpg" alt="Nuestra Visión" style="width: 100%; max-width: 600px; display: block; margin: 0 auto;">
        <p>
    El estado de Puebla es un nodo estratégico en infraestructura y desarrollo urbano en México, lo que lo convierte en un contexto ideal para abordar el <a href="https://www.un.org/sustainabledevelopment/es/infrastructure/" target="_blank">Objetivo de Desarrollo Sostenible (ODS) 9</a>. Este objetivo busca construir infraestructura sostenible, promover la innovación y fortalecer la industrialización inclusiva. La investigación identifica que, además de disciplinas tradicionales como la arquitectura e ingeniería civil, áreas emergentes como la Gestión de Ciudades Inteligentes y las Transiciones Tecnológicas son clave para enfrentar desafíos urbanos como el tráfico vehicular, la falta de conectividad eficiente y la necesidad de espacios sostenibles.
        </p>
    </div>

    <div class="section">
        <div id="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    <input type="radio" name="slider" id="slide4">
    <div id="slides">
        <div id="overflow">
            <div class="inner">
                <div class="slide slide_1">
                <div class="slide-content">
                    <h2>Slide 1</h2>
                    <img src="img/s1.jpg" alt="Description for Slide 1">
                    <p>Content for Slide 1</p>
                </div>
                </div>
                <div class="slide slide_2">
                <div class="slide-content">
                    <h2>Slide 2</h2>
                    <img src="img/s2.jpg" alt="Description for Slide 2">
                    <p>Content for Slide 2</p>
                </div>
                </div>
                <div class="slide slide_3">
                <div class="slide-content">
                    <h2>Slide 3</h2>
                    <img src="img/s3.jpg" alt="Description for Slide 3">
                    <p>Content for Slide 3</p>
                </div>
                </div>
                <div class="slide slide_4">
                <div class="slide-content">
                    <h2>Slide 4</h2>
                    <img src="img/s4.jpg" alt="Description for Slide 4">
                    <p>Content for Slide 4</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div id="controls">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
    </div>
    <div id="bullets">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
    </div>
    </div>

</div>

    </div>

	<footer> <!-- Etiqueta <footer></footer> para indicar que es el píe de página -->
		<img src="img/simplified.png">
		<p class="copyright"> &copy; Copyright Construye-T Knet-2024 </p>
	</footer>
</body>
</html>
