<?php
// Conexion.php: Configuración de la base de datos
$host = 'localhost';
$dbname = 'marketzone';
$username = 'root';
$password = '202131603_Jp';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}

// Obtener registros existentes de la base de datos
try {
    $sql = "SELECT nombre, municipio, colonia, problematica FROM puebla";
    $stmt = $pdo->query($sql);
    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al obtener los registros: " . $e->getMessage());
}

// Manejo del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? null;
    $municipio = $_POST['municipio'] ?? null;
    $colonia = $_POST['colonia'] ?? null;
    $problematica = $_POST['problematica'] ?? null;

    // Validar campos
    if (empty($nombre) || empty($municipio) || empty($colonia) || empty($problematica)) {
        $error = "Todos los campos son obligatorios.";
    } else {
        try {
            $sql = "INSERT INTO puebla (nombre, municipio, colonia, problematica) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nombre, $municipio, $colonia, $problematica]);
            header("Location: formulario.php"); // Redirigir para evitar reenvío del formulario
            exit;
        } catch (PDOException $e) {
            $error = "Error al insertar el registro: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Problemáticas</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
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
<body>
    <div class="container">
        <h1>Registro de Problemáticas en Puebla</h1>

        <!-- Mostrar errores si existen -->
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"> <?= htmlspecialchars($error) ?> </div>
        <?php endif; ?>

        <form action="formulario.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="municipio">Municipio:</label>
                <select class="form-control" id="municipio" name="municipio" required>
                    <option value="">Seleccione un municipio</option>
                </select>
            </div>
            <div class="form-group">
                <label for="colonia">Colonia:</label>
                <select class="form-control" id="colonia" name="colonia" required>
                    <option value="">Seleccione primero un municipio</option>
                </select>
            </div>
            <div class="form-group">
                <label for="problematica">Problemática:</label>
                <textarea class="form-control" id="problematica" name="problematica" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <h2>Registros Enviados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Municipio</th>
                    <th>Colonia</th>
                    <th>Problemática</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro): ?>
                    <tr>
                        <td><?= htmlspecialchars($registro['nombre']) ?></td>
                        <td><?= htmlspecialchars($registro['municipio']) ?></td>
                        <td><?= htmlspecialchars($registro['colonia']) ?></td>
                        <td><?= htmlspecialchars($registro['problematica']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            // Cargar municipios desde el JSON
            $.getJSON('municipios.json', function (data) {
                let municipioOptions = '<option value="">Seleccione un municipio</option>';
                $.each(data, function (municipio, colonias) {
                    municipioOptions += `<option value="${municipio}">${municipio}</option>`;
                });
                $('#municipio').html(municipioOptions);

                // Actualizar colonias según el municipio seleccionado
                $('#municipio').change(function () {
                    const selectedMunicipio = $(this).val();
                    if (selectedMunicipio) {
                        let coloniaOptions = '<option value="">Seleccione una colonia</option>';
                        $.each(data[selectedMunicipio], function (index, colonia) {
                            coloniaOptions += `<option value="${colonia}">${colonia}</option>`;
                        });
                        $('#colonia').html(coloniaOptions);
                    } else {
                        $('#colonia').html('<option value="">Seleccione primero un municipio</option>');
                    }
                });
            }).fail(function () {
                alert('Error al cargar los datos de municipios y colonias.');
            });
        });
    </script>
</body>

<footer> <!-- Etiqueta <footer></footer> para indicar que es el píe de página -->
		<img src="img/simplified.png">
		<p class="copyright"> &copy; Copyright Construye-T Knet-2024 </p>
	</footer>
</html>
