

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <title>Software evaluador</title>
</head>
<body>

    <header class="bg-secondary text-white" height="240">
        <nav class="navbar">
            <div class="container-fluid">
                <div>
                    <a href="#">
                    <img alt="gob.mx" src="assets/images/logo_gobhidalgo.png" alt="" width="200"  height="150" >
                    </a>
                </div>
                <div class="nav navbar-nav text-center">
                    <h1>Dirección General y Superación Docente</h1>
                </div>
            </div>
        </nav>
    </header>
    <main class="bg-light"> 
         <div class="h3 m-2">
        <div class="d-flex flex-row mb-3 justify-content-between">
            <div class="p-2" id="name-init">
            <?php 
                session_start();
                $usuario = $_SESSION['usuario'];
                echo '<div id="rfc" data-nombre="'.$usuario.'">'.$usuario.'</div>';
            ?>
            </div>
            <div class="p-2">
                <a href="logout.php" class="btn btn-success text-white">cerrar sesión</a>
            </div>
          </div>
        
    </div>
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">SIECEDDEN</h2>
        <div class="text-center mb-5 text-dark">Sistema Informático para la Evaluación y el Control del Estímulo al Desempeño Docente en las Escuelas Normales</div>
        <div class="card my-5">

          	<form action="uploadacademiaonemaestria.php" method="POST" enctype="multipart/form-data">
      <h4 class="text-center">Cargar Múltiple Archivos</h4>
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="miarchivo[]" name="miarchivo[]" multiple="">
          </div>
          <button type="submit" class="btn btn-primary">Cargar Multiple</button>
           <a href="borrararchivomaestria.php">borrar archivo</a>
        </div>
    </form>
            
<div class="alert alert-info" id="estado"></div>
            </div>

        </div>
        </div>


    </div>



    <p></p>
    </main>
    <footer class="bg-secondary text-white text-center text-lg-start bottom">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                
            </div>
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
              <h5 class="text-center">Contacto</h5>
                <div class="text-center">
                <p>Blvd. Felipe Ángeles s/n C.P. 42083,Pachuca de Soto, Hidalgo, México</p> 
                <p>Horario de atención: 09:00 a 16:30</p>
                
                <p>Dirección General de Formación y Superación Docente  Tel. 771 791 42 73 y 771 791 45 13</p>
                <p>Departamento de Educación Normal Tel. 771 710 05 84</p>
                </div>       
            </div>
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                <div class="text-end">
                    
                </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript">
    const $inputArchivos = document.querySelector("#inputArchivos"),
    $btnEnviar = document.querySelector("#btnEnviar"),
    $estado = document.querySelector("#estado");
$btnEnviar.addEventListener("click", async () => {
    const archivosParaSubir = $inputArchivos.files;
    if (archivosParaSubir.length <= 0) {
        // Si no hay archivos, no continuamos
        return;
    }
    // Preparamos el formdata
    const formData = new FormData();
    // Agregamos cada archivo a "archivos[]". Los corchetes son importantes
    for (const archivo of archivosParaSubir) {
        formData.append("archivos[]", archivo);
    }
    // Los enviamos
    $estado.textContent = "Enviando archivos...";
    const respuestaRaw = await fetch("./guardar.php", {
        method: "POST",
        body: formData,
    });
    const respuesta = respuestaRaw.json();
    // Puedes manejar la respuesta como tú quieras
    console.log({ respuesta });
    // Finalmente limpiamos el campo
    $inputArchivos.value = null;
    $estado.textContent = "Archivos enviados";
});
</script>
</body>
</html>