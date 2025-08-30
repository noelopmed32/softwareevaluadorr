
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<link rel="icon" href="http://collectivecloudperu.com/blogdevs/wp-content/uploads/2017/09/cropped-favicon-1-32x32.png">
    <title>Docentes</title>
</head>
<body>
    <header class="bg-secondary text-white" height="240">
        <nav class="navbar">
            <div class="container-fluid">
                <div>
                    <a href="#">
                       <img alt="gob.mx" src="assets/images/logo_gobhidalgo.png" width="358">
                    </a>
                </div>
                <div class="nav navbar-nav text-center">
                <h1>Dirección General y Superación Docente</h1>
                </div>
            </div>
        </nav>
    </header>
    <main class="bg-light"> 
    <!-- aqui datos de autenticacion -->
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

         <?php
            include("php/conexion.php");
        ?>                        

          <div class="demo-content">
            <div id="notification-header">
              <div style="position:relative">
                <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="img/icono.png" /></button>
                <div id="notification-latest"></div>
              </div>          
            </div>
          </div>

          <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
          <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
    <!-- acordeon -->
    <div class="accordion m-3" id="accordionExample">
        <!-- acordeon1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Datos Personales
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                            <!-- aqui poner el contenido -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputName" class="col-form-label">Nombre:</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="inputName" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputApellidoP" class="col-form-label">Apellido Paterno:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputApellidoP" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputApellidoM" class="col-form-label">Apellido Materno:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputApellidoM" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputEscuela" class="col-form-label">Escuela:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" id="inputEscuela" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputClaveP" class="col-form-label">Clave Presupuestal:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" id="inputClaveP" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <label for="inputCategoria" class="col-form-label">Categoría:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" id="inputCategoria" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputDescripcion" class="col-form-label">Descripción:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" id="inputDescripcion" class="form-control" aria-describedby="passwordHelpInline" readonly>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputRFC" class="col-form-label">RFC:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" id="inputRFC" class="form-control" aria-describedby="passwordHelpInline"  readonly>
                        </div>
                        <div class="col-auto">
                            <label for="inputCorreo" class="col-form-label">Correo:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" id="inputCorreo" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="container text-center p-2">
                        <button id="savedatospersonales" type="button" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Guardar y continuar
                        </button>
                    </div>
                    <div id="status_datos"></div>
                </div>
            </div>
        </div>
        <!-- acordeon2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Preparación Académica 1
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <!-- aqui poner el contenido -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputlic" class="col-form-label">Licenciatura:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputlic" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputliccombo">
                                <option selected>Seleccionar</option>
                                <option value="1">Constancia</option>
                                <option value="2">Certificado</option>
                                <option value="3">Titulo y Cedula</option>
                              </select>
                          </div>


                         
                           <div class="col-auto">
                          <a href="subirevidenciaacademiaonelicenciatura.php"><button type="button" class="btn btn-success">Subir evidencia</button></a>
                    </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputesp" class="col-form-label">Especialidad:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputesp" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputespcombo">
                                <option selected>Seleccionar</option>
                                <option value="1">Constancia</option>
                                <option value="2">Certificado</option>
                                <option value="3">Titulo y Cedula</option>
                              </select>
                          </div>

                         <div class="col-auto">
                          <a href="subirevidenciaacademiaoneespecialidad.php"><button type="button" class="btn btn-success">Subir evidencia</button></a>
                    </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputmae" class="col-form-label">Maestría:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputmae" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputmaecombo">
                                <option selected>Seleccionar</option>
                                <option value="1">Constancia</option>
                                <option value="2">Certificado</option>
                                <option value="3">Titulo y Cedula</option>
                              </select>
                          </div>

                           <div class="col-auto">
                          <a href="subirevidenciaacademiaonemaestria.php"><button type="button" class="btn btn-success">Subir evidencia</button></a>
                    </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputdoc" class="col-form-label">Doctorado:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputdoc" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputdoccombo">
                                <option selected>Seleccionar</option>
                                <option value="1">Constancia</option>
                                <option value="2">Certificado</option>
                                <option value="3">Titulo y Cedula</option>
                              </select>
                          </div>


                           <div class="col-auto">
                          <a href="subirevidenciaacademiaonedoctorado.php"><button type="button" class="btn btn-success">Subir evidencia</button></a>
                    </div>
                    </div>
                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <button id="saveacademia" type="button" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Guardar y continuar
                            </button>
                        </div>
                    </div>
                    <div id="status_datos_2"></div>
                </div>
            </div>
        </div>
        <!-- acordeon3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Preparación Académica 2
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 
                     <!-- aqui poner el contenido -->
                    <div class="row p-2 align-items-center">
                        <div class="col-auto">
                            <label for="inputidioma" class="col-form-label">Idioma:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputidioma" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputidiomacombo">
                                <option selected>Seleccionar</option>
                                <option value="1">Habla y lee</option>
                                <option value="2">Habla, lee y escribe</option>
                                <option value="3">Dominio total</option>
                              </select>
                          </div>


                          <div class="col-auto">
                          <a href="subirevidenciaacademiatwoidioma.php"><button type="button" class="btn btn-success">Subir evidencia</button></a>
                    </div>
                    </div>
                    <div class="row p-2 align-items-center">
                        <div class="col-auto">
                            <label for="inputcer" class="col-form-label">Certificacion:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputcer" class="form-control" aria-describedby="passwordHelpInline">
                        </div>

                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example" id="inputcercombo" >
                                <option selected>Seleccionar</option>
                                <option value="1">Incompleto</option>
                                <option value="2">Terminado</option>
                              </select>
                          </div>


                          <div class="col-auto">
                          <a href="subirevidenciaacademiatwocertificacion.php"><button type="button" class="btn btn-success">Subir evidencia</button></a>
                    </div>
                    </div>
                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <button type="button" id="saveacademiatwo" class="btn bg-success text-white">Cuardar y continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- acordeon4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingfour">
                <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    Permanencia en el subsistema
                </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                     <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label">Años de Servicio en el Subsistema:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputanio" class="form-control" aria-describedby="passwordHelpInline">
                        </div>

                        <div class="col-auto">
                          <a href="subirevidenciapermanenciaaños.php"><button type="button" class="btn btn-success">Subir evidencia</button></a>
                    </div>
                          </div>
                    </div>
                    

                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label"><b>El documento comprobatorio para este rubro debe ser el F.U.P. expedido por la SEP.</b></label>
                        </div>
                        
                        <div class="col-auto">
                            <button type="button" id="savepermanencia" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Guardar y continuar
                            </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- acordeon5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Calidad
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                     <!-- aqui poner el contenido -->
                   <div id="alertas"></div>
                    <div id="flex-container3">
                    <div><a class="link-dark" href="javascript:generarnuevasalertas()"style="text-decoration: none">Docentes</div></a>
                    <div><a class="link-dark" href="javascript:generarnuevasalertas()"style="text-decoration: none">Investigacion</div></a>
                    <div><a class="link-dark" href="javascript:generarnuevasalertas()"style="text-decoration: none">Difusion</div></a>
             </div>
             <div id="flex-container1">
             <div><a class="link-dark"href="javascript:generarnuevasalertas()"style="text-decoration: none">1.1 Desarrollo de competencias de  los alumnos<br>

