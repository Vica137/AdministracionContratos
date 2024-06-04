<?php include("./header.html"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-1">
            <a href=""><img src="media/menu.png" height="75%" width="75%"></a>
        </div>
        <div class="col-1 ml-auto">
            <a href=""><img src="media/nav icons/user.png"></a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row icon-bar">
    <div class="grid-container">
        <div><a href="formulariopsrp.php"><img src="media/ag.png" alt="" width="40px"></a><span>Crear</span></div>
        <div><a href=""><img src="media/ed.png" alt="" width="40px"></a><span>Editar</span></div>  
        <div><a href=""><img src="media/el.png" alt="" width="40px"></a><span>Eliminar</span></div>
      </div>
    </div>
</div>

<div class="container-fluid main-content">
    <div class="row">
		<div class="col-md-2">
            
			                                                             
            
        </div>
        <div class="col-md-5">
            <canvas id="chart1" class="chart-container"></canvas>
            
        </div>
        <div class="col-md-5">
            <canvas id="chart2" class="chart-container"></canvas>
            
        </div>
    </div>
	
<div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="text-box">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sagittis porta venenatis. Quisque pretium orci vitae ultrices pharetra. Praesent porttitor, diam eget malesuada suscipit, dui tortor mattis lectus, eget lacinia nisl diam quis eros.
            </div>
        </div>
    </div>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-kYuwyaXTyYQOcux86aTVo9w5i5f2CxSDKMsFA3HMh6cJBbQssROX4QvcgtQj72l2" crossorigin="anonymous"></script>

<script>
    // Configuración y creación del primer gráfico
    var ctx1 = document.getElementById('chart1').getContext('2d');
    var chart1 = new Chart(ctx1, {
        type: 'pie', // Tipo de gráfico
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                label: 'Dataset 1',
                data: [300, 50, 100],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        },
        options: {
            responsive: true
        }
    });

    // Configuración y creación del segundo gráfico
    var ctx2 = document.getElementById('chart2').getContext('2d');
    var chart2 = new Chart(ctx2, {
        type: 'bar', // Tipo de gráfico
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Dataset 1',
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>


<?php include("./footer.html"); ?>