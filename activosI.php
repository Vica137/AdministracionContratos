<?php include("./header.html"); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-kYuwyaXTyYQOcux86aTVo9w5i5f2CxSDKMsFA3HMh6cJBbQssROX4QvcgtQj72l2" crossorigin="anonymous"></script>
    <div class="container-fluid">
	<div class="row-sm-12">
		<div class="col-1">
			<a href=""><img src="media/menu.png" width="50px"></a>
            <a href=""><img src="media/nav icons/user.png" alt="" width="50px"></a>
		</div>
	</div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
          <div class="search">
            <input class="search_input" type="text" name="" placeholder="Search here...">
            <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
          </div>
        </div>
      </div>

      <div class="grid-container">
        <div><a href="formularioActivos.php"><img src="media/ag.png" alt="" width="40px"></a><span>Crear</span></div>
        <div><a href=""><img src="media/ed.png" alt="" width="40px"></a><span>Editar</span></div>  
        <div><a href=""><img src="media/el.png" alt="" width="40px"></a><span>Eliminar</span></div>
      </div>

      <div class="grid-container2">
        <div></div>
        <div><a href=""><img src="media/iconos/monitor.png" alt="" width="120px"></a><p>Monitores</p></div>
        <div><a href=""><img src="media/iconos/router.png" alt="" width="120px"></a><p>Módems</p></div>
        <div><a href=""><img src="media/iconos/servidor.png" alt="" width="120px"></a><p>Servidores</p></div>  
        <div><a href=""><img src="media/iconos/laptop.png" alt="" width="120px"></a><p>Equipos</p></div>
        <div></div>
      </div>

      <div class="card-container">
        <div></div>
        <div class="card" style="width: 14rem;">
            <img src="media/monitor.jpg" class="card-img-top" alt="monitor">
            <div class="card-body">
            <h5 class="card-title">Monitor Lenovo</h5>
            <p class="card-text">Cuenta con una resolución de 3840 x 2160, una relación de aspecto 16:9 y una gama de colores 100% sRGB.</p>
            <a href="#" class="btn btn-primary">Ver detalles</a>
            </div>
        </div>

        <div class="card" style="width: 14rem;">
            <img src="media/modem.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Módem TP-Link</h5>
              <p class="card-text">Combina un módem ADSL2+ y un router inalámbrico N, proporcionando tanto conectividad a...</p>
              <a href="#" class="btn btn-primary">Ver detalles</a>
            </div>
          </div>

          <div class="card" style="width: 14rem;">
            <img src="media/servidor.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Servidor Auster</h5>
              <p class="card-text">Permite a los usuarios acceder a páginas web, enviar correos electrónicos, compartir archivos y...</p>
              <a href="#" class="btn btn-primary">Ver detalles</a>
            </div>
          </div>

          <div class="card" style="width: 14rem;">
            <img src="media/laptop.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Laptop Asus</h5>
              <p class="card-text">Cuenta con un procesador Intel Core i7, hasta 16 GB de RAM y hasta 1 TB de almacenamiento SSD.</p>
              <a href="#" class="btn btn-primary">Ver detalles</a>
            </div>
          </div>
          <div></div>
    </div>
</body>
</html>

<?php include("./footer.html"); ?>
