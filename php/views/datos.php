<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <br><br>
    <div>
        <center><h1>Siembra de Maíz</h1></center>
    </div>
    <br>
    <div class="container">
        <div class="row" >
            <div class="col-md-6 offset-md-3" style="background-color: #ffffff">
            <br>
                <!--<form action="progreso.php" get="POST">-->
					<form action="php/controller/action_boton.php">
                	<select class="form-control form-control-lg " width="50" height="70" border="1" align="center">
				  <option>Selecciona tipo de semilla</option>
				  <option>RX-715</option>
				  <option>RX-717</option>
				  <option>A 7573</option>
				  <option>ANTÍLOPE</option>
				  <option>CAMALEÓN</option>
				  <option>FAISAN</option>
				  <option>FAISAN</option>
				  <option>ANTÍLOPE Y</option>
				  <option>CARIBÚ Y</option>
				  <option>RINOCERONTE</option>
				  <option>OCELOTE</option>
				  <option>ALBATROS</option>
				  <option>ARMADILLO</option>
				  <option>CIMARRÓN</option>				  
				</select>
				<select class="form-control form-control-lg " name="resul" >
				  <option>Selecciona el mes</option>
				  <option value="Enero, Octubre, Noviembre, Diciembre">Enero, Octubre, Noviembre, Diciembre</option>
				  <option value="Febrero, Marzo, Abril, Mayo">Febrero, Marzo, Abril, Mayo </option>
				  <option  value="Junio, Julio, Agosto, Septiembre">Junio, Julio, Agosto, Septiembre</option>
				</select>
				<select class="form-control form-control-lg " name=" resul">
				  <option>Selecciona la Temperatura del Suelo</option>
				  <option value="Más de 15°C">Más de 15°C</option>
				  <option  value="10°C Aprox<">10°C Aprox</option>
				  <option  value="Menos de 5°C">Menos de 5°C</option>
				</select>
				<select class="form-control form-control-lg " >
				  <option>Selecciona el tipo de siembra que quires realizar</option>
				  <option>Temporal</option>
				  <option>Riego</option>
				</select>
				<br>
				<div>
                <center><button type="sumbit" class="btn"  style="background-color: #238E36;"><h3>Resultado</h3></button></center>
                
                </div>
                <br>
                </form>
            </div>
        </div>
    </div>
</body>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
