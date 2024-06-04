<?php include("./header.html"); ?>
<body>
    <div class="container mt-5">
        <h1>Formulario Presupuesto</h1>

        <!-- Formulario para agregar/editar datos -->
	<!-- Enlace que dirige a la página de la tabla -->
<a href="mostrar_tabla.php" class="btn btn-primary">Mostrar Tabla</a>

        <form action="crud.php" method="POST">
            <div class="form-group">
                <label for="localidad">Localidad:</label>
                <input type="text" class="form-control" id="localidad" name="localidad">
            </div>
            <div class="form-group">
                <label for="oficina">Oficina:</label>
                <select class="form-control" id="oficina" name="oficina">
                    <option value="BOD">BOD</option>
                    <option value="CED">CED</option>
                    <option value="COM">COM</option>
                    <option value="OFC">OFC</option>
                    <option value="OFN">OFN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="razonSocial">Razón Social:</label>
                <input type="text" class="form-control" id="razonSocial" name="razonSocial">
            </div>
            <div class="form-group">
                <label for="fechaInicio">Fecha de Inicio:</label>
                <input type="date" class="form-control" id="fechaInicio" name="fechaInicio">
            </div>
            <div class="form-group">
                <label for="fechaFin">Fecha de Fin:</label>
                <input type="date" class="form-control" id="fechaFin" name="fechaFin">
            </div>
            <div class="form-group">
                <label for="periodo">Periodo:</label>
                <input type="text" class="form-control" id="periodo" name="periodo">
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="text" class="form-control" id="monto" name="monto">
            </div>
            <div class="form-group">
                <label for="idCedi">ID Cedi:</label>
                <input type="text" class="form-control" id="idCedi" name="idCedi">
            </div>
            <div class="form-group">
                <label for="idProveedor">ID Proveedor:</label>
                <input type="text" class="form-control" id="idProveedor" name="idProveedor">
            </div>
            <div class="form-group">
                <label for="idProyecto">ID Proyecto:</label>
                <input type="text" class="form-control" id="idProyecto" name="idProyecto">
            </div>
            <div class="form-group">
                <label for="idEmpresa">ID Empresa:</label>
                <input type="text" class="form-control" id="idEmpresa" name="idEmpresa">
            </div>

            <button type="submit" class="btn btn-primary" name="crear">Crear</button>
        </form>
    </div>

    <!-- Incluir scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</header>

<?php include("./footer.html"); ?>
