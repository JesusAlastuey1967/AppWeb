<?php
$servidor="localhost";
$usuario="root";
$clave="root";
$baseDeDatos="personal";

$enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
if(!$enlace){echo"Error en la Conexion con el Servidor";}
?>

<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta name=”description” content=”Digitalizacion Empresas” />
        <meta name=”distribution” content=”global” />
        <meta name="keywords" content="Power BI; Power Apps; Power Automate; Microsoft Power Platform; Zaragoza">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina Personal</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="Logo.ico">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Antic&display=swap" rel="stylesheet"> 
        
</head>

<body>

<div class="container">

<!--Menú Navegación -->

<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <button type="button" class="navbar-toggler ml-3 mt-2" data-toggle="collapse" data-target="#miMenu">
                <span class="navbar-toggler-icon"></span>   
            </button>  
        
            <div class="collapse navbar-collapse text-left" id="miMenu"><br>
                <ul class="nav navbar-nav mr-auto ml-3  mt-md-2 text-left">
                    <li class="nav-item">
                        <a href="#inicio" class="nav-link active btn btn-info navegador text-white text-left text-md-center pl-2" data-toggle="tab">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#sobremi" class="nav-link btn btn-info navegador text-white text-left text-md-center pl-2" data-toggle="tab">Sobre Mi</a>
                    </li>     
                    <li class="nav-item">
                        <a href="#contacto" class="nav-link btn btn-info navegador text-white text-left text-md-center pl-2" data-toggle="tab">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link btn btn-info navegador text-white text-left text-md-center pl-2" data-toggle="tab">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pruebaloya" class="nav-link btn btn-info navegador text-white text-left text-md-center pl-2" data-toggle="tab">¡Pruébalo Ya!</a>
                    </li>
                </ul>

                <form class="form-inline" >
                    <input type="text" class="form-control ml-3 mt-1" placeholder="Buscar">
                    <button class="btn btn-info ml-3 ml-md-1 mt-1" type="submit" >Buscar</button>
                </form>
                <br><br>
            </div>

        </nav>
    </div>
</div>

<div class="tab-content">

<!--Inicio -->

