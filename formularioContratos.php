<?php include("./header.html"); ?>
<body>
    <div class="container mt-5">
        <h1>Formulario de Contrato</h1>
<a href="mostrar_tablaContrato.php" class="btn btn-primary">Mostrar Tabla</a>
        <!-- Formulario para agregar datos de contrato -->
        <form action="guardar_contrato.php" method="POST">
            <div class="form-group">
                <label for="idContrato">ID Contrato:</label>
                <input type="number" class="form-control" id="idContrato" name="idContrato" required>
            </div>
            <div class="form-group">
                <label for="anio">Año:</label>
                <input type="text" class="form-control" id="anio" name="anio" maxlength="4" required>
            </div>
            <div class="form-group">
                <label for="estatus">Estatus:</label>
                <select class="form-control" id="estatus" name="estatus" required>
                    <option value="S">S</option>
                    <option value="N">N</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear Contrato</button>
        </form>
    </div>

    <!-- Incluir scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-kYuwyaXTyYQOcux86aTVo9w5i5f2CxSDKMsFA3HMh6cJBbQssROX4QvcgtQj72l2" crossorigin="anonymous"></script>
</body>
</html>

<?php include("./footer.html"); ?>
