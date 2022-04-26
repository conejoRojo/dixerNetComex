<?php
   //Reseteamos variables a 0.
   $nombre = $apellido = $pais = $email = $provincia = $municipio = $empresa = $sitioWeb = $mensaje = $para = $headers = $msjCorreo = NULL;

   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $pais = $_POST['pais'];
      $email = $_POST['email'];
      $provincia = $_POST['provincia'];
      $municipio = $_POST['municipio'];
      $empresa = $_POST['empresa'];
      $sitioWeb = $_POST['sitioWeb']
      $mensaje = $_POST['mensaje'];
      //producción
     // $para = 'inversionycomex@mp.gba.gov.ar';
        //desarrollo
        $para = 'gastiarena@gmail.com';
      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Apellido y Nombre: " . $apellido . " " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Pais: " . $pais;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Provincia/Región: " . $provincia;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Municipio: " . $municipio;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Empresa: " . $empresa;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "SitioWeb: " . $sitioWeb;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "E-mail: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

    if (mail($para, "Consulta desde landing page inversiones.gba.gob.ar", $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            // hacer visible 
           
            echo "<script language='javascript'>
            alert('enviado');
            // document.getElementById("gracias").style.display = 'block';
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your message has been sent successfully. We will contact you shortly.");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html"> 

</head>