<div class="tab-pane fade show active mt-5 container"  id="inicio">
    
    <div class="row inicio text-white ">

        <div class="class col-12 col-md-2 pr-2 bg-light" style='border: 2px solid black'>
            <div class="card-columns-4 mt-4 ml-4 ">
                <div class="card-body card" style='border: 2px solid black ; background: rgba(33, 37, 41, 0.39)'>
                    <img src="https://powerbi.microsoft.com/pictures/application-logos/svg/powerbi.svg" width="60" height= "60" alt=""  >
                </div>
                <div class="card-footer text-white bg-dark p-1 ml-2" style='font-size:12px ; font-family: Russo One ; text-align: center ; width: 103px' >Power BI</div>
                <br>
                <div class="card-body card" style='border: 2px solid black ; background: rgba(33, 37, 41, 0.39)'>
                    <img src="https://powerbi.microsoft.com/pictures/application-logos/svg/powerapps.svg" width="60" height= "60" alt=""  >
                </div>
                <div class="card-footer text-white bg-dark p-1 ml-2" style='font-size:12px ; font-family: Russo One ; text-align: center ; width: 103px'>Power Apps</div>
                <br>
                <div class="card-body card" style='border: 2px solid black ; background: rgba(33, 37, 41, 0.39)'>
                    <img src="https://powerbi.microsoft.com/pictures/application-logos/svg/powerautomate.svg" width="60" height= "60" alt=""  >
                </div>
                <div class="card-footer text-white bg-dark p-1 ml-2" style='font-size:12px ; font-family: Russo One ; text-align: center ; width: 103px'>Power Automate</div>
                <br>
                <div class="card-body card" style='border: 2px solid black ; background: rgba(33, 37, 41, 0.39)'>
                    <img src="Icono_Excel.jpg" width="60" height= "60" alt=""  >         
                </div>
                <div class="card-footer text-white bg-dark p-1 ml-2" style='font-size:12px ;  font-family: Russo One ; text-align: center ; width: 103px'>Excel</div>
                <br>
            </div>
        </div>

        <div class="class fondo col-10 col-md-10 d-none d-md-block">
            <div class="card-colums cuadro justify-content-around ml-5 mr-4 mt-4 ">
                <br>
                <h4 class="card-header" > <strong> ¿Necesitas ayuda en tu estrategia de transformación digital? estoy deseando ayudarte ofreciendote mis conocimientos, apoyandomos en las herramientas o soluciones que nos ofrece Power Platform,</strong> </h4>
                <div class="card-body">
                    <p class="card-title text-white"><strong>Power Platform</strong> es un conjunto de herramientas de Microsoft integrada dentro de Office 365, que permite integrar y sincronizar todo el análisis de datos, creando flujos automatizados y aplicaciones móviles aumentando su productividad y eficiencia empresarial</p><br>
                    <p class="card-title text-white"><strong>Power BI, Power Apps, Power Automate y Power Virtual Agents</strong>  se asientan sobre Dataverse, que almacena todos los datos del negocio y facilita la seguridad y el uso de los mismos en las diferentes aplicaciones. Otros origenes a los que nos podemos conectar SQL Server, Sharepoint, Excel, etc.</p><br>
                </div>
                <br><br><br><br><br><br><br>
                <div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item" > 
                            <a href="#contacto" class="nav-link mr-3 btn btn-light mt-3" style="width: 130px;" data-toggle="tab">Contáctame</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div><br><br><br>

    <div class="row menu">
        <div class="col-2">
        </div>
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    
                <button type="button" class="navbar-toggler ml-3 mt-2 mb-1" data-toggle="collapse" data-target="#miMenu2">
                    <span class="navbar-toggler-icon"></span>   
                </button>  
            
                <div class="collapse navbar-collapse text-left" id="miMenu2"><br>
                    <ul class="nav nav-pills nav-fill mt-md-2 ml-3 ml-md-5" >
                        <li class="nav-item">
                            <a href="#powerbi" class="nav-link active btn btn-info navegadorI text-white text-left text-md-center pl-2" data-toggle="tab">Power BI</a>
                        </li>
                        <li class="nav-item">
                            <a href="#powerapps" class="nav-link btn btn-info navegadorI text-white text-left text-md-center pl-2" data-toggle="tab">Power Apps</a>
                        </li>     
                        <li class="nav-item">
                            <a href="#powerautomate" class="nav-link btn btn-info navegadorI text-white text-left text-md-center pl-2" data-toggle="tab">Power Automate</a>
                        </li>
                        <li class="nav-item">
                            <a href="#excel" class="nav-link btn btn-info navegadorI text-white text-left text-md-center pl-2" data-toggle="tab">Excel</a>
                        </li>
                    </ul>               
                </div>   
            </nav>
        </div>
    </div>

    <div class="productos">
            
        <div class="tab-content ">
    
            <!--Pagina Power BI -->

            <div class="tab-pane fade show active mt-4" id="powerbi">
                
                <a id=PowerBI></a><br>
                    <div class="titulo " ; style='text-align: center' >                     
                        <h1 class="text-info mb-4 bg-light">Power BI</h1>            
                    </div> 
                <section class="bg-light">
                    <section>
                        <br>
                        <div class="row powerbi justify-content-around">
                        <img class="img-thumbnail rounded" src="https://powerbi.microsoft.com/pictures/application-logos/svg/powerbi.svg" width="80" height= "80" alt="" class="power-img">
                        </div>     
                    </section>
                    
                    <section class="row powerbi justify-content-around">     
                        <div class="col col-10 col-md-3 h-25 rounded-top">Con Power BI, Unifique datos de numerosos orígenes para crear paneles interactivos y envolventes, así como informes que ofrezcan conocimientos útiles y mejoren los resultados empresariales</div>
                        <div class="col col-10 col-md-3 h-25 rounded-top">Crear una cultura controlada por datos con inteligencia empresarial para todos, Permita que todo el mundo, en todos los niveles de su organización, tome decisiones con confianza usando el análisis de última hora</div>
                        <div class="col col-10 col-md-3 h-25 rounded-top">Utilizar herramientas inteligentes para obtener resultados sólidos, Encuentre y comparta conocimientos significativos con cientos de visualizaciones de datos, funcionalidades de IA integradas, integración perfecta de Excel y conectores de datos creados previamente y personalizados.</div> 
                    </section>        
                        
                    <section class="row powerbi justify-content-around" >
                        <div class="row powerbi col col-10">
                            <div class="">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="5000">
                
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                    </div>
                
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="Presentación PowerBI-1.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerBI-2.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerBI-3.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerBI-4.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerBI-5.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerBI-6.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon bg-info" aria-hidden="true"></span>
                                        <span class="visually-hidden text-info"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon bg-info" aria-hidden="true"></span>
                                        <span class="visually-hidden text-info"></span>
                                        </button>
                                    </div>
                
                                </div>
                            </div>
                        </div>      
                    </section><br>            
                </section>
            </div>
    
            <!--Pagina Power Apps -->
            <div class="tab-pane fade mt-4" id="powerapps">
                <a id=PowerApps></a><br>
    
                    <div class="titulo" ; style='text-align: center'>                     
                        <h1 class="text-info mb-4 bg-light">Power Apps</h1>            
                    </div> 
    
                <section class="bg-light">
    
                    <section>
                        <br>
                        <div class="row powerapps justify-content-around">
                        <img class="img-thumbnail rounded" src="https://powerbi.microsoft.com/pictures/application-logos/svg/powerapps.svg" width="80" height= "80" alt="" class="power-img">
                        </div>  
                    </section>
                    
                    <section class="row powerapps justify-content-around">     
                        <div class="col col-10 col-md-3 h-25 rounded-top">Cree en tan solo unas horas aplicaciones que se conecten fácilmente a los datos, utilizando expresiones como las de Excel para incorporar la lógica, y ejecútelas en la Web y en dispositivos IOS y Android</div>
                        <div class="col col-10 col-md-3 h-25 rounded-top">Cree fácilmente aplicaciones profesionales, Aporte más agilidad a su organización creando rápidamente y sin apenas programación aplicaciones que modernicen los procesos y solucionen los desafíos más difíciles</div>
                        <div class="col col-10 col-md-3 h-25 rounded-top">Póngase en marcha rápidamente, Proporcione a su equipo los recursos necesarios para que pueda empezar a crear y lanzar aplicaciones de inmediato utilizando plantillas prediseñadas, sencillas funciones de arrastrar y soltar, y características que aceleren la implementación. Y, si necesita más, siempre puede implementar mejoras</div> 
                    </section>         
                            
                    <section class="row powerapps justify-content-around">
    
                        <div class="row powerapps col col-10">
                            <div class="">
                                <div id="carouselExampleIndicatorsApps" class="carousel slide" data-bs-ride="carousel">
    
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                    </div>
    
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="Presentación PowerApps-1.jpg" class="d-block w-100 h-25" alt="...">
                                        <div class="carousel-caption text-dark">
                                            <h5>Aplicación Gestión Turnos</h5> 
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerApps-2.jpg" class="d-block w-100 h-25" alt="...">
                                        <div class="carousel-caption text-dark">
                                            <h5>Aplicación Control y Gestión Envíos</h5> 
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerApps-3.jpg" class="d-block w-100 h-25" alt="...">
                                        <div class="carousel-caption text-dark">
                                            <h5>Aplicación Gestión Procesos Producción I</h5> 
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerApps-4.jpg" class="d-block w-100 h-25" alt="...">
                                        <div class="carousel-caption text-dark">
                                            <h5>Aplicación Gestión Procesos Producción II</h5> 
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerApps-5.jpg" class="d-block w-100 h-25" alt="...">
                                        <div class="carousel-caption text-dark">
                                            <h5>Aplicación Carrito Compras I</h5> 
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerApps-6.jpg" class="d-block w-100 h-25" alt="...">
                                        <div class="carousel-caption text-dark">
                                            <h5>Aplicación Carrito Compras II</h5> 
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerApps-7.jpg" class="d-block w-100 h-25" alt="...">
                                        <div class="carousel-caption text-dark">
                                            <h5>Aplicación Gestor Envios E-mail</h5> 
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerApps-8.jpg" class="d-block w-100 h-25" alt="...">
                                        <div class="carousel-caption text-dark">
                                            <h5>Aplicación Solicitud de Reembolsos</h5> 
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerApps-9.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                    </div>
    
                                    <div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon bg-info" aria-hidden="true"></span>
                                        <span class="visually-hidden text-info"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsApps" data-bs-slide="next">
                                        <span class="carousel-control-next-icon bg-info" aria-hidden="true"></span>
                                        <span class="visually-hidden text-info"></span>
                                        </button>
                                    </div>
    
                                </div>
                            </div>
                        </div>    
                        
                    </section>
    
                    <br>
    
                </section>

    
    
            </div>
    
            <!--Pagina Power Automate -->
            <div class="tab-pane fade mt-4" id="powerautomate">
                <a id=PowerAutomate></a><br>
    
                    <div class="titulo" ; style='text-align: center'>                     
                        <h1 class="text-info mb-4 bg-light">Power Automate</h1>            
                    </div> 
    
                <section class="bg-light">
    
                    <section>
                        <br>
                        <div class="row powerautomate justify-content-around">
                        <img class="img-thumbnail rounded" src="https://powerbi.microsoft.com/pictures/application-logos/svg/powerautomate.svg" width="80" height= "80" alt="" class="power-img">
                        </div>
                        
                    </section>
                    
                    <section class="row powerautomate justify-content-around">     
                        <div class="col col-10 col-md-3 h-25 rounded-top">Con Power Automate, Incorpore una potente automatización de flujos de trabajo directamente en sus aplicaciones con un enfoque sin programación que se conecta a cientos de servicios y aplicaciones</div>
                        <div class="col col-10 col-md-3 h-25 rounded-top">Utilice Power Automate para diseñar la lógica de sus aplicaciones de Power Apps. En lugar de escribir código, use el diseñador de flujos, en el que solo tiene que apuntar y hacer clic, para elaborar la lógica de negocios. Ejecute flujos fácilmente en sus aplicaciones con botones, acciones y entrada de datos</div>
                        <div class="col col-10 col-md-3 h-25 rounded-top">Automatice procesos en más de 200 orígenes conectados, Conéctese a sus datos, donde quiera que estén, para crear flujos de trabajo automatizados que hagan posible la colaboración y mejoren la productividad de su empresa. Comparta esta automatización de tareas fácilmente con su equipo</div> 
                    </section>         
                            
                    <section class="row powerautomate justify-content-around">
    
                        <div class="row powerautoamte col col-6">
                            <div class="">
                                <div id="carouselExampleIndicatorsAutomate" class="carousel slide" data-bs-ride="carousel">
    
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsAutomate" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsAutomate" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
    
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="Presentación PowerAutomate-1.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="Presentación PowerAutomate-2.jpg" class="d-block w-100 h-25" alt="...">
                                        </div>
                                    </div>
    
                                    <div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsAutomate" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon bg-info" aria-hidden="true"></span>
                                        <span class="visually-hidden text-info"></span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsAutomate" data-bs-slide="next">
                                        <span class="carousel-control-next-icon bg-info" aria-hidden="true"></span>
                                        <span class="visually-hidden text-info"></span>
                                        </button>
                                    </div>
    
                                </div>
                            </div>
                        </div>    
                        
                    </section>
    
                    <br> 
    
                </section>
    
    
            </div>
    
            <!--Pagina Excel -->
            <div class="tab-pane fade mt-4" id="excel">
    
                <a id=Excel></a><br>
    
                    <div class="titulo" ; style='text-align: center'>                     
                        <h1 class="text-info mb-4 bg-light">Excel </h1>            
                    </div>     
    
                    <section class="bg-light">
    
                        <section>
                        <br>
                        <div class="row excel justify-content-around">
                            <p><img class="img-thumbnail rounded" src="Icono_Excel.jpg" width="80" height= "80" alt="" ></p>
                        </div>
                        </section>
                            
                        <section class="row excel justify-content-around">  
                            <div class="col col-10 col-md-3 rounded-top">Con Excel, Analize los datos a traves de tablas dinamicas, utilize el editor de consultas Power Query para limpiar y transformar los datos, programe macros para automatizar tareas </div> 
                            <div class="col col-10 col-md-3 rounded-top">Power Query te permite extraer información de distintas fuentes de datos, transformar la data según sea necesario y luego cargarlos en algún sitio para su posterior uso; ya sea en una tabla de Excel o en un modelo de datos como Power Pivot</div>
                            <div class="col col-10 col-md-3 rounded-top">Con las tablas dinámicas de Excel puedes disponer de la información y ordenarla, Además, es dinámica porque puedes ver y seleccionar los datos en la tabla de Excel desde perspectivas diferentes y sin alterar el contenido. Se utilizan para resumir, consolidar, analizar, filtrar e informar datos relevantes</div> 
                        </section> 
                    
                        <section class="row excel justify-content-around" >
                    
                            <div class="row excel col col-10">
                                <div class="">
                                    <div id="carouselExampleIndicatorsExcel" class="carousel slide" data-bs-ride="carousel">
                    
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicatorsExcel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicatorsExcel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        </div>
                    
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img src="Presentación Excel-1.jpg" class="d-block w-100 h-25" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="Presentación Excel-2.jpg" class="d-block w-100 h-25" alt="...">
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsExcel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon bg-info" aria-hidden="true"></span>
                                            <span class="visually-hidden text-info"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsExcel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon bg-info" aria-hidden="true"></span>
                                            <span class="visually-hidden text-info"></span>
                                            </button>
                                        </div>
                    
                                    </div>
                                </div>
                            </div>    
                            
                        </section>
                    
                        <br>
                    
                    </section>
                    
    
            </div>
    
        </div>
    
    </div>
    
