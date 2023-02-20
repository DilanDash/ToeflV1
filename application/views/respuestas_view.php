<?php
$id_respuesta = 1;
$texto_respuesta = "Respuesta 1";
$correcta = TRUE;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       /* foreach ($query->result() as $row)
        {
          echo $row->idPreguntas;
          echo $row->texto_preguntas;
          echo $row->imagen;
          echo $row->audio;
        }*/
      /*echo "ID     Valor </br></br>";
          foreach ($query->result() as $key => $value) {
            echo "$key     $value </br>";
            
          }*/
          echo "ID        Texto_respuesta        Correcta </br>";
          foreach ($query->result() as $row)
          {
            echo $row->id_respuesta."     ";
            echo $row->texto_respuesta."     ";
            echo $row->correcta."</br>";
          }
 //print_r($row);


    ?>
</body>
</html>