&nbsp; &nbsp; 1.2 Apoyo a la docencia<br>
&nbsp; &nbsp; 1.3 Jornadas de observación y práctica  docente<br>

&nbsp; &nbsp; 1.4 Titulación <br>

&nbsp; &nbsp; 1.5   Gestión académico administrativa
</div></a>
<div><a class="link-dark" href="javascript:generarnuevasalertas()"style="text-decoration: none">2.1. Proyectos, avances e informes<br>

&nbsp; &nbsp; 2.2. Proyectos, Avances e informes      presentados en congresos y encuentros de investigación<br>

&nbsp; &nbsp; 2.3. Gestión e investigación

</div></a>
<div><a class="link-dark" href="javascript:generarnuevasalertas()"style="text-decoration: none">3.1. Diplomados, cursos, talleres y/o seminarios a docentes en servicio de educación normal o básica.
<br>

&nbsp; &nbsp; 3.2. Congresos, encuentros, jornadas, conferencias, simposios, paneles, coloquios, exposiciones, debates, intercambio 
<br>


</div></a>
                    </div>
                    

                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label"><b>El documento comprobatorio para este rubro debe ser el F.U.P. expedido por la SEP.</b></label>
                        </div>
                        
                        <div class="col-auto">
                            <button type="button" id="savecalidad" class="btn btn-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Guardar y continuar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p></p>
            <div class="container text-center p-2">
                <a href="panel.php" id="savedatospersonales" class="btn btn-primary text-white">
                    Regresar al panel
                </a>
            </div>
        <p></p>
        </div>
       
    </main>
    
    <footer class="bg-secondary text-white text-center text-lg-start bottom">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                <img src="https://cdn.hidalgo.gob.mx/logo_hgo_2019.png" alt="" width="100"  height="80" class="">
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
                    <a href="#">
                        <img src="http://cdn.hidalgo.gob.mx/escudo_blanco.svg" alt="" width="200"  height="160" class="">
                    </a>
                </div>
            </div>
          </div>
        </div>
      </footer>
      <div class="container boton">
        <a  target="_blanck" href="https://api.whatsapp.com/send/?phone=527751196882"><img class ="boton"src="./whatsapp.png"alt=""></a>
    </div>