</div>

<!--Sobre Mí -->

<div class="tab-pane fade mt-5" id="sobremi">

<section class="bg-light" ; style='text-align: center'>

<div class="col-10 col-lg-7 m-4 presentación d-inline-block justify-content-center bg-info">
    <section class="">
        <div class="">       
        <p><img src="Foto_Personal.jpg" width="180" height= "180" alt=""  class="foto"></p>
        </div>
    </section>

    <section class="">
        <div class="">       
        <h1 class="text-white">Jesus Alastuey Sagaste</h1>
        </div>

        <div class="">       
        <h3 class="text-white">Citizen Developer</h3>
        </div>
    </section>

    <section class="row justify-content-center">
        <div class="texto col-12 col-md-11">
        <p class="">Apasionado del mundo de los datos y de la digitalización, me caracterizo por ser una persona con capacidad creativa e interés para implementar sus habilidades dentro de sus tareas, asimismo soy una persona bastante ordenada, tengo disponibilidad para viajar y cambiar de residencia, deportes o hobbies: natación y ciclismo</p>
        </div>
    </section>

    <section>
        <div class="">       
        <p><img src="Imagen_Curriculum.jpg" width="90" alt="" usemap="#img" class="curriculum">
        <map name ="img"><area shape="rect" coords="0,0,80,80" href="Curriculum_Vitae.pdf" download=""></map></p>
        </div>
        <p style='text-align: center; color: white; font-size:  12px; font-family: Candara'> Clik Imagen Para Descargar CURRICULUN VITAE</p>
    </section>

    <section>        
        <h1 class="text-white display-block justify-content-center">
            <i class="fa fa-facebook-square" aria-hidden="true" ></i>    
            <i class="fa fa-twitter-square" aria-hidden="true"></i>  
            <i class="fa fa-linkedin-square" aria-hidden="true"></i></h1><br>
    </section>

