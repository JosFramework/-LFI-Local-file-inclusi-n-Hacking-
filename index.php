<!-- Esta es la web en php para ver la vulnerabilidad y el Porqué se da? !! leer abajo también !! -->

<!-- Web -->
<html>
<title>Web Vuln LFI</title>

<body>
    <center>
        <h1>Web vulnerable a LFI</h1>
        <br><br><br>
        <p>En la url proporciona algo como esto luego del <strong>index.php?ID=</strong>escriba la ruta</p>
    </center>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</body>

</html>

<?php
if (isset($_GET['ID'])) {

     // Se obtiene el ID por get para validar y ver en el navegador se espera un ID como parámetro en la petición $GET y se usa para aplicar el dinámismo y lógica a la web.
     $ID = $_GET['ID'];
      
     // Este mensaje es para la ruta del pdf es para demostrar como yo como atacante puedo leer un pdf que se encuentra en una carpeta se supone que son ilegibles en la web
     if($ID==='/Secret/Usuarios.pdf'){
        echo '<h1>¿Este pdf es ilegible?👀</h1>';
        echo '<h3 style="color:red;">No, Si se puede leer solo presione inspeccionar en el body, luego modificar como html y copia pega este codigo en donde dice !!!⬇️Coloque el código aquí !!!, cierra y listo podrás descargar el pdf</h3>';
        echo '<br><hr>';
        echo htmlspecialchars('Copie esto : <a href="Secret/Usuarios.pdf" download>Usuarios.pdf</a>');
        echo '<hr><br>';
        echo '<hr>';
        echo '⬇️Coloque el código aquí y Descargue el pdf ➡️➡️➡️<hr>';
        echo '<br><br>';
        include('./Secret/Usuarios.pdf');
      }
      else if($ID==='/etc/passwd'){
        echo '<br><hr>';
        echo '<h1>Ruta de  Linux</h1>';
        include('./etc/passwd');
        echo '<br><br><hr>';
        
   }
}


  
else {
    echo "<center><h4 style='color:red;'>No se proporcionó el parámetro ID en la URL.</h4></center>";
}
?>

<!-- Como se puede reducir el riesgo o mitigar un porcentaje alto de la vulnerabilidad
 En lo personal con lo apréndido podriámos limitar las rutas, negar el acceso, sanitizar la 
 entrada es una buena forma de proporcionar una mayor seguridad la mejor seria implementar nosotros mismos un contraataque 
 
 el atacante o hacker malicioso en linux usara tecnicas de evasión como
 /var/www/html/../../../../../../../../../../../../etc/hosts y si sanitizamos el input el atacante seguira intentando varias formas como
 /var/www/html/….//….//….//….//….//….//….//….//….//….//….//….//etc/hosts entonces seguira teniendo acceso a las rutas 

 Nosotros podemos incluir el archivo include('./Secret/Usuarios.pdf'); donde se valide la ruta exacta de lo contrario mostrara un acceso denegado 
 - Usar rutas absolutas
 -Revisar los permisos de los archivos
 -Redireccionar al usuario si inteta entrar a URLS peligrosas o confidenciales 

-->