<!-- JavaScript Bundle with Popper -->
 <div id="salida"></div>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript"> 
                $(window).ready(regresar);
                $(window).ready(regresaracademiaone);
                $(window).ready(regresaracademiatwo);
                $(window).ready(regresarpermanencia);
                $('#savedatospersonales').click(guardardatospersonales);
                $('#saveacademia').click(guardaracademiaone);
                $('#saveacademiatwo').click(guardaracademiatwo);
                $('#savepermanencia').click(guardarpermanencia);
                $("#inputCategoria").keyup(categorias);
            $("#savecalidad").click(guardarcalidad);

                

                $('#inputlicmos').on('click',()=>{vinculares('#inputlicfile','#inputlicfilevinc')})
                $('#inputespmos').on('click',()=>{vinculares('#inputespfile','#inputespfilevinc')})
                $('#inputmaemos').on('click',()=>{vinculares('#inputmaefile','#inputmaefilevinc')})
                $('#inputdocmos').on('click',()=>{vinculares('#inputdocfile','#inputdocfilevinc')})
                $('#inputidiomamos').on('click',()=>{vinculares('#inputidiomafile','#inputidiomafilevinc')})
                $('#inputcermos').on('click',()=>{vinculares('#inputcerfile','#inputcerfilevinc')})
                $('#inputaniomos').on('click',()=>{vinculares('#inputaniofile','#inputaniofilevinc')})

                function test(){alert('test');}
                function regresar(){
                    $.ajax(
                        {
                            url: 'datos.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputName').val(data[0][0]);
                            $('#inputApellidoP').val(data[0][1]);
                            $('#inputApellidoM').val(data[0][2]);
                            $('#inputEscuela').val(data[0][3]);
                            $('#inputClaveP').val(data[0][4]);
                            $('#inputCategoria').val(data[0][5]);
                            $('#inputRFC').val(data[0][6]);
                            $('#inputCorreo').val(data[0][7])
                            $('#inputDescripcion').val(data[0][8]);
                        }
                    );
                }

                function regresaracademiaone(){
                    $.ajax(
                        {
                            url: 'datosa.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputlic').val(data[0][0]);
                            $('#inputliccombo [ value =' + data[0] [1] + ']').attr("selected",true);
                            $('#inputlicfile').val(data[0][2]);
                            $('#inputesp').val(data[0][3]);
                            $('#inputespcombo [ value =' + data[0] [4] + ']').attr("selected",true);
                            $('#inputespfile').val(data[0][5]);
                            $('#inputmae').val(data[0][6]);
                            $('#inputmaecombo [ value =' + data[0] [7] + ']').attr("selected",true);
                            $('#inputmaefile').val(data[0][8]);
                            $('#inputdoc').val(data[0][9]);
                            $('#inputdoccombo [ value =' + data[0] [10] + ']').attr("selected",true);
                            $('#inputdocfile').val(data[0][11]);
                        }
                    );
                }


                function regresaracademiatwo(){
                    $.ajax(
                        {
                            url: 'datosb.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputidioma').val(data[0][0]);
                            $('#inputidiomacombo [ value =' + data[0] [1] + ']').attr("selected",true);
                            $('#inputidiomafile').val(data[0][2]);
                            $('#inputcer').val(data[0][3]);
                            $('#inputcercombo [ value =' + data[0] [4] + ']').attr("selected",true);
                            $('#inputcerfile').val(data[0][5]);
                        }
                    );
                }


                function regresarpermanencia(){
                    $.ajax(
                        {
                            url: 'datospermanencia.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputanio').val(data[0][0]);
                            $('#inputaniofile').val(data[0][1]);
                        }
                    );
                }


                function categorias(){
                    $('#inputDescripcion').val('ESCRIBE LA CLAVE DE LA CATEGORIA')
                    $('#inputDescripcion').css({'color':'red'});
                    $.ajax(
                        {
                            url: 'categorias.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                categoria: $('#inputCategoria').val(),
                            }
                        }
                    ).done(
                        function(data){
                            $('#inputDescripcion').val(data[0][0]);
                            $('#inputDescripcion').css({'color':'black'});
                        }
                    );
                }

                function guardaracademiaone(){
                    $.ajax(
                        {
                            url: 'guardaracademiaone.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                                inputlic: $('#inputlic').val(),
                                inputliccombo: $('#inputliccombo').val(),
                                inputlicfilevinc: $('#inputlicfile').val(),
                                inputesp: $('#inputesp').val(),
                                inputespcombo: $('#inputespcombo').val(),
                                inputespfilevinc: $('#inputespfile').val(),
                                inputmae: $('#inputmae').val(),
                                inputmaecombo: $('#inputmaecombo').val(),
                                inputmaefilevinc: $('#inputmaefile').val(),
                                inputdoc: $('#inputdoc').val(),
                                inputdoccombo: $('#inputdoccombo').val(),
                                inputdocfilevinc: $('#inputdocfile').val()
                            }
                        }
                    ).done(
                        function(data){
                            $('#status_datos_2').append(data);

                        }
                    );
                }



                function guardaracademiatwo(){
                    $.ajax(
                        {
                            url: 'guardaracademiatwo.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                                inputidioma: $('#inputidioma').val(),
                                inputidiomacombo: $('#inputidiomacombo').val(),
                                inputidiomafile: $('#inputidiomafile').val(),
                                inputcer: $('#inputcer').val(),
                                inputcercombo: $('#inputcercombo').val(),
                                inputcerfile: $('#inputcerfile').val()
                            }
                        }
                    ).done(
                        function(data){
                            $('#status_datos_2').append(data);

                        }
                    );
                }

                function guardarpermanencia(){
                    $.ajax(
                        {
                            url: 'guardarpermanencia.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                rfc: $('#rfc').data('nombre'),
                                inputanio: $('#inputanio').val(),
                                inputaniofile: $('#inputaniofile').val()
                            }
                        }
                    ).done(
                        
                            alert('Al parecer ha llenado el formulario')

                        
                    );
                }