</div>

</section> 

</div>

<!--Contacto -->
       
<div class="tab-pane fade mt-5" id="contacto"> 

<section class="bg-light" ; style='text-align: center'>
<br>

    <section class="form-register col-10 col-lg-5">
        <form method="POST" action="index.php">
        <fieldset>
                <Legend>&emsp; Ingrese sus Datos &emsp; </Legend><br>
                <input class="controls text-dark" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre y Apellidos"><br><br>
                <input class="controls text-dark" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"><br><br> 
                <input class="controls text-dark" type="text" name="telefono" id="telefono" placeholder="Ingrese su Telefono"><br><br>
                <textarea class="controls text-dark" type="text" name="comentarios" id="comentarios" rows=5 cols="30" placeholder="Ingrese sus Comentarios"></textarea><br><br>
                <input class="boton" type="submit" name="enviar" value="Enviar"><br>
        </fieldset>
        </form>                
    </section> 
    <br><br>

</div><br><br>

<!--Blog-->
<div class="tab-pane fade bg-light" id="blog">



<div class="row blog p-4 justify-content-center">
    <div class="col-5 bg-white m-3" >
        <div class="p-3">
        <h3>Crear Formulario Registro, con HTML y CSS</h3>
        <hr>
        <p>Como crear un Formulario Web, para introductir datos mediante sus etiquetas de diferentes tipos button, option, select, text-area</p>
        <hr>
        <h6 style='font-size: 11px'>Duración: 11.50 Minutos</h6>      
        </div>
        <div class="ml-5">
        <iframe width="340" height="225" src="https://www.youtube.com/embed/OvhVLFQmgOY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="col-5 bg-white m-3" >
        <div class="p-3">
            <h3>Como Conectar un Formulario con una base de datos Web PHP </h3>
            <hr>
            <p>Ingresamos datos a una base de datos Web PHP desde una pagina Web</p>  
            <hr>
            <h6 style='font-size: 11px'>Duración: 29.07 Minutos</h6>      
        </div>  
        <div class="ml-5">
        <iframe width="340" height="225" src="https://www.youtube.com/embed/0dLs6129USw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

