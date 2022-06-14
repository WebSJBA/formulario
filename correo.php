<?php
  $destinatario = 'bricenosamuel2308@gmail.com';
  // esto es al correo de destino

  $nombre = $_POST['nombre'];
  $numero = $_POST['numero'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $header = 'Contacta con Samuel';
  $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

  mail($destinatario, $asunto, $mensaje, $header);
  echo "<script>alert('Mensaje Enviado Exitosamente')</script>";
  echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>