function guardarcalidad() {
                                    $.ajax(
                                     
                    ).done(
                        
                            alert('Guardar los respectivos mensajes')

                        
                    );
                }



                function guardardatospersonales(){
                    $.ajax(
                        {
                            url: 'guardardatos.php',
                            type: 'post',
                            dataType: 'json',
                            data: {
                                inputName: $('#inputName').val(),
                                inputApellidoP: $('#inputApellidoP').val(),
                                inputApellidoM: $('#inputApellidoM').val(),
                                inputEscuela: $('#inputEscuela').val(),
                                inputClaveP: $('#inputClaveP').val(),
                                inputCategoria: $('#inputCategoria').val(),
                                inputDescripcion: $('#inputDescripcion').val(),
                                inputRFC: $('#inputRFC').val(),
                                inputCorreo: $('#inputCorreo').val()
                            }
                        }
                    ).done(
                        function(data){
                            $('#status_datos').append(data);

                        }
                    );
                }



                    function vinculares(dataone,datatwo){
                        
                                    $.ajax(
                                        {
                                            url: 'abrir.php',
                                            type: 'post',
                                            dataType: 'json',
                                            data: {
                                                liga: $(dataone).val(),
                                            }
                                        }
                                    ).done(
                                        function(data){
                                            $(datatwo).replaceWith(data);

                                        }
                                    );
                                }
               function agregarNuevaAlerta(clase, mensaje) {
                 let alertasDiv = document.getElementById("alertas");
  
                 let alerta = document.createElement("DIV");
                  alerta.innerHTML = mensaje
                  + '<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">'
                  + '<span aria-hidden="true">&times;</span>'
                  + '</button>';
                  alerta.classList.add('alert');
                  alerta.classList.add(clase);
                  alerta.classList.add('alert-bs-dismissible');
                  alerta.classList.add('fade');
                  alerta.classList.add('show');
                  alerta.setAttribute("role", "alert");

                  alertasDiv.appendChild(alerta);
                  $(alerta).toggleClass('in out'); 
            }

                 function generarnuevasalertas() {
                     agregarNuevaAlerta('alert-success', '<strong>¡Bienvenido participante!</strong> Usted ha validado toda su información puede cerrar sesión, si desea revisar algún dato solo seleccione la opción..');

            }
              function myFunction() {
        $.ajax({
          url: "php/notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });
               
                

        </script>
    
</body>
</html>