</div>




<!--Pruebalo Ya -->

<div class="tab-pane fade bg-light" id="pruebaloya">
        
        <section class="row blog justify-content-center align-items-center p-5">
            <div class="col col-lg-4 ml-4">
            <iframe width="300" height="525"  src="https://apps.powerapps.com/play/25f21153-52e6-44d1-be59-49cfe42341f3?tenantId=1b4f7ac7-a263-4943-abaf-eb5c9ed66ee1?tenantId=ad0f5bd4-ee8b-45d2-9f3f-416f084fa7ef?source=website&screenColor=rgba(165,34,55,1)" allow="geolocation; microphone; camera"></iframe>    
            </div>
            <aside class="col col-lg-6 ml-10">
            <ul>
                <li> 
                   <u><h4>Aplicación Gestor Turnos (Indicada para Profesionales),  (Realizada con Power Apps) </h4></u>
                </li> <br>
                <li> 
                    Listado de la cartera de clientes, con buscador, con indicador de servicios que va acumulando, acceso a la Ficha de Cliente para llevar la gestión de los mismos, contiene enlace desde dicho Listado en cada cliente que nos lleva a la pantalla de Gestión de los Turnos, para proceder a Reservar su Servicio,
                </li>
                <br>
                <li> 
                    Nos ofrece todos los servicios que ya tenemos reservados en el día elegido, teniendo una fácil visibilidad de los huecos que tenemos en la Agenda Diaria, (nos avisa cuando por error intentemos reservar una fecha/hora ya dada, bloqueándonos su reserva), podemos editar, modificar y eliminar los turnos ya establecidos desde la misma pantalla,
                </li>
                <br>
                <li> 
                    Tenemos pantalla para poder consultar y analizar el Historial de Servicios realizados, pudiendo filtrarlos por fecha, cliente o por servicio, ofreciéndonos la suma de servicios y el importe facturado según el filtro que nos interese,
                </li>
            </ul>
            </aside>
        </section>
        
   
</div><br><br><br>

</div>



<section class="row justify-content-around">
    <footer class="">
        <img src="Logo.jpg" width="80" height="80" alt=""> <br><br> 
        <i class="fa fa-map"></i>&nbsp&nbsp Av-Fernando El Catolicos, 12  4-I <br>
        50600 EJEA DE LOS CABALLEROS <br>
        (Zaragoza) <br>
        <i class="fa fa-envelope"></i>&nbsp&nbsp jaalastuey@gmail.com <br>
        <i class="fa fa-phone-square"></i>&nbsp&nbsp +34 616 513 616 <br><br>
        Política de privacidad · Política de cookies · Aviso legal · Copyright © 2020
    </footer>
</section><br>
</div>

</body>

<script src="jquery.js"></script>
<script src="popper.js"></script>
<script src="bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</html>









<?php
if(isset($_POST['enviar'])){
    $id = rand(1,9999);
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $comentario = $_POST["comentarios"];

    $insertarDatos = "INSERT INTO visitantes VALUES('$id','$nombre','$correo','$telefono','$comentario')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if(!$ejecutarInsertar){echo"Error en el Codigo SQL";}
}
?>