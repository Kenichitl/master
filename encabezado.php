<!DOCTYPE html>
<html>
<head>
	<title>Doctorado</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/menubar.css">

	<meta charset="utf-8">
</head>
<body>
<center>
    <form method="POST">
        <table>
        <tr>
            <td colspan="2">
            <p class="pageh3"><strong>Secretaría de Educación Pública de Hidalgo</strong></p>
            </td>
        </tr>
        <tr>
            <td>
                <img src="img/titulo.png" /></div>
            </td>
        </tr>
        <tr>
            <td>
            <CENTER>
                <ul class="mi-menu">
              <li><a href="index.php" target="info">Inicio</a></li>
                <li><a href="#">Unidades UPN participantes </a>
                    <ul>
                        <li class="<?php echo $pagina=='morelos'?'active':'';?>"> <a href="?op=morelos">Morelos</a></li>
                        <li class="<?php echo $pagina=='puebla'?'active':'';?>"><a href="?op=puebla" target="info">Puebla</a></li>
                        <li  class="<?php echo $pagina=='guerrero'?'active':'';?>"><a href="?op=guerrero" target="info"> Guerrero</a></li>
                        <li class="<?php echo $pagina=='hidalgo'?'active':'';?>"><a href="?op=hidalgo" target="info">Hidalgo</a></li>
                    </ul>
                </li>
                <li><a href="#">Plan y Programa de estudio</a>
                    <ul>
                        <li  class="<?php echo $pagina=='PropositosGenerales'?'active':'';?>"><a href="?op=PropositosGenerales" target="info">Propositos </a></li>

                        <li class="<?php echo $pagina=='ModeloPeda'?'active':'';?>"><a href="?op=ModeloPeda" target="info"> Modelo Pedagógico</a></li>
                        <li  class="<?php echo $pagina=='PerfilEgreso'?'active':'';?>"><a href="?op=PerfilEgreso" target="info"> Perfil de Egreso</a></li>
                        <li><a href="#" target="info">Mapa Curricular  </a>
                        <ul style="margin-left: 105px">                         
                        <li class="<?php echo $pagina=='ProgramDoc'?'active':'';?>"><a href="?op=ProgramDoc" target="info"><h4>Doctorado</h4></a></li>
                        <li class="<?php echo $pagina=='General'?'active':'';?>"><a href="?op=General" target="info"> <h4>General</h4></a></li>
                        <li class="<?php echo $pagina=='Campo'?'active':'';?>"><a href="?op=Campo" target="info"><h4>Campo de formacion</h4></a></li>
                         
                         </ul>
                         </li>
   

                    </ul>
                </li>   
                <li class="<?php echo $pagina=='Lineas'?'active':'';?>"><a href="?op=Lineas">Lineas de investigacion</a>
                </li>
                <li class="<?php echo $pagina=='planta_academica'?'active':'';?>"><a href="?op=planta_academica">Planta academica</a>
                </li>  
                <li><a href="#">Alumnos</a>
                    <ul>
                        <li  class="<?php echo $pagina=='proyectos'?'active':'';?>"><a href="?op=proyectos" target="info">Proyectos</a></li>
                        <li class="<?php echo $pagina=='avisos'?'active':'';?>"><a href="?op=avisos" target="info">Avisos</a></li>
                        <li ><a href="paginas/galeria_videos.php">  Galerias y Videos</a></li>
                    </ul>
                </li> 
                <li style="margin-left: 55px; margin-top: 10px;" >
                    <script> 

                    var mydate=new Date(); 
                    var year=mydate.getYear(); 
                    if (year < 1000) 
                    year+=1900; 
                    var day=mydate.getDay(); 
                    var month=mydate.getMonth()+1; 
                    if (month<10) 
                    month="0"+month; 
                    var daym=mydate.getDate(); 
                    if (daym<10) 
                    daym="0"+daym; 
                    document.write("<small><font color='white' face='Tahoma'><b>"+daym+"/"+month+"/"+year+"</b></font></small>") 

                        </script> 

                </li>
                
                
            </ul>
            </td>

        </tr>
        </CENTER>
    </table>
    </form>
    </td>
    </tr>
    </table>
    </form>
    </center>


</body>
</html>