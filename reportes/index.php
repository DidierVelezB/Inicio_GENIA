<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <span class="home-link">HOME</span>
                <div class="icono"></div>
            </div>
            <h1>REPORTES</h1>
        </header>

        <form action="procesar.php" method="POST" class="formulario">
            <div class="form-columna">
                <div class="imagen-perfil">
                    <img src="perfil.png" alt="Foto de perfil">
                </div>
                <label>NOMBRES</label>
                <input type="text" name="nombres" required>

                <label>APELLIDOS</label>
                <input type="text" name="apellidos" required>

                <label>N° DOCUMENTO</label>
                <input type="text" name="documento" required>

                <label>FECHA</label>
                <input type="date" name="fecha" required>
            </div>

            <div class="form-columna">
                <label class="linReporte">LINEA DE REPORTE</label>
                <textarea name="reporte" required></textarea>
                <button type="submit">ENVIAR</button>
            </div>
        </form>
    </div>
</body>
</html>
