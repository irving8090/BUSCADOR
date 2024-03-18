<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ci | Inicio</title>
        <link href="img/cicon.png" rel="shortcut icon">
    </head> 
    <body style="text-align: center;">
    <ul>
<h1 id="titulo">ENGLISH GROUP FINDER</h1>
<img id="ci" src="img/logo.png">
<img id="utt" src="img/utteclogo.png">
</ul>
<div id="inicio">
    <form class="p-5 bg-light" method="POST">

        <div class="form-group">
        <h1 id="titulos">Ingresa tu matrícula</h1>
            
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <p><input  name="ingresoMatricula" type="text" placeholder="Ejemplo: 2521160121" size="20" id="matricula"></p>
                 
            </div>
            
        </div>


        <?php
            $ingreso = new ControladorFormularios();
            $ingreso->ctrIngreso();
        ?> 

<p><input  name="btnIngresar" type="submit" id="btnINGLES" value="Log in"></p>
                <a href="vistas/paginas/login_admin.php"><p id="txtLOGIN">No soy Estudiante</p></a>
    </form>
</div>
            
                
    </body> 
    <style>
        body{
    background-color: #F1F1F1;
    padding: 0;
    margin: 0;
}
ul {
    position: absolute;
    width: 1489px;
    height: 150px;
    left: 0px;
    top: -20px;
    background: rgba(255, 199, 0, 0.43);
    mix-blend-mode: normal;
}
#ci{
    position: absolute;
    width: 229.73px;
    height: 200px;
    left: 110px;
    top: -25px;  
}
#utt{
    position: absolute;
    width: 229.73px;
    left: 1180px;
    top: 40px;  
}
@font-face {
    font-family: FuenteCI;
    src: url(ReachStory.ttf);
}
#titulo{
    font-size: 85px;
    color: black;
    font-family: FuenteCI;
}
#titulos{
    font-size: 50px;
    color: black;
    text-shadow: rgb(255, 233, 63) 6px 1px 1px;
    font-family: FuenteCI;
    font-weight: lighter;
}
#inicio{
    box-sizing: border-box;
position: absolute;
width: 400px;
height: 450px;
left: 570px;
top: 200px;
border-radius: 15px;
background: #FFFFFF;
border: 3px solid #000000;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

#btnINGLES{
    border-radius: 5px;
    background: rgba(255, 199, 0, 0.43);
    width: 300px;
    height: 35px;
    font-weight: bold;
    font-size: 20px;
    color:black;
    border: none;
    position: relative;
    border-style: hidden;
    border-bottom: 2px solid grey;
    text-align: center;
} #btnINGLES:hover{
    background-color: #FFA500;
    color:black;
    cursor: pointer;
}
#pie{
    font-weight: bold;
    font-size: 25px;
    margin-top: 5%;
    font-family: FuenteCI;
    color: green;
    word-spacing: 6px;
    letter-spacing: 8px;
}
#matricula{
    font-family: FuenteCI;
    font-size: 35px;
}
#matri{
    font-family: cursive;
    position: relative;
    border-style: hidden;
    border-bottom: 2px solid grey;
    text-align: center;
}
#alerta{
    background: transparent;
}

    @media screen and (max-width: 768px) {
  /* Styles for screens smaller than 768px */
  body {
    max-width: 200%;
    font-size: 14px;
  }
  #utt, #ci{
    display: none;
  }
  ul{
    width:190%;
    height: 15%;
    transform: translateX(-50%); 
  }
  
  #titulo {
    font-size: 45px; 
    transform: translateX(25%);
  }
  
  #inicio {
    width: 300px;
    height: auto;
    left: 50%;
    transform: translateX(-50%);
    top: 140px;
  }
  
  #btnINGLES {
    width: 90%;
  }
}

@media screen and (min-width: 769px) and (max-width: 1024px) {
  /* Styles for screens between 769px and 1024px */
  body {
    font-size: 16px;
  }
  
  #ci {
    width: 150px;
  }
  
  #utt {
    width: 100px;
    left: 1050px;
  }
  
  #titulo {
    font-size: 60px;
    position: fixed;
  }
  
  #inicio {
    width: 500px;
    height: auto;
    left: 50%;
    transform: translateX(-50%);
  }
  
  #btnINGLES {
    width: 70%;
  }
}

@media screen and (min-width: 1025px) {
  /* Styles for screens larger than 1024px */
  body {
    font-size: 18px;
  }
  
  #titulo {
    font-size: 85px;
  }
  
  #ci {
    width: 250px;
  }
  
  #utt {
    width: 200px;
    left: 1180px;
  }
  
  #inicio {
    width: 400px;
    height: auto;
    left: 50%;
    transform: translateX(-50%);
  }
  
  #btnINGLES {
    width: 50%;
  }
}

</style>

    