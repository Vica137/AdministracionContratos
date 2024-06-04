
<?php include("./header.html"); ?>

<div class="container mt-5">
    <h1>Formulario de Activo Informático</h1>
    
    <!-- Formulario para agregar datos de activo informático -->
    <form action="guardar_activo.php" method="POST">
        <div class="form-group">
            <label for="idActivo">ID Activo Informático:</label>
            <input type="number" class="form-control" id="idActivo" name="idActivo" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" maxlength="40" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría:</label>
            <select class="form-control" id="categoria" name="categoria" required>
                <option value="T">T</option>
                <option value="S">S</option>
                <option value="G">G</option>
            </select>
        </div>
        <div class="form-group">
            <label for="idSubcategoria">ID Subcategoría:</label>
            <input type="number" class="form-control" id="idSubcategoria" name="idSubcategoria" required>
        </div>
        <p></p>
        <p></p>
        <p></p>
        <h1></h1>

        <!-- Enlace que dirige a la página de la tabla -->
    <div class="d-flex justify-content-center mb-4">
        <a href="mostrar_tablaactivos.php" class="btn btn-primary mr-2">Mostrar Tabla</a>
        <a href="guardar_activo.php" class="btn btn-primary">Crear Activo</a>
    </div>

    </form>
</div>

<!-- Incluir scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include("./footer.html"